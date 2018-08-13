<?php

namespace Drupal\hmp_import\Controller;

use \Drupal\Core\Controller\ControllerBase;
use \Drupal\Core\Routing\TrustedRedirectResponse;
use \Drupal\node\Entity\Node;
use \Drupal\taxonomy\Entity\Term;
use \Drupal\file\Entity\File;
use \Drupal\paragraphs\Entity\Paragraph;

class Import extends ControllerBase {
	
	public $file_path = 'ftp://connew:f*Fw$J[}i}%-@host2.hmp10.com/public_html';
	//public $file_path = 'https://consultant360.com/';
	public $url = 'http://consultant360.com';
	public $typeMatch = array(
		'article' => 'article',
		'story' => 'article',
		/*'calendar_home_page' => 'trivia',
		'page' => 'page',
		'news' => 'article',
		'supplement' => 'supplement',
		'podcast' => 'podcast',
		'video' => 'video',
		'blog' => 'blog',*/
		//'ad' => 'road_block',
	);

	public function batchRun() {
		\Drupal::service('page_cache_kill_switch')->trigger();
		\Drupal::state()->set("import_offset", 20500);
		//$this->deleteAll();
		return array(
			'#type' => 'markup',
			'#markup' => t('<div id="percent"></div><div id="ajax-results"></div>'),
		);
	}

	public function import($offset,$qty) {
		\Drupal::service('page_cache_kill_switch')->trigger();
		$import_offset = \Drupal::state()->get("import_offset");
		if(!$import_offset)
			$import_offset = 0;
		if($offset == 0 && $import_offset != 0) 
			$offset = $import_offset;
		
			$items = $this->makeHTTPRequest($offset,$qty);
			$ran = 0;
			$count = 0;
			//echo ' ooo ' ; print_r($offset);exit;
			foreach($items as $item) {
				//echo ' - ' . $item->nid;
				$count++;
				$this->createNode($item);
				$ran = 1;
			}
			\Drupal::state()->set("import_offset", $offset+$count);
			if($ran == 1) 
				echo  $offset + $qty;
			else {
				echo 'testing';print_r($items);exit;
				echo 'complete';
			}
			exit;

		echo 'FAIL';exit;
	}


	private function makeHTTPRequest($offset,$qty) {

		$path = $this->url . '/api/export/content/' . $offset . '/' . $qty;

		$response = \Drupal::httpClient()->get($path, array('headers' => array('Accept' => 'text/plain')));
	    $data = json_decode($response->getBody());
	    
		return $data;
	}


	private function createNode($item) {
		if(isset($this->typeMatch[$item->type]) && $item->title) {
			$channel = 1793;
			if(isset($item->field_brand->und[0])) {
				if($item->field_brand->und[0]->tid == 4317) {
					$channel = 11293;
				}
			}
			$nid = $this->nodeExists($item->title,$item->created);
			if($nid) {
				$node = Node::load($nid);
				/** Resouirce SYNC
				$build = $this->handleResourceCenter($item,$node_build);
				if($build['field_resource_center']) {
					$rid = $node->get('field_resource_center')->getValue();
					$sect = $node->get('field_section')->getValue();
					//if(!$rid[0]['target_id'] || !$sec[0]['target_id']) {
						$node->set('field_resource_center',$build['field_resource_center']);
						$node->set('field_section',$build['field_section']);
						$node->save();
						//echo '<pre>nid:';print_r($nid);print_r($build);exit;
					//}
				}**/
				//PARAGRAPH UPDATE19400
				$pid = $node->get('field_body_content')->getValue();
				$para = Paragraph::load($pid[0]['target_id']);
				$b = $para->get('field_section_body')->getValue();
				$pages = explode('<!--pagebreak-->',$b[0]['value']);
				if(isset($pages[1])) {
					//echo '<pre>nid:';print_r($nid);exit;
					$paragraphs = array();
					foreach($pages as $page) {
						$paragraph = Paragraph::create([
							'type' => 'body_content',
							'field_section_body' => array(
							    "value"  =>  $page,
							    "format" => "full_html"
								),
							'field_section_title' => array(
								"value" => '',
							),
						]);
						$paragraph->save();	
						$paragraphs[] = array(
							'target_id'=>$paragraph->id(),
							'target_revision_id' => $paragraph->getRevisionId(),
						);
					}
					//echo '<pre>';print_r($nid);exit;
					$node->set('field_body_content',$paragraphs);
					$node->save();
					//echo '<pre>';print_r($nid);exit;
				}
			}
			else {
				$node_build = array(
					'type'        => $this->typeMatch[$item->type],
					'title'       => $item->title,
					'updated'		=> $item->changed,
					'created'		=> $item->created,
					'status' => $item->status,
					'path' =>  ['alias' => '/' . $item->path],
					'field_channel' => array('target_id'=>$channel),
					'field_short_title' => $item->field_short_title->und[0]->value,
					'field_content_summary' => isset($item->field_description->und[0]->value)?$item->field_description->und[0]->value:$item->body->und[0]->summary,
				);
				
				
				
				$node_build = $this->handleFiles($item,$node_build);
				$node_build = $this->handleGlobal($item,$node_build);
				$node_build = $this->handleIssue($item,$node_build);
				$node_build = $this->handleResourceCenter($item,$node_build);
				$node_build = $this->handleTrivia($item,$node_build);
				if($this->typeMatch[$item->type] == 'article')
					$node_build = $this->handleArticle($item,$node_build);
				else 
					$node_build = $this->handleBody($item,$node_build);


				$node = Node::create($node_build);
				$node->save();				
				if(isset($item->field_medical_resource_center->und[0])) {
					//echo 'ts<pre>';print_r($item->field_medical_resource_center->und);exit;
				}
			}
		}
	}

	private function nodeExists($name,$created = null,$type = null) {
		$nid = \Drupal::database()->select('node_field_data','n')->fields('n',['nid'])->condition('n.title',$name,'=');
		if($created)
			$nid->condition('n.created',$created,'=');
		if($type)
			$nid->condition('n.type',$type,'=');
		$nid = $nid->execute()->fetchField();
		if($nid)
			return $nid;
		return FALSE;
	}

	private function handleIssue($item,$node_build) {
		$nid = $this->nodeExists($item->field_issue->und[0]->term->name);
		if($nid) {
			$node_build['field_issue'] = array('target_id'=>$nid);
		} else if(isset($item->field_issue->und[0]->term->name)){
			$new_issue = array(
				'title' => $item->field_issue->und[0]->term->name,
				'type' => 'issue',
				'created' => strtotime($item->field_issue->und[0]->term->field_publish_date->und[0]->value),
				'status' => 1,
				'field_journal_date_m_y_' => date('Y-m-d',strtotime($item->field_issue->und[0]->term->field_publish_date->und[0]->value)),
				'field_channel' => array('target_id'=>1793),
			);
			if(isset($item->field_issue->und[0]->term->field_issue_cover)) {
				$new_issue['field_image'] = $this->multipleFileHandle($item->field_issue->und[0]->term->field_issue_cover->und);
			}

			$node = Node::create($new_issue);
			$node->save();
			$node_build['field_issue'] = array('target_id'=>$node->get('nid')->getString());

		}
		return $node_build;
	}

	private function handleResourceCenter($item,$node_build) {
		$nid = $this->nodeExists($item->field_medical_resource_center->und[0]->term->name,null,'resource_center');
		if($nid) {
			$node_build['field_resource_center'] = array('target_id'=>$nid);
		} else if(isset($item->field_medical_resource_center->und[0]->term->name)){
			$new_center = array(
				'title' => $item->field_medical_resource_center->und[0]->term->name,
				'type' => 'resource_center',
				'status' => 1,
				'field_channel' => array('target_id'=>1793),
			);
			$node = Node::create($new_center);
			$node->save();
			$node_build['field_resource_center'] = array('target_id'=>$node->get('nid')->getString());

		}
		$node_build['field_section'] = $this->getTIDByName($item->field_medical_resource_center->und[1]->term->name,'section');

		return $node_build;
	}

	private function handleArticle($item,$node_build) {
		$type = array(
			'article' => 6614,
			'story' => 6616,
			'news' => 6615,
		);
		$node_build['field_article_type'] = array('target_id' => $type[$item->type]);
		
		

		$paragraph = Paragraph::create([
			'type' => 'body_content',
			'field_section_body' => array(
			    "value"  =>  $this->parse_body($item->body->und[0]->value),
			    "format" => "full_html"
				),
			'field_section_title' => array(
				"value" => '',
			),
		]);
		$paragraph->save();	
		$node_build['field_body_content'][] = array(
			'target_id'=>$paragraph->id(),
			'target_revision_id' => $paragraph->getRevisionId(),
		);
		
		return $node_build;
	}
	private function handleBody($item,$node_build) {
		if($item->type == 'podcast') {
			$node_build['body'] = array(
				'value' => $this->parse_body($item->body->und[0]->value),
				'format' => 'php_code',
			);
		} else {
			$node_build['body'] = array(
				'value' => $this->parse_body($item->body->und[0]->value),
				'format' => 'full_html',
			);
		}
		$node_build['field_article_list'] = array(
			'value' => $item->field_article_list->und[0]->value,
			'format' => 'full_html',
		);
		return $node_build;
	}


	private function handleGlobal($item,$node_build) {
		if(isset($item->field_topics->und[0]))
			$node_build['field_topics'] = $this->handleTaxonomy($item->field_topics->und,'topics');
		if(isset($item->field_topic->und[0]))
			$node_build['field_topics'] = $this->handleTaxonomy($item->field_topic->und,'topics');
		$node_build['field_article_link'] = $item->field_external_link->und[0]->value;
		$node_build['field_pearls'] = $this->handleTaxonomy($item->field_pearls->und,'pearls');
		$node_build['field_category'] = $this->handleTaxonomy($item->field_category->und,'category');
		$node_build['field_option'] = isset($item->field_featured_article->und[0]->value)?array('target_id'=>6619):null;
		if(isset($item->field_link->und[0]))
			$node_build['field_article_link'] = $item->field_link->und[0]->url;
		if(isset($item->field_itemlink->und[0])) {
			$node_build['field_article_link'] = $item->field_itemlink->und[0]->value;
			$node_build['field_option'] = array('target_id'=>7110);
		}
		if(isset($item->field_doc_channel_embed->und[0]))
			$node_build['field_embed_code'] = array(
				'format' => 'php_code',
				'value' => $item->field_doc_channel_embed->und[0]->value,
			);
		if(isset($item->field_include_url->und[0])) {
			foreach($item->field_include_url->und as $url) {
				$node_build['field_include_url'][] = $url->value;
			}
			$node_build['field_enabled'] = 1;
		}
		if(isset($item->field_id->und[0]))
			$node_build['field_id'] = $item->field_id->und[0]->value;
		return $node_build;
	}

	private function handleTrivia($item,$node_build) {
		$node_build['field_answer'] = array(
			"value"  =>  $item->field_answer->und[0]->value,
			"format" => "full_html"
		);
		$node_build['field_question'] = array(
			"value"  =>  $item->body->und[0]->value,
			"format" => "full_html"
		);
		$node_build['field_just_question'] = $item->field_just_question->und[0]->value;
		$node_build['field_date'] = date('Y-m-d',strtotime($item->field_date->und[0]->value));
		return $node_build;
	}




	private function handleTaxonomy($terms,$vocab) {
		$items = array();
		foreach($terms as $term) {
			$tid = $this->getTIDByName($term->name,$vocab);
			if(!$tid)
				$tid = $this->createTerm($term->name,$vocab);
			$items[] = $tid;
		}
		return $items;
	}

	private function createTerm($name,$vocab) {
		if($name != '') {
			$term = Term::create([
			  'name' => $name, 
			  'vid' => $vocab,
			])->save();
			return $this->getTIDByName($name,$vid);
		}

	}

	private function getTIDByName($term_name,$vid) {
		$query =  \Drupal::database()->select('taxonomy_term_field_data','td')
			->fields('td',['tid'])->condition('td.name',$term_name,'=');
		if($vid)
			$query->condition('td.vid',$vid,'=');
		$tid = $query->execute()->fetchField();
		if($tid)
			return array('target_id'=>$tid);
		else {
			return $this->createTerm($term_name,$vid);
		}

		return null;
	}









	/*
	Transfer/relate images from the nodes
	*/
	private function import_file($path,$img,$full = null) {

		//If "img" is set, update the node with the image FID
		$fid = null;
		if(isset($img)) {
			$img_name = str_replace('%20','_',basename($img));
			$path = str_replace('%20',' ',$path);

			$handle = fopen($this->file_path . $path, 'r');
			$file = file_save_data($handle, 'public://transfer/' . $img_name);
			fclose($handle);
			
			if($file && $full == '') {
				$fid = $file->id();
			}
			else if($file && $full) {
				return $file;
			}
		}	
	
	return $fid;
	}



	private function multipleTaxonomyHandle($item,$vid) {
		$terms = array();
		foreach($item as $term) {
			if(isset($term->target_id)) {
				$term_name = $this->getOriginalTermName($term->target_id);
				$terms[] = $this->getTIDByName($term_name,$vid);
			}
		}
		return $terms;
	}

	private function getOriginalTermName($term,$node = null) {
		$path = $this->url . '/hmp/export/get/term-name/' . $term . '?node=' . $node;
		$response = \Drupal::httpClient()->get($path, array('headers' => array('Accept' => 'text/plain')));
	    $data = json_decode($response->getBody());
	    return $data->name;
	}



	private function getTIDByNameNoCreate($term_name) {
		$tid =  \Drupal::database()->select('taxonomy_term_field_data','td')
			->fields('td',['tid'])->condition('td.name',$term_name,'=')->execute()->fetchField();
		if($tid)
			return array('target_id'=>$tid);
		return null;
	}

	private function getFileInfo($file) {
		return array(
			'path' => str_replace('public://','/sites/default/files/',$file->uri),
			'file' => $file->filename,
		);
	}

	private function handleFiles($item,$node_build) {
		if(isset($item->field_pdf)) {
			$node_build['field_pdf'] = $this->multipleFileHandle($item->field_pdf->und);
		}
		if(isset($item->field_webcast)) {
			$node_build['field_file'] = $this->multipleFileHandle($item->field_webcast->und);
		}
		if(isset($item->field_audio_file)) {
			$node_build['field_audio_file'] = $this->multipleFileHandle($item->field_audio_file->und);
		}
		if(isset($item->field_image)) {
			$node_build['field_image'] = $this->multipleFileHandle($item->field_image->und);
		}
		if(isset($item->field_doc_channel_thumb)) {
			$node_build['field_image'] = $this->multipleFileHandle($item->field_doc_channel_thumb->und);
		}			
		return $node_build;
	}

	private function multipleFileHandle($item) {
		$files = array();
		foreach($item as $file) {
			$fileInfo = $this->getFileInfo($file);
			$files[] = $this->import_file($fileInfo['path'],$fileInfo['file']);
		}
		return $files;
	}

	/*
	 Delete stuff
	*/
	 public function deleteAll() {
		\Drupal::service('page_cache_kill_switch')->trigger();

 		$result = \Drupal::entityQuery("node")
 			//->condition('type','page','!=')
 			->condition('type','channel','!=')
		    ->range(0,650)
		    ->execute();
		$storage_handler = \Drupal::entityTypeManager()->getStorage("node");
		$entities = $storage_handler->loadMultiple($result);
		$storage_handler->delete($entities);
		/*$result = \Drupal::entityQuery("taxonomy_term")
 			//->condition('type','page','!=')
 			//->condition('type','channel','!=')
		    ->range(0,650)
		    ->execute();
		$storage_handler = \Drupal::entityTypeManager()->getStorage("taxonomy_term");
		$entities = $storage_handler->loadMultiple($result);
		$storage_handler->delete($entities);	*/	
				

	}

	private function getImageByName($name) {
		$fid = \Drupal::database()->select('file_managed','fm')
			->fields('fm',['fid'])->condition('fm.filename',$name,'=')->execute()->fetchField();
		if($fid)
			return $fid;
		return null;
	}

	/*
	Pull the images out of the body, then run them through the img_field function to transfer them
	*/
	private function parse_body($html) {
		return $html;
		//if($html != '' && strpos($html,'<php') != FALSE) {&& $html !== null && strpos($html,'<php') != FALSE
		if($html !== ''  && $html !== null && strpos($html,'<php') != FALSE ) {
			$src = (simplexml_import_dom(\DOMDocument::loadHTML($html))->xpath("//img/@src"));
			foreach($src as $s) {
				$path = (string)$s;
				$img = str_replace($this->url,'',$path);
				$name = explode('/',$img);
				//if(strpos($img,'http')===FALSE || strpos($img,'consultant360.com') !== FALSE) {
					$file = $this->import_file($img,end($name),5);
					if($file) {
						$new_path = str_replace('http://2018.consultant360.com','',str_replace('public://','/sites/default/files/',($file->get('uri')->getString())));
						//echo $new_path;exit;
						$html = str_replace($path,$new_path,$html);	
					}
				//}
			}
		}
		return $html;
	}

} ?>