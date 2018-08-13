<?php

namespace Drupal\hmp_channel\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use \Drupal\node\Entity\Node;

/**
 * Block that produces a list of all parent categories, given context, also lists current parent category's children.
 *
 * @Block(
 *   id = "sidebar_block",
 *   admin_label = @Translation("Sidebar Block"),
 * )
 */
class Sidebar extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $output = '';
    if($GLOBALS['channel']['sidebar']) {
      $node = $this->getCurrentNode();
      $output = $this->getBlocks($node);
    }
    return array(
      '#markup' => $this->t($output),
      '#cache' => [
      	'max-age' => 0,
      ],
    );
  }

  private function getCurrentNode() {
    $nid = $GLOBALS['channel']['channel_nid'];
    if($GLOBALS['channel']['resource_center_nid'] != 'all')
      $nid =  $GLOBALS['channel']['resource_center_nid'];
    else if($GLOBALS['channel']['micro_site_nid'] != 'all')
      $nid = $GLOBALS['channel']['micro_site_nid'];
    $node = Node::load($nid);
    return $node;
  }

  /**
   ** Load in the requested views for the current page
   ** (Resource Center / Micro Site / Channel Page)
   **/
  private function getBlocks($node) {
    $output = '';
    if($node->field_sidebar_blocks[0]) {
      $blocks = $node->get('field_sidebar_blocks')->getValue();
      foreach($blocks as $block) {
        $item = \Drupal\paragraphs\Entity\Paragraph::load($block['target_id']);
        if(!isset($item->field_display_type[0]->target_id))
          break;
        $view = \Drupal\taxonomy\Entity\Term::load($item->field_display_type[0]->target_id);
        switch($view->name[0]->value) {
          case 'ENews':
            $display = $this->t($this->enewsForm());
          break; 
          case 'Ad 1':
            $display = $this->t(hmp_channel_get_ad_code($view->field_view_machine_name[0]->value));
          break;
          case 'Guest Editors':
            $channel = $GLOBALS['channel']['micro_site_nid'] == 'all'?$GLOBALS['channel']['channel_nid']:'all';
            $channel = $GLOBALS['channel']['resource_center_nid'] == 'all'?$channel:'all';
            $viewOBJ = \Drupal\views\Views::getView($view->field_view_machine_name[0]->value);
            $viewOBJ->setDisplay($view->field_view_display_name[0]->value);
            $viewOBJ->setArguments(array(
              $channel,
              $GLOBALS['channel']['resource_center_nid'],
              $GLOBALS['channel']['micro_site_nid']
            ));
            $render = $viewOBJ->render();
            $display = drupal_render($render);
          break;
          default:
          $viewOBJ = \Drupal\views\Views::getView($view->field_view_machine_name[0]->value);
          $viewOBJ->setDisplay($view->field_view_display_name[0]->value);
          $viewOBJ->setArguments(array(
            $GLOBALS['channel']['channel_nid'],
            $item->field_section[0]->target_id?$item->field_section[0]->target_id:'all',
            $GLOBALS['channel']['resource_center_nid'],
            $GLOBALS['channel']['micro_site_nid']
          ));
          $render = $viewOBJ->render();
          $display = drupal_render($render);
        }
      
        $output .= '<div class="' . $view->field_classes[0]->value . '">';
        $output .=  $display;
        $output .= '</div>';
      } 
    }
    return $output;
  }


  /**
   ** Enews Form
   **/
  private function enewsForm() {
    return '<h4>Stay in the know.</h4><h2>' . $GLOBALS['channel']['channel_name'] . ' Newsletter</h2><script type="text/javascript" src="https://hmp.formstack.com/forms/js.php/c360_enews_2018?field66291701=' . $GLOBALS['channel']['channel_nid'] . ' &no_style_strict=1"></script><noscript><a href="https://hmp.formstack.com/forms/c360_enews_2018?field66291701=' . $GLOBALS['channel']['channel_nid'] . '" title="Online Form">Online Form - C360 ENEWS Signup - 2018</a></noscript>';
  }
}?>