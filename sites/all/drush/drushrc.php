<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'block_class' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/block_class/block_class.module',
        'basename' => 'block_class.module',
        'name' => 'Block Class',
        'info' => 
        array (
          'name' => 'Block Class',
          'type' => 'module',
          'description' => 'Allows assigning classes to Blocks',
          'package' => 'Other',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'block_class',
          'datestamp' => 1531440825,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'advagg_cdn' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/advagg/advagg_cdn/advagg_cdn.module',
        'basename' => 'advagg_cdn.module',
        'name' => 'AdvAgg CDN',
        'info' => 
        array (
          'name' => 'AdvAgg CDN',
          'description' => 'Use a shared CDN for JavaScript and/or CSS libraries, Google Libraries API currently.',
          'package' => 'Advanced CSS/JS Aggregation',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'type' => 'module',
          'configure' => 'advagg_cdn.settings',
          'version' => '8.x-3.5',
          'core' => '8.x',
          'project' => 'advagg',
          'datestamp' => 1518684422,
        ),
        'schema_version' => '8300',
        'version' => '8.x-3.5',
      ),
      'advagg_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/advagg/tests/modules/advagg_test/advagg_test.module',
        'basename' => 'advagg_test.module',
        'name' => 'Advanced CSS/JS Aggregation Testing',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation Testing',
          'description' => 'Provides assets for automated testing.',
          'package' => 'Testing',
          'type' => 'module',
          'version' => '8.x-3.5',
          'core' => '8.x',
          'project' => 'advagg',
          'datestamp' => 1518684422,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.5',
      ),
      'advagg_mod' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/advagg/advagg_mod/advagg_mod.module',
        'basename' => 'advagg_mod.module',
        'name' => 'AdvAgg Modifier',
        'info' => 
        array (
          'name' => 'AdvAgg Modifier',
          'description' => 'Allows one to alter the CSS and JS array.',
          'package' => 'Advanced CSS/JS Aggregation',
          'dependencies' => 
          array (
            0 => 'advagg',
          ),
          'type' => 'module',
          'configure' => 'advagg_mod.settings',
          'version' => '8.x-3.5',
          'core' => '8.x',
          'project' => 'advagg',
          'datestamp' => 1518684422,
        ),
        'schema_version' => '8201',
        'version' => '8.x-3.5',
      ),
      'advagg_bundler_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/advagg/advagg_bundler/tests/modules/advagg_bundler_test/advagg_bundler_test.module',
        'basename' => 'advagg_bundler_test.module',
        'name' => 'Advanced CSS/JS Aggregation Bundler Testing',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation Bundler Testing',
          'description' => 'Provides assets for automated testing.',
          'package' => 'Testing',
          'type' => 'module',
          'version' => '8.x-3.5',
          'core' => '8.x',
          'project' => 'advagg',
          'datestamp' => 1518684422,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.5',
      ),
      'advagg' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/advagg/advagg.module',
        'basename' => 'advagg.module',
        'name' => 'Advanced CSS/JS Aggregation',
        'info' => 
        array (
          'name' => 'Advanced CSS/JS Aggregation',
          'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
          'package' => 'Advanced CSS/JS Aggregation',
          'type' => 'module',
          'configure' => 'advagg.settings',
          'version' => '8.x-3.5',
          'core' => '8.x',
          'project' => 'advagg',
          'datestamp' => 1518684422,
        ),
        'schema_version' => '8302',
        'version' => '8.x-3.5',
      ),
      'robotstxt' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/robotstxt/robotstxt.module',
        'basename' => 'robotstxt.module',
        'name' => 'robots.txt',
        'info' => 
        array (
          'name' => 'robots.txt',
          'type' => 'module',
          'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
          'package' => 'Other',
          'configure' => 'robotstxt.admin_settings_form',
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'robotstxt',
          'datestamp' => 1491149337,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.1',
      ),
      'redis' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/redis_eight/redis.module',
        'basename' => 'redis.module',
        'name' => 'Redis',
        'info' => 
        array (
          'name' => 'Redis',
          'description' => 'Provide a module placeholder, for using as dependency for module that needs Redis.',
          'package' => 'Performance',
          'type' => 'module',
          'core' => '8.x',
          'configure' => 'redis.admin_display',
        ),
        'schema_version' => 8000,
        'version' => NULL,
      ),
      'cdn' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/o_contrib_eight/cdn/cdn.module',
        'basename' => 'cdn.module',
        'name' => 'CDN',
        'info' => 
        array (
          'name' => 'CDN',
          'description' => 'Serves files (CSS, JS, images …) from a CDN.',
          'type' => 'module',
          'package' => 'Web services',
          'dependencies' => 
          array (
            0 => 'drupal:system (>= 8.1.4)',
          ),
          'version' => '8.x-3.2',
          'core' => '8.x',
          'project' => 'cdn',
          'datestamp' => 1512212591,
        ),
        'schema_version' => '8001',
        'version' => '8.x-3.2',
      ),
      'menu_ui' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/menu_ui/menu_ui.module',
        'basename' => 'menu_ui.module',
        'name' => 'Menu UI',
        'info' => 
        array (
          'name' => 'Menu UI',
          'type' => 'module',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'configure' => 'entity.menu.collection',
          'dependencies' => 
          array (
            0 => 'menu_link_content',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/search/tests/modules/search_embedded_form/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'Search Embedded Form',
        'info' => 
        array (
          'name' => 'Search Embedded Form',
          'type' => 'module',
          'description' => 'Support module for Search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'search_langcode_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/search/tests/modules/search_langcode_test/search_langcode_test.module',
        'basename' => 'search_langcode_test.module',
        'name' => 'Test search entity langcode',
        'info' => 
        array (
          'name' => 'Test search entity langcode',
          'type' => 'module',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'search_date_query_alter' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/search/tests/modules/search_date_query_alter/search_date_query_alter.module',
        'basename' => 'search_date_query_alter.module',
        'name' => 'Search Date Query Alter',
        'info' => 
        array (
          'name' => 'Search Date Query Alter',
          'type' => 'module',
          'description' => 'Test module that adds date conditions to node searches.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'search_query_alter' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/search/tests/modules/search_query_alter/search_query_alter.module',
        'basename' => 'search_query_alter.module',
        'name' => 'Test Search Query Alter',
        'info' => 
        array (
          'name' => 'Test Search Query Alter',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'Search',
        'info' => 
        array (
          'name' => 'Search',
          'type' => 'module',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'configure' => 'entity.search_page.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'Forum',
        'info' => 
        array (
          'name' => 'Forum',
          'type' => 'module',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'taxonomy',
            3 => 'comment',
            4 => 'options',
          ),
          'package' => 'Core',
          'configure' => 'forum.overview',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'automated_cron' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/automated_cron/automated_cron.module',
        'basename' => 'automated_cron.module',
        'name' => 'Automated Cron',
        'info' => 
        array (
          'name' => 'Automated Cron',
          'type' => 'module',
          'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
          'package' => 'Core',
          'configure' => 'system.cron_settings',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'Aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'type' => 'module',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds) from external sources.',
          'package' => 'Core',
          'configure' => 'aggregator.admin_settings',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'options',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8501',
        'version' => '8.5.5',
      ),
      'rdf_test_namespaces' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rdf/tests/rdf_test_namespaces/rdf_test_namespaces.module',
        'basename' => 'rdf_test_namespaces.module',
        'name' => 'RDF module namespaces test',
        'info' => 
        array (
          'name' => 'RDF module namespaces test',
          'type' => 'module',
          'description' => 'Test namespace declaration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'rdf',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'rdf_conflicting_namespaces' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rdf/tests/rdf_conflicting_namespaces/rdf_conflicting_namespaces.module',
        'basename' => 'rdf_conflicting_namespaces.module',
        'name' => 'RDF module conflicting namespaces test',
        'info' => 
        array (
          'name' => 'RDF module conflicting namespaces test',
          'type' => 'module',
          'description' => 'Test conflicting namespace declaration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'rdf',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'rdf' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'RDF',
        'info' => 
        array (
          'name' => 'RDF',
          'type' => 'module',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'language_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/language/tests/language_test/language_test.module',
        'basename' => 'language_test.module',
        'name' => 'Language test',
        'info' => 
        array (
          'name' => 'Language test',
          'type' => 'module',
          'description' => 'Support module for the language layer tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'language' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/language/language.module',
        'basename' => 'language.module',
        'name' => 'Language',
        'info' => 
        array (
          'name' => 'Language',
          'type' => 'module',
          'description' => 'Allows users to configure languages and apply them to content.',
          'package' => 'Multilingual',
          'configure' => 'entity.configurable_language.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8001',
        'version' => '8.5.5',
      ),
      'hal_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/hal/tests/modules/hal_test/hal_test.module',
        'basename' => 'hal_test.module',
        'name' => 'HAL test module',
        'info' => 
        array (
          'name' => 'HAL test module',
          'type' => 'module',
          'description' => 'Support module for HAL tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'hal' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/hal/hal.module',
        'basename' => 'hal.module',
        'name' => 'HAL',
        'info' => 
        array (
          'name' => 'HAL',
          'type' => 'module',
          'description' => 'Serializes entities using Hypertext Application Language.',
          'package' => 'Web services',
          'dependencies' => 
          array (
            0 => 'serialization',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8501',
        'version' => '8.5.5',
      ),
      'book_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/book/tests/modules/book_test/book_test.module',
        'basename' => 'book_test.module',
        'name' => 'Book module tests',
        'info' => 
        array (
          'name' => 'Book module tests',
          'type' => 'module',
          'description' => 'Support module for book module testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'book_breadcrumb_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/book/tests/modules/book_breadcrumb_test/book_breadcrumb_test.module',
        'basename' => 'book_breadcrumb_test.module',
        'name' => 'Book module breadcrumb tests',
        'info' => 
        array (
          'name' => 'Book module breadcrumb tests',
          'type' => 'module',
          'description' => 'Support module for book module breadcrumb testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'Book',
        'info' => 
        array (
          'name' => 'Book',
          'type' => 'module',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'node',
          ),
          'configure' => 'book.settings',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'Shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'type' => 'module',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'configure' => 'entity.shortcut_set.collection',
          'dependencies' => 
          array (
            0 => 'link',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'rest_test_views' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rest/tests/modules/rest_test_views/rest_test_views.module',
        'basename' => 'rest_test_views.module',
        'name' => 'REST test views',
        'info' => 
        array (
          'name' => 'REST test views',
          'type' => 'module',
          'description' => 'Provides default views for views REST tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'rest',
            1 => 'views',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'config_test_rest' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rest/tests/modules/config_test_rest/config_test_rest.module',
        'basename' => 'config_test_rest.module',
        'name' => 'Configuration test REST',
        'info' => 
        array (
          'name' => 'Configuration test REST',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'config_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'rest_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rest/tests/modules/rest_test/rest_test.module',
        'basename' => 'rest_test.module',
        'name' => 'REST test',
        'info' => 
        array (
          'name' => 'REST test',
          'type' => 'module',
          'description' => 'Provides test hooks and resources for REST module.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'rest' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rest/rest.module',
        'basename' => 'rest.module',
        'name' => 'RESTful Web Services',
        'info' => 
        array (
          'name' => 'RESTful Web Services',
          'type' => 'module',
          'description' => 'Exposes entities and other resources as RESTful web API',
          'package' => 'Web services',
          'dependencies' => 
          array (
            0 => 'serialization',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8401',
        'version' => '8.5.5',
      ),
      'content_moderation' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/content_moderation/content_moderation.module',
        'basename' => 'content_moderation.module',
        'name' => 'Content Moderation',
        'info' => 
        array (
          'name' => 'Content Moderation',
          'type' => 'module',
          'description' => 'Provides moderation states for content.',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
          'dependencies' => 
          array (
            0 => 'workflows',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8401',
        'version' => '8.5.5',
      ),
      'menu_link_content' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/menu_link_content/menu_link_content.module',
        'basename' => 'menu_link_content.module',
        'name' => 'Custom Menu Links',
        'info' => 
        array (
          'name' => 'Custom Menu Links',
          'type' => 'module',
          'description' => 'Allows administrators to create custom menu links.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'link',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'Text',
        'info' => 
        array (
          'name' => 'Text',
          'type' => 'module',
          'description' => 'Defines simple text field types.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'filter',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'Color',
        'info' => 
        array (
          'name' => 'Color',
          'type' => 'module',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'datetime' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/datetime/datetime.module',
        'basename' => 'datetime.module',
        'name' => 'Datetime',
        'info' => 
        array (
          'name' => 'Datetime',
          'type' => 'module',
          'description' => 'Defines datetime form elements and a datetime field type.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field_layout_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field_layout/tests/modules/field_layout_test/field_layout_test.module',
        'basename' => 'field_layout_test.module',
        'name' => 'Field Layout test',
        'info' => 
        array (
          'name' => 'Field Layout test',
          'type' => 'module',
          'description' => 'Support module for Field Layout tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field_layout' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field_layout/field_layout.module',
        'basename' => 'field_layout.module',
        'name' => 'Field Layout',
        'info' => 
        array (
          'name' => 'Field Layout',
          'type' => 'module',
          'description' => 'Adds layout capabilities to the Field UI.',
          'package' => 'Core (Experimental)',
          'dependencies' => 
          array (
            0 => 'layout_discovery',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'Interface Translation',
        'info' => 
        array (
          'name' => 'Interface Translation',
          'type' => 'module',
          'description' => 'Translates the built-in user interface.',
          'configure' => 'locale.translate_page',
          'package' => 'Multilingual',
          'dependencies' => 
          array (
            0 => 'language',
            1 => 'file',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8500',
        'version' => '8.5.5',
      ),
      'datetime_range' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/datetime_range/datetime_range.module',
        'basename' => 'datetime_range.module',
        'name' => 'Datetime Range',
        'info' => 
        array (
          'name' => 'Datetime Range',
          'type' => 'module',
          'description' => 'Provides the ability to store end dates.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'datetime',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'block_content_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/block_content/tests/modules/block_content_test/block_content_test.module',
        'basename' => 'block_content_test.module',
        'name' => 'Custom Block module tests',
        'info' => 
        array (
          'name' => 'Custom Block module tests',
          'type' => 'module',
          'description' => 'Support module for custom block related testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'block_content',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'block_content' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/block_content/block_content.module',
        'basename' => 'block_content.module',
        'name' => 'Custom Block',
        'info' => 
        array (
          'name' => 'Custom Block',
          'type' => 'module',
          'description' => 'Allows the creation of custom blocks through the user interface.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'text',
            2 => 'user',
          ),
          'configure' => 'entity.block_content.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8400',
        'version' => '8.5.5',
      ),
      'responsive_image' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/responsive_image/responsive_image.module',
        'basename' => 'responsive_image.module',
        'name' => 'Responsive Image',
        'info' => 
        array (
          'name' => 'Responsive Image',
          'type' => 'module',
          'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'breakpoint',
            1 => 'image',
          ),
          'configure' => 'entity.responsive_image_style.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'filter_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/filter/tests/filter_test/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'Filter test module',
        'info' => 
        array (
          'name' => 'Filter test module',
          'type' => 'module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'Filter',
        'info' => 
        array (
          'name' => 'Filter',
          'type' => 'module',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'user',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'settings_tray_test_css' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/settings_tray/tests/modules/settings_tray_test_css/settings_tray_test_css.module',
        'basename' => 'settings_tray_test_css.module',
        'name' => 'CSS Test fix',
        'info' => 
        array (
          'name' => 'CSS Test fix',
          'type' => 'module',
          'description' => 'Provides CSS fixes for tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'settings_tray',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'settings_tray' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/settings_tray/settings_tray.module',
        'basename' => 'settings_tray.module',
        'name' => 'Settings Tray',
        'info' => 
        array (
          'name' => 'Settings Tray',
          'type' => 'module',
          'description' => 'Provides a sidebar to configure blocks on the page.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'toolbar',
            2 => 'contextual',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'inline_form_errors' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/inline_form_errors/inline_form_errors.module',
        'basename' => 'inline_form_errors.module',
        'name' => 'Inline Form Errors',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Inline Form Errors',
          'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'Database Logging',
        'info' => 
        array (
          'name' => 'Database Logging',
          'type' => 'module',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'configure' => 'system.logging_settings',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8400',
        'version' => '8.5.5',
      ),
      'layout_discovery' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/layout_discovery/layout_discovery.module',
        'basename' => 'layout_discovery.module',
        'name' => 'Layout Discovery',
        'info' => 
        array (
          'name' => 'Layout Discovery',
          'type' => 'module',
          'description' => 'Provides a way for modules or themes to register layouts.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'Statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'type' => 'module',
          'description' => 'Logs content statistics for your site.',
          'package' => 'Core',
          'configure' => 'statistics.settings',
          'dependencies' => 
          array (
            0 => 'node',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8300',
        'version' => '8.5.5',
      ),
      'link' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/link/link.module',
        'basename' => 'link.module',
        'name' => 'Link',
        'info' => 
        array (
          'name' => 'Link',
          'type' => 'module',
          'description' => 'Provides a simple link field type.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'ckeditor_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/ckeditor/tests/modules/ckeditor_test.module',
        'basename' => 'ckeditor_test.module',
        'name' => 'CKEditor test',
        'info' => 
        array (
          'name' => 'CKEditor test',
          'type' => 'module',
          'description' => 'Support module for the CKEditor module tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'ckeditor' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'CKEditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'type' => 'module',
          'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'editor',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'tour_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/tour/tests/tour_test/tour_test.module',
        'basename' => 'tour_test.module',
        'name' => 'Tour module tests',
        'info' => 
        array (
          'name' => 'Tour module tests',
          'type' => 'module',
          'description' => 'Tests module for tour module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'tour',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'tour' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/tour/tour.module',
        'basename' => 'tour.module',
        'name' => 'Tour',
        'info' => 
        array (
          'name' => 'Tour',
          'type' => 'module',
          'description' => 'Provides guided tours.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'migrate_prepare_row_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate/tests/modules/migrate_prepare_row_test/migrate_prepare_row_test.module',
        'basename' => 'migrate_prepare_row_test.module',
        'name' => 'Migrate module prepareRow tests',
        'info' => 
        array (
          'name' => 'Migrate module prepareRow tests',
          'type' => 'module',
          'description' => 'Support module for source plugin prepareRow testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'migrate' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate/migrate.module',
        'basename' => 'migrate.module',
        'name' => 'Migrate',
        'info' => 
        array (
          'name' => 'Migrate',
          'type' => 'module',
          'description' => 'Handles migrations',
          'package' => 'Migration',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8001',
        'version' => '8.5.5',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'Activity Tracker',
        'info' => 
        array (
          'name' => 'Activity Tracker',
          'type' => 'module',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'contextual_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/contextual/tests/modules/contextual_test/contextual_test.module',
        'basename' => 'contextual_test.module',
        'name' => 'Contextual Test',
        'info' => 
        array (
          'name' => 'Contextual Test',
          'type' => 'module',
          'description' => 'Provides test contextual links.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'contextual',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'contextual' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'Contextual Links',
        'info' => 
        array (
          'name' => 'Contextual Links',
          'type' => 'module',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'update_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/update/tests/modules/update_test/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'Update Manager',
        'info' => 
        array (
          'name' => 'Update Manager',
          'type' => 'module',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'package' => 'Core',
          'configure' => 'update.settings',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8001',
        'version' => '8.5.5',
      ),
      'file_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/file/tests/file_test/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'file' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'File',
        'info' => 
        array (
          'name' => 'File',
          'type' => 'module',
          'description' => 'Defines a file field type.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8300',
        'version' => '8.5.5',
      ),
      'views_ui_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views_ui/tests/modules/views_ui_test/views_ui_test.module',
        'basename' => 'views_ui_test.module',
        'name' => 'Views UI Test',
        'info' => 
        array (
          'name' => 'Views UI Test',
          'type' => 'module',
          'description' => 'Test module for Views UI.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'views_ui',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'views_ui_test_field' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views_ui/tests/modules/views_ui_test_field/views_ui_test_field.module',
        'basename' => 'views_ui_test_field.module',
        'name' => 'Views test field',
        'info' => 
        array (
          'name' => 'Views test field',
          'type' => 'module',
          'description' => 'Add custom global field for testing purposes.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'views_ui',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views_ui/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'Views UI',
        'info' => 
        array (
          'name' => 'Views UI',
          'type' => 'module',
          'description' => 'Administrative interface for Views.',
          'package' => 'Core',
          'configure' => 'entity.view.collection',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'config_translation_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config_translation/tests/modules/config_translation_test/config_translation_test.module',
        'basename' => 'config_translation_test.module',
        'name' => 'Configuration Translation Test',
        'info' => 
        array (
          'name' => 'Configuration Translation Test',
          'description' => 'Helpers to test the configuration translation system',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'config_translation',
            1 => 'config_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'config_translation' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config_translation/config_translation.module',
        'basename' => 'config_translation.module',
        'name' => 'Configuration Translation',
        'info' => 
        array (
          'name' => 'Configuration Translation',
          'type' => 'module',
          'description' => 'Provides a translation interface for configuration.',
          'package' => 'Multilingual',
          'configure' => 'config_translation.mapper_list',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'Testing',
        'info' => 
        array (
          'name' => 'Testing',
          'type' => 'module',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'configure' => 'simpletest.settings',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'twig_theme_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/twig_theme_test/twig_theme_test.module',
        'basename' => 'twig_theme_test.module',
        'name' => 'Twig theme test',
        'info' => 
        array (
          'name' => 'Twig theme test',
          'type' => 'module',
          'description' => 'Support module for Twig theme system testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'database_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/database_test/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'Database Test',
        'info' => 
        array (
          'name' => 'Database Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'path_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/path_test/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'Hook path tests',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'type' => 'module',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'form_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/form_test/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'FormAPI Test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'type' => 'module',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'session_exists_cache_context_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/session_exists_cache_context_test/session_exists_cache_context_test.module',
        'basename' => 'session_exists_cache_context_test.module',
        'name' => 'session.exists cache context test',
        'info' => 
        array (
          'name' => 'session.exists cache context test',
          'type' => 'module',
          'description' => 'Support module for session.exists cache context testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'lazy_route_provider_install_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/lazy_route_provider_install_test/lazy_route_provider_install_test.module',
        'basename' => 'lazy_route_provider_install_test.module',
        'name' => 'Lazy route provider install test',
        'info' => 
        array (
          'name' => 'Lazy route provider install test',
          'description' => 'Helps test a bug triggered by the url_generator maintaining a stale route provider.',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'system_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/system_test/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'configure' => 'system_test.configure',
          'configure_parameters' => 
          array (
            'foo' => 'bar',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'menu_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/menu_test/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'Hook menu tests',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'type' => 'module',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'test_page_test',
            1 => 'menu_ui',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_schema_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_schema_test/entity_schema_test.module',
        'basename' => 'entity_schema_test.module',
        'name' => 'Entity schema test module',
        'info' => 
        array (
          'name' => 'Entity schema test module',
          'type' => 'module',
          'description' => 'Provides entity and field definitions to test entity schema.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_test_update' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_test_update/entity_test_update.module',
        'basename' => 'entity_test_update.module',
        'name' => 'Entity Update Test',
        'info' => 
        array (
          'name' => 'Entity Update Test',
          'type' => 'module',
          'description' => 'Provides an entity type for testing definition and schema updates.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/ajax_forms_test/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'AJAX form test mock module',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'type' => 'module',
          'description' => 'Test for AJAX form calls.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'theme_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/theme_test/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'Theme test',
        'info' => 
        array (
          'name' => 'Theme test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'experimental_module_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/experimental_module_test/experimental_module_test.module',
        'basename' => 'experimental_module_test.module',
        'name' => 'Experimental Test',
        'info' => 
        array (
          'name' => 'Experimental Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test experimental functionality.',
          'package' => 'Core (Experimental)',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'twig_extension_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/twig_extension_test/twig_extension_test.module',
        'basename' => 'twig_extension_test.module',
        'name' => 'Twig Extension Test',
        'info' => 
        array (
          'name' => 'Twig Extension Test',
          'type' => 'module',
          'description' => 'Support module for testing Twig extensions.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'theme_suggestions_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/theme_suggestions_test/theme_suggestions_test.module',
        'basename' => 'theme_suggestions_test.module',
        'name' => 'Theme suggestions test',
        'info' => 
        array (
          'name' => 'Theme suggestions test',
          'type' => 'module',
          'description' => 'Support module for testing theme suggestions.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'session_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/session_test/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'Session test',
        'info' => 
        array (
          'name' => 'Session test',
          'type' => 'module',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'system_module_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/system_module_test/system_module_test.module',
        'basename' => 'system_module_test.module',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing System module functionality.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'theme_page_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/theme_page_test/theme_page_test.module',
        'basename' => 'theme_page_test.module',
        'name' => 'Theme page test',
        'info' => 
        array (
          'name' => 'Theme page test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_reference_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_reference_test/entity_reference_test.module',
        'basename' => 'entity_reference_test.module',
        'name' => 'Entity Reference Test',
        'info' => 
        array (
          'name' => 'Entity Reference Test',
          'type' => 'module',
          'description' => 'Support module for the Entity Reference tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'user',
            2 => 'views',
            3 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_test_operation' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_test_operation/entity_test_operation.module',
        'basename' => 'entity_test_operation.module',
        'name' => 'Entity Operation Test',
        'info' => 
        array (
          'name' => 'Entity Operation Test',
          'type' => 'module',
          'description' => 'Provides a test operation to entities.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'module_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/module_test/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'Module test',
        'info' => 
        array (
          'name' => 'Module test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_test_constraints' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_test_constraints/entity_test_constraints.module',
        'basename' => 'entity_test_constraints.module',
        'name' => 'Entity constraints test module',
        'info' => 
        array (
          'name' => 'Entity constraints test module',
          'type' => 'module',
          'description' => 'Tests extending and altering entity constraints.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'experimental_module_dependency_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/experimental_module_dependency_test/experimental_module_dependency_test.module',
        'basename' => 'experimental_module_dependency_test.module',
        'name' => 'Experimental Dependency Test',
        'info' => 
        array (
          'name' => 'Experimental Dependency Test',
          'type' => 'module',
          'description' => 'Module with a dependency in the experimental package.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'experimental_module_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_crud_hook_test/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'Entity CRUD Hooks Test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'type' => 'module',
          'description' => 'Support module for CRUD hook tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'batch_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/batch_test/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'Batch API test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'type' => 'module',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'update_script_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/update_script_test/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'Update script test',
        'info' => 
        array (
          'name' => 'Update script test',
          'type' => 'module',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8001',
        'version' => '8.5.5',
      ),
      'module_required_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/module_required_test/module_required_test.module',
        'basename' => 'module_required_test.module',
        'name' => 'Module required test',
        'info' => 
        array (
          'name' => 'Module required test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'drupal:node (>=8.x)',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_test_extra' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_test_extra/entity_test_extra.module',
        'basename' => 'entity_test_extra.module',
        'name' => 'Entity test extra',
        'info' => 
        array (
          'name' => 'Entity test extra',
          'type' => 'module',
          'description' => 'Provides extra fields for entity test entity types.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'experimental_module_requirements_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/experimental_module_requirements_test/experimental_module_requirements_test.module',
        'basename' => 'experimental_module_requirements_test.module',
        'name' => 'Experimental Requirements Test',
        'info' => 
        array (
          'name' => 'Experimental Requirements Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test hook_requirements() with an experimental module.',
          'package' => 'Core (Experimental)',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'plugin_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/plugin_test/plugin_test.module',
        'basename' => 'plugin_test.module',
        'name' => 'Plugin Test Support',
        'info' => 
        array (
          'name' => 'Plugin Test Support',
          'type' => 'module',
          'description' => 'Test that plugins can provide plugins and provide namespace discovery for plugin test implementations.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'layout_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/layout_test/layout_test.module',
        'basename' => 'layout_test.module',
        'name' => 'Layout test',
        'info' => 
        array (
          'name' => 'Layout test',
          'type' => 'module',
          'description' => 'Support module for testing layouts.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'deprecation_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/deprecation_test/deprecation_test.module',
        'basename' => 'deprecation_test.module',
        'name' => 'Deprecation test',
        'info' => 
        array (
          'name' => 'Deprecation test',
          'type' => 'module',
          'description' => 'Support module for testing deprecation behaviors.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'theme_region_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/theme_region_test/theme_region_test.module',
        'basename' => 'theme_region_test.module',
        'name' => 'Theme region test',
        'info' => 
        array (
          'name' => 'Theme region test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing regions.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/common_test_cron_helper/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'Common Test Cron Helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'type' => 'module',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'common_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/common_test/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'Common Test',
        'info' => 
        array (
          'name' => 'Common Test',
          'type' => 'module',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'entity_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/entity_test/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'Entity CRUD test module',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'type' => 'module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'link_generation_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/tests/modules/link_generation_test/link_generation_test.module',
        'basename' => 'link_generation_test.module',
        'name' => 'Link generation test support',
        'info' => 
        array (
          'name' => 'Link generation test support',
          'type' => 'module',
          'description' => 'Test hooks fired in link generation.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'System',
        'info' => 
        array (
          'name' => 'System',
          'type' => 'module',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'required' => true,
          'configure' => 'system.admin_config_system',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8501',
        'version' => '8.5.5',
      ),
      'quickedit_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/quickedit/tests/modules/quickedit_test.module',
        'basename' => 'quickedit_test.module',
        'name' => 'Quick Edit test',
        'info' => 
        array (
          'name' => 'Quick Edit test',
          'type' => 'module',
          'description' => 'Support module for the Quick Edit module tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'quickedit' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/quickedit/quickedit.module',
        'basename' => 'quickedit.module',
        'name' => 'Quick Edit',
        'info' => 
        array (
          'name' => 'Quick Edit',
          'type' => 'module',
          'description' => 'In-place content editing.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'contextual',
            1 => 'field',
            2 => 'filter',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'big_pipe_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/big_pipe/tests/modules/big_pipe_test/big_pipe_test.module',
        'basename' => 'big_pipe_test.module',
        'name' => 'BigPipe test',
        'info' => 
        array (
          'name' => 'BigPipe test',
          'type' => 'module',
          'description' => 'Support module for BigPipe testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'big_pipe' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/big_pipe/big_pipe.module',
        'basename' => 'big_pipe.module',
        'name' => 'BigPipe',
        'info' => 
        array (
          'name' => 'BigPipe',
          'type' => 'module',
          'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field/tests/modules/field_test/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'Field API Test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field_test_boolean_access_denied' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field/tests/modules/field_test_boolean_access_denied/field_test_boolean_access_denied.module',
        'basename' => 'field_test_boolean_access_denied.module',
        'name' => 'Boolean field Test',
        'info' => 
        array (
          'name' => 'Boolean field Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field_third_party_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field/tests/modules/field_third_party_test/field_third_party_test.module',
        'basename' => 'field_third_party_test.module',
        'name' => 'Field Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Field Third Party Settings Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'field_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'Field',
        'info' => 
        array (
          'name' => 'Field',
          'type' => 'module',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8500',
        'version' => '8.5.5',
      ),
      'history' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/history/history.module',
        'basename' => 'history.module',
        'name' => 'History',
        'info' => 
        array (
          'name' => 'History',
          'type' => 'module',
          'description' => 'Records which user has read which content.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'node',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8101',
        'version' => '8.5.5',
      ),
      'node_access_test_language' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/node/tests/modules/node_access_test_language/node_access_test_language.module',
        'basename' => 'node_access_test_language.module',
        'name' => 'Node module access tests language',
        'info' => 
        array (
          'name' => 'Node module access tests language',
          'type' => 'module',
          'description' => 'Support module for language-aware node access testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'node_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/node/tests/modules/node_test/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'Node module tests',
        'info' => 
        array (
          'name' => 'Node module tests',
          'type' => 'module',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/node/tests/modules/node_test_exception/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'Node module exception tests',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'type' => 'module',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'node_access_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/node/tests/modules/node_access_test/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'Node module access tests',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'node_access_test_empty' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/node/tests/modules/node_access_test_empty/node_access_test_empty.module',
        'basename' => 'node_access_test_empty.module',
        'name' => 'Node module empty access tests',
        'info' => 
        array (
          'name' => 'Node module empty access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides empty grants hook implementations.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'Node',
        'info' => 
        array (
          'name' => 'Node',
          'type' => 'module',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'configure' => 'entity.node_type.collection',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8401',
        'version' => '8.5.5',
      ),
      'page_cache_form_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/page_cache/tests/modules/page_cache_form_test.module',
        'basename' => 'page_cache_form_test.module',
        'name' => 'Page Cache Form Test',
        'info' => 
        array (
          'name' => 'Page Cache Form Test',
          'type' => 'module',
          'description' => 'Support module for the Page Cache module tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'page_cache' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/page_cache/page_cache.module',
        'basename' => 'page_cache.module',
        'name' => 'Internal Page Cache',
        'info' => 
        array (
          'name' => 'Internal Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for anonymous users. Use when an external page cache is not available.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/taxonomy/tests/modules/taxonomy_test/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'Taxonomy test',
        'info' => 
        array (
          'name' => 'Taxonomy test',
          'type' => 'module',
          'description' => 'Provides test hook implementations for taxonomy tests',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'taxonomy_crud' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/taxonomy/tests/modules/taxonomy_crud/taxonomy_crud.module',
        'basename' => 'taxonomy_crud.module',
        'name' => 'Taxonomy CRUD tests',
        'info' => 
        array (
          'name' => 'Taxonomy CRUD tests',
          'type' => 'module',
          'description' => 'Provides 3rd party settings for vocabulary.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'Taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'type' => 'module',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'text',
          ),
          'configure' => 'entity.taxonomy_vocabulary.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'options_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/options/tests/options_test/options_test.module',
        'basename' => 'options_test.module',
        'name' => 'Options test',
        'info' => 
        array (
          'name' => 'Options test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'options' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'Options',
        'info' => 
        array (
          'name' => 'Options',
          'type' => 'module',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'migrate_drupal_ui' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate_drupal_ui/migrate_drupal_ui.module',
        'basename' => 'migrate_drupal_ui.module',
        'name' => 'Migrate Drupal UI',
        'info' => 
        array (
          'name' => 'Migrate Drupal UI',
          'type' => 'module',
          'description' => 'Provides a user interface for migrating from older Drupal versions.',
          'package' => 'Core (Experimental)',
          'configure' => 'migrate_drupal_ui.upgrade',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'migrate_drupal',
            2 => 'dblog',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'dynamic_page_cache' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/dynamic_page_cache/dynamic_page_cache.module',
        'basename' => 'dynamic_page_cache.module',
        'name' => 'Internal Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Internal Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for any user, handling dynamic content correctly.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'user_access_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/user/tests/modules/user_access_test/user_access_test.module',
        'basename' => 'user_access_test.module',
        'name' => 'User access tests',
        'info' => 
        array (
          'name' => 'User access tests',
          'type' => 'module',
          'description' => 'Support module for user access testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'user_form_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/user/tests/modules/user_form_test/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'User module form tests',
        'info' => 
        array (
          'name' => 'User module form tests',
          'type' => 'module',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'user_hooks_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/user/tests/modules/user_hooks_test/user_hooks_test.module',
        'basename' => 'user_hooks_test.module',
        'name' => 'User module hooks tests',
        'info' => 
        array (
          'name' => 'User module hooks tests',
          'type' => 'module',
          'description' => 'Support module for user hooks testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'User',
        'info' => 
        array (
          'name' => 'User',
          'type' => 'module',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'required' => true,
          'configure' => 'user.admin_index',
          'dependencies' => 
          array (
            0 => 'system',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8100',
        'version' => '8.5.5',
      ),
      'migrate_cckfield_plugin_manager_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate_drupal/tests/modules/migrate_cckfield_plugin_manager_test/migrate_cckfield_plugin_manager_test.module',
        'basename' => 'migrate_cckfield_plugin_manager_test.module',
        'name' => 'Migrate cck field plugin manager test',
        'info' => 
        array (
          'name' => 'Migrate cck field plugin manager test',
          'type' => 'module',
          'description' => 'Example module demonstrating the cck field plugin manager in the Migrate API.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'migrate_drupal' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate_drupal/migrate_drupal.module',
        'basename' => 'migrate_drupal.module',
        'name' => 'Migrate Drupal',
        'info' => 
        array (
          'name' => 'Migrate Drupal',
          'type' => 'module',
          'description' => 'Contains migrations from older Drupal versions.',
          'package' => 'Core (Experimental)',
          'dependencies' => 
          array (
            0 => 'migrate',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8502',
        'version' => '8.5.5',
      ),
      'contact_storage_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/contact/tests/modules/contact_storage_test/contact_storage_test.module',
        'basename' => 'contact_storage_test.module',
        'name' => 'Contact test storage',
        'info' => 
        array (
          'name' => 'Contact test storage',
          'type' => 'module',
          'description' => 'Tests that contact messages can be stored.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'user',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'Contact',
        'info' => 
        array (
          'name' => 'Contact',
          'type' => 'module',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'configure' => 'entity.contact_form.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'ban' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/ban/ban.module',
        'basename' => 'ban.module',
        'name' => 'Ban',
        'info' => 
        array (
          'name' => 'Ban',
          'type' => 'module',
          'description' => 'Enables banning of IP addresses.',
          'package' => 'Core',
          'configure' => 'ban.admin_page',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'Syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'type' => 'module',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'configure' => 'system.logging_settings',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8400',
        'version' => '8.5.5',
      ),
      'config_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config/tests/config_test/config_test.module',
        'basename' => 'config_test.module',
        'name' => 'Configuration test',
        'info' => 
        array (
          'name' => 'Configuration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'config_import_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config/tests/config_import_test/config_import_test.module',
        'basename' => 'config_import_test.module',
        'name' => 'Configuration import test',
        'info' => 
        array (
          'name' => 'Configuration import test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'config_install_dependency_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config/tests/config_install_dependency_test/config_install_dependency_test.module',
        'basename' => 'config_install_dependency_test.module',
        'name' => 'Config install dependency test',
        'info' => 
        array (
          'name' => 'Config install dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'config_entity_static_cache_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config/tests/config_entity_static_cache_test/config_entity_static_cache_test.module',
        'basename' => 'config_entity_static_cache_test.module',
        'name' => 'Configuration entity static cache test',
        'info' => 
        array (
          'name' => 'Configuration entity static cache test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'config' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config/config.module',
        'basename' => 'config.module',
        'name' => 'Configuration Manager',
        'info' => 
        array (
          'name' => 'Configuration Manager',
          'type' => 'module',
          'description' => 'Allows administrators to manage configuration changes.',
          'package' => 'Core',
          'configure' => 'config.sync',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'block_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/block/tests/modules/block_test/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'Block test',
        'info' => 
        array (
          'name' => 'Block test',
          'type' => 'module',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'Block',
        'info' => 
        array (
          'name' => 'Block',
          'type' => 'module',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'configure' => 'block.admin_display',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8003',
        'version' => '8.5.5',
      ),
      'content_translation_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/content_translation/tests/modules/content_translation_test/content_translation_test.module',
        'basename' => 'content_translation_test.module',
        'name' => 'Content translation tests',
        'info' => 
        array (
          'name' => 'Content translation tests',
          'type' => 'module',
          'description' => 'Provides content translation tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'content_translation',
            1 => 'language',
            2 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'content_translation' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/content_translation/content_translation.module',
        'basename' => 'content_translation.module',
        'name' => 'Content Translation',
        'info' => 
        array (
          'name' => 'Content Translation',
          'type' => 'module',
          'description' => 'Allows users to translate content entities.',
          'dependencies' => 
          array (
            0 => 'language',
          ),
          'package' => 'Multilingual',
          'configure' => 'language.content_settings_page',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8400',
        'version' => '8.5.5',
      ),
      'comment_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/comment/tests/modules/comment_test/comment_test.module',
        'basename' => 'comment_test.module',
        'name' => 'Comment test',
        'info' => 
        array (
          'name' => 'Comment test',
          'type' => 'module',
          'description' => 'Support module for Comment module testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'comment_empty_title_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/comment/tests/modules/comment_empty_title_test/comment_empty_title_test.module',
        'basename' => 'comment_empty_title_test.module',
        'name' => 'Comment empty titles test',
        'info' => 
        array (
          'name' => 'Comment empty titles test',
          'type' => 'module',
          'description' => 'Support module for testing empty title accessibility with Comment module.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'Comment',
        'info' => 
        array (
          'name' => 'Comment',
          'type' => 'module',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'configure' => 'comment.admin',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8400',
        'version' => '8.5.5',
      ),
      'image_module_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/image/tests/modules/image_module_test/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'image' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'Image',
        'info' => 
        array (
          'name' => 'Image',
          'type' => 'module',
          'description' => 'Defines an image field type and provides image manipulation tools.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'configure' => 'entity.image_style.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8201',
        'version' => '8.5.5',
      ),
      'workflow_type_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/workflows/tests/modules/workflow_type_test/workflow_type_test.module',
        'basename' => 'workflow_type_test.module',
        'name' => 'Workflow Type Test',
        'info' => 
        array (
          'name' => 'Workflow Type Test',
          'type' => 'module',
          'description' => 'Provides a workflow type plugin for testing.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'workflows',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'workflows' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/workflows/workflows.module',
        'basename' => 'workflows.module',
        'name' => 'Workflows',
        'info' => 
        array (
          'name' => 'Workflows',
          'type' => 'module',
          'description' => 'Provides UI and API for managing workflows. This module can be used with the Content moderation module to add highly customizable workflows to content.',
          'package' => 'Core',
          'configure' => 'entity.workflow.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'help_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/help/tests/modules/help_test/help_test.module',
        'basename' => 'help_test.module',
        'name' => 'help_test',
        'info' => 
        array (
          'name' => 'help_test',
          'type' => 'module',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'help',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'Help',
        'info' => 
        array (
          'name' => 'Help',
          'type' => 'module',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'Path',
        'info' => 
        array (
          'name' => 'Path',
          'type' => 'module',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'configure' => 'path.admin_overview',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8200',
        'version' => '8.5.5',
      ),
      'views_test_data' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views/tests/modules/views_test_data/views_test_data.module',
        'basename' => 'views_test_data.module',
        'name' => 'Views Test',
        'info' => 
        array (
          'name' => 'Views Test',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'views_entity_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views/tests/modules/views_entity_test/views_entity_test.module',
        'basename' => 'views_entity_test.module',
        'name' => 'Views Entity Test',
        'info' => 
        array (
          'name' => 'Views Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for views tests of entity_test entity type.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity_test',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'Views',
        'info' => 
        array (
          'name' => 'Views',
          'type' => 'module',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8500',
        'version' => '8.5.5',
      ),
      'toolbar_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/toolbar/tests/modules/toolbar_test/toolbar_test.module',
        'basename' => 'toolbar_test.module',
        'name' => 'Toolbar module API tests',
        'info' => 
        array (
          'name' => 'Toolbar module API tests',
          'type' => 'module',
          'description' => 'Support module for toolbar testing.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'toolbar_disable_user_toolbar' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/toolbar/tests/modules/toolbar_disable_user_toolbar/toolbar_disable_user_toolbar.module',
        'basename' => 'toolbar_disable_user_toolbar.module',
        'name' => 'Disable user toolbar',
        'info' => 
        array (
          'name' => 'Disable user toolbar',
          'type' => 'module',
          'description' => 'Support module for testing toolbar without user toolbar',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'Toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'type' => 'module',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'breakpoint',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'telephone' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/telephone/telephone.module',
        'basename' => 'telephone.module',
        'name' => 'Telephone',
        'info' => 
        array (
          'name' => 'Telephone',
          'type' => 'module',
          'description' => 'Defines a field type for telephone numbers.',
          'package' => 'Field types',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field_ui_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field_ui/tests/modules/field_ui_test/field_ui_test.module',
        'basename' => 'field_ui_test.module',
        'name' => 'Field UI test',
        'info' => 
        array (
          'name' => 'Field UI test',
          'type' => 'module',
          'description' => 'Support module for Field UI tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'field_ui' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'Field UI',
        'info' => 
        array (
          'name' => 'Field UI',
          'type' => 'module',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'editor_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/editor/tests/modules/editor_test.module',
        'basename' => 'editor_test.module',
        'name' => 'Text Editor test',
        'info' => 
        array (
          'name' => 'Text Editor test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor module tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'editor' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/editor/editor.module',
        'basename' => 'editor.module',
        'name' => 'Text Editor',
        'info' => 
        array (
          'name' => 'Text Editor',
          'type' => 'module',
          'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'file',
          ),
          'configure' => 'filter.admin_overview',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8001',
        'version' => '8.5.5',
      ),
      'action' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/action/action.module',
        'basename' => 'action.module',
        'name' => 'Actions',
        'info' => 
        array (
          'name' => 'Actions',
          'type' => 'module',
          'description' => 'Perform tasks on specific events triggered within the system.',
          'package' => 'Core',
          'configure' => 'entity.action.collection',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'breakpoint' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/breakpoint/breakpoint.module',
        'basename' => 'breakpoint.module',
        'name' => 'Breakpoint',
        'info' => 
        array (
          'name' => 'Breakpoint',
          'type' => 'module',
          'description' => 'Manage breakpoints and breakpoint groups for responsive designs.',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'basic_auth' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/basic_auth/basic_auth.module',
        'basename' => 'basic_auth.module',
        'name' => 'HTTP Basic Authentication',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'type' => 'module',
          'description' => 'Provides the HTTP Basic authentication provider',
          'package' => 'Web services',
          'dependencies' => 
          array (
            0 => 'user',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'layout_builder' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/layout_builder/layout_builder.module',
        'basename' => 'layout_builder.module',
        'name' => 'Layout Builder',
        'info' => 
        array (
          'name' => 'Layout Builder',
          'type' => 'module',
          'description' => 'Provides layout building utility.',
          'package' => 'Core (Experimental)',
          'dependencies' => 
          array (
            0 => 'layout_discovery',
            1 => 'contextual',
            2 => 'field_ui',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'media' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/media/media.module',
        'basename' => 'media.module',
        'name' => 'Media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Create reusable media.',
          'type' => 'module',
          'package' => 'Core',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'image',
            2 => 'user',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8500',
        'version' => '8.5.5',
      ),
      'entity_serialization_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/serialization/tests/modules/entity_serialization_test/entity_serialization_test.module',
        'basename' => 'entity_serialization_test.module',
        'name' => 'Entity serialization test support',
        'info' => 
        array (
          'name' => 'Entity serialization test support',
          'type' => 'module',
          'description' => 'Provides test support for entity serialization tests.',
          'package' => 'Testing',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => 8000,
        'version' => '8.5.5',
      ),
      'serialization' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/serialization/serialization.module',
        'basename' => 'serialization.module',
        'name' => 'Serialization',
        'info' => 
        array (
          'name' => 'Serialization',
          'type' => 'module',
          'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML',
          'package' => 'Web services',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'schema_version' => '8401',
        'version' => '8.5.5',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'Pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
            1 => 'drupal:path',
            2 => 'token:token',
          ),
          'configure' => 'entity.pathauto_pattern.collection',
          'recommends' => 
          array (
            0 => 'redirect:redirect',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'pathauto',
          'datestamp' => 1524421087,
        ),
        'schema_version' => '8106',
        'version' => '8.x-1.2',
      ),
      'paragraphs_library' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_library/paragraphs_library.module',
        'basename' => 'paragraphs_library.module',
        'name' => 'Paragraphs Library',
        'info' => 
        array (
          'name' => 'Paragraphs Library',
          'type' => 'module',
          'description' => 'Provides a library for reusing paragraphs.',
          'package' => 'Paragraphs',
          'configure' => 'paragraphs_library_item.settings',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
            1 => 'drupal:views',
            2 => 'entity_usage:entity_usage (>= 8.x-2.0-alpha4)',
          ),
          'test_dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
          ),
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.3',
      ),
      'paragraphs_demo' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_demo/paragraphs_demo.module',
        'basename' => 'paragraphs_demo.module',
        'name' => 'Paragraphs Demo',
        'info' => 
        array (
          'description' => 'Provides multilingual demo Paragraphs types.',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
            1 => 'drupal:field',
            2 => 'drupal:image',
            3 => 'drupal:field_ui',
            4 => 'drupal:block',
            5 => 'drupal:language',
            6 => 'drupal:content_translation',
            7 => 'drupal:node',
            8 => 'search_api:search_api_db',
            9 => 'search_api:search_api',
            10 => 'drupal:views',
            11 => 'drupal:taxonomy',
            12 => 'paragraphs:paragraphs_library',
            13 => 'drupal:entity_browser',
          ),
          'hidden' => false,
          'name' => 'Paragraphs Demo',
          'package' => 'Paragraphs',
          'type' => 'module',
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'paragraphs_type_permissions' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_type_permissions/paragraphs_type_permissions.module',
        'basename' => 'paragraphs_type_permissions.module',
        'name' => 'Paragraphs Type Permissions',
        'info' => 
        array (
          'name' => 'Paragraphs Type Permissions',
          'type' => 'module',
          'description' => 'Allows users to configure permissions for individual Paragraphs types.',
          'package' => 'Paragraphs',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
          ),
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'paragraphs' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/paragraphs.module',
        'basename' => 'paragraphs.module',
        'name' => 'Paragraphs',
        'info' => 
        array (
          'name' => 'Paragraphs',
          'type' => 'module',
          'description' => 'Enables the creation of paragraphs entities.',
          'package' => 'Paragraphs',
          'configure' => 'entity.paragraphs_type.collection',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions:entity_reference_revisions',
            1 => 'drupal:file',
            2 => 'drupal:system (>= 8.5)',
          ),
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
            1 => 'replicate:replicate',
            2 => 'inline_entity_form:inline_entity_form',
            3 => 'field_group:field_group',
            4 => 'block_field:block_field',
          ),
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => '8014',
        'version' => '8.x-1.3',
      ),
      'admin_toolbar_links_access_filter' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.module',
        'basename' => 'admin_toolbar_links_access_filter.module',
        'name' => 'Admin Toolbar Links Access Filter',
        'info' => 
        array (
          'name' => 'Admin Toolbar Links Access Filter',
          'description' => 'Provides a workaround for the common problem that users with \'Use the administration pages and help\' permission see menu links they don\'t have access permission for. Once the issue <a href=\'https://www.drupal.org/node/296693\'>https://www.drupal.org/node/296693</a> be solved, this module will be deprecated.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'admin_toolbar_tools' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.module',
        'basename' => 'admin_toolbar_tools.module',
        'name' => 'Admin Toolbar Extra Tools',
        'info' => 
        array (
          'name' => 'Admin Toolbar Extra Tools',
          'description' => 'Adds menu links to the Admin Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
            1 => 'drupal:system (>=8.3)',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'admin_toolbar' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar.module',
        'basename' => 'admin_toolbar.module',
        'name' => 'Admin Toolbar',
        'info' => 
        array (
          'name' => 'Admin Toolbar',
          'description' => 'Provides a drop-down menu interface to the site Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:toolbar',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'redirect_domain' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/modules/redirect_domain/redirect_domain.module',
        'basename' => 'redirect_domain.module',
        'name' => 'Redirect Domain',
        'info' => 
        array (
          'name' => 'Redirect Domain',
          'type' => 'module',
          'description' => 'Allows users to redirect between domains.',
          'dependencies' => 
          array (
            0 => 'redirect',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1525419807,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'redirect_404' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/modules/redirect_404/redirect_404.module',
        'basename' => 'redirect_404.module',
        'name' => 'Redirect 404',
        'info' => 
        array (
          'name' => 'Redirect 404',
          'type' => 'module',
          'description' => 'Logs 404 errors and allows users to create redirects for often requested but missing pages.',
          'dependencies' => 
          array (
            0 => 'redirect',
            1 => 'views',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1525419807,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.2',
      ),
      'redirect' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'Redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'type' => 'module',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'configure' => 'redirect.settings',
          'dependencies' => 
          array (
            0 => 'drupal:link',
            1 => 'drupal:views',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1525419807,
        ),
        'schema_version' => '8108',
        'version' => '8.x-1.2',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'Views Slideshow Cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow Cycle',
          'type' => 'module',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views_slideshow:views_slideshow',
          ),
          'version' => '8.x-4.6',
          'core' => '8.x',
          'project' => 'views_slideshow',
          'datestamp' => 1510987088,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.6',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'Views Slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'type' => 'module',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '8.x-4.6',
          'core' => '8.x',
          'project' => 'views_slideshow',
          'datestamp' => 1510987088,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.6',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'Token',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'token',
          'datestamp' => 1527232696,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'file_browser' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/file_browser/file_browser.module',
        'basename' => 'file_browser.module',
        'name' => 'File Browser',
        'info' => 
        array (
          'name' => 'File Browser',
          'description' => 'Provides a default Entity Browser for files, using Masonry and Imagesloaded.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'entity_browser',
            1 => 'entity_embed',
            2 => 'dropzonejs',
            3 => 'dropzonejs_eb_widget',
            4 => 'field',
            5 => 'file',
            6 => 'image',
            7 => 'menu_ui',
            8 => 'node',
            9 => 'path',
            10 => 'text',
            11 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'ctools:ctools',
          ),
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'file_browser',
          'datestamp' => 1493226857,
        ),
        'schema_version' => '8004',
        'version' => '8.x-1.1',
      ),
      'metatag_open_graph' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_open_graph/metatag_open_graph.module',
        'basename' => 'metatag_open_graph.module',
        'name' => 'Metatag: Open Graph',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph',
          'type' => 'module',
          'description' => 'Provides support for Open Graph Protocol meta tags.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => '8102',
        'version' => '8.x-1.5',
      ),
      'metatag_google_cse' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_google_cse/metatag_google_cse.module',
        'basename' => 'metatag_google_cse.module',
        'name' => 'Metatag: Google Custom Search Engine (CSE)',
        'info' => 
        array (
          'name' => 'Metatag: Google Custom Search Engine (CSE)',
          'type' => 'module',
          'description' => 'Provides support for meta tags used for Google Custom Search Engine.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_dc_advanced' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_dc_advanced/metatag_dc_advanced.module',
        'basename' => 'metatag_dc_advanced.module',
        'name' => 'Metatag: Dublin Core Advanced',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core Advanced',
          'type' => 'module',
          'description' => 'Provides forty additional meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_dc',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_open_graph_products' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_open_graph_products/metatag_open_graph_products.module',
        'basename' => 'metatag_open_graph_products.module',
        'name' => 'Metatag: Open Graph Products',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph Products',
          'type' => 'module',
          'description' => 'Provides additional Open Graph Protocol meta tags for describing products.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_open_graph',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_app_links' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_app_links/metatag_app_links.module',
        'basename' => 'metatag_app_links.module',
        'name' => 'Metatag: App Links',
        'info' => 
        array (
          'name' => 'Metatag: App Links',
          'type' => 'module',
          'description' => 'Provides support for applinks.org meta tags.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_favicons' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_favicons/metatag_favicons.module',
        'basename' => 'metatag_favicons.module',
        'name' => 'Metatag: favicons',
        'info' => 
        array (
          'name' => 'Metatag: favicons',
          'type' => 'module',
          'description' => 'Provides support for many different favicons.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_hreflang' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_hreflang/metatag_hreflang.module',
        'basename' => 'metatag_hreflang.module',
        'name' => 'Metatag: hreflang',
        'info' => 
        array (
          'name' => 'Metatag: hreflang',
          'type' => 'module',
          'description' => 'Provides support for the hreflang meta tag with some extra logic to simplify it.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_test_custom_route' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/tests/modules/metatag_test_custom_route/metatag_test_custom_route.module',
        'basename' => 'metatag_test_custom_route.module',
        'name' => 'Metatag: Test Custom Route',
        'info' => 
        array (
          'name' => 'Metatag: Test Custom Route',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom route that only inherits the global configuration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_test_tag' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/tests/modules/metatag_test_tag/metatag_test_tag.module',
        'basename' => 'metatag_test_tag.module',
        'name' => 'Metatag Tests: Tag',
        'info' => 
        array (
          'name' => 'Metatag Tests: Tag',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom meta tag.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_mobile' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_mobile/metatag_mobile.module',
        'basename' => 'metatag_mobile.module',
        'name' => 'Metatag: Mobile & UI Adjustments',
        'info' => 
        array (
          'name' => 'Metatag: Mobile & UI Adjustments',
          'type' => 'module',
          'description' => 'Provides support for meta tags used to control the mobile browser experience.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_views' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
        'basename' => 'metatag_views.module',
        'name' => 'Metatag: Views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'type' => 'module',
          'description' => 'Provides views integration for metatags.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'views',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => '8100',
        'version' => '8.x-1.5',
      ),
      'metatag' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'Metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'type' => 'module',
          'description' => 'Manage meta tags for all entities.',
          'package' => 'SEO',
          'configure' => 'entity.metatag_defaults.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'token:token',
          ),
          'test_dependencies' => 
          array (
            0 => 'devel:devel',
            1 => 'redirect:redirect',
            2 => 'restui:restui',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => '8107',
        'version' => '8.x-1.5',
      ),
      'devel_generate_example' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel_generate/tests/modules/devel_generate_example/devel_generate_example.module',
        'basename' => 'devel_generate_example.module',
        'name' => 'Devel generate Example',
        'info' => 
        array (
          'name' => 'Devel generate Example',
          'type' => 'module',
          'description' => 'Create an example of DevelGenerate plugin type for testing purposing.',
          'package' => 'Development',
          'configure' => 'admin/config/development/generate',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_generate' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'Devel generate',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, menus, taxonomy terms...',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'webprofiler' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/webprofiler/webprofiler.module',
        'basename' => 'webprofiler.module',
        'name' => 'Web Profiler',
        'info' => 
        array (
          'name' => 'Web Profiler',
          'type' => 'module',
          'description' => 'Drupal Web Profiler.',
          'package' => 'Development',
          'configure' => 'webprofiler.settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.2',
      ),
      'kint' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/kint/kint.module',
        'basename' => 'kint.module',
        'name' => 'Devel Kint',
        'info' => 
        array (
          'name' => 'Devel Kint',
          'type' => 'module',
          'description' => 'Wrapper for Kint debugging tool',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/tests/modules/devel_test/devel_test.module',
        'basename' => 'devel_test.module',
        'name' => 'Devel test module',
        'info' => 
        array (
          'name' => 'Devel test module',
          'type' => 'module',
          'description' => 'Support module for Devel testing.',
          'package' => 'Testing',
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_entity_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/tests/modules/devel_entity_test/devel_entity_test.module',
        'basename' => 'devel_entity_test.module',
        'name' => 'Devel entity test module',
        'info' => 
        array (
          'name' => 'Devel entity test module',
          'type' => 'module',
          'description' => 'Provides entity types for Devel tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
            2 => 'entity_test',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'Devel',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'configure' => 'devel.admin_settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.2',
      ),
      'entity_browser_entity_form' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_browser/modules/entity_form/entity_browser_entity_form.module',
        'basename' => 'entity_browser_entity_form.module',
        'name' => 'Entity Browser IEF',
        'info' => 
        array (
          'name' => 'Entity Browser IEF',
          'description' => 'Entity browser inline entity form integration.',
          'type' => 'module',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'inline_entity_form:inline_entity_form',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'entity_browser',
          'datestamp' => 1528140785,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'entity_browser' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_browser/entity_browser.module',
        'basename' => 'entity_browser.module',
        'name' => 'Entity Browser',
        'info' => 
        array (
          'name' => 'Entity Browser',
          'description' => 'Provide a generic entity browser/picker/selector.',
          'type' => 'module',
          'package' => 'Media',
          'test_dependencies' => 
          array (
            0 => 'ctools:ctools',
            1 => 'token:token',
            2 => 'inline_entity_form:inline_entity_form',
            3 => 'media_entity:media_entity',
            4 => 'paragraphs:paragraphs',
          ),
          'configure' => 'entity.entity_browser.collection',
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'entity_browser',
          'datestamp' => 1528140785,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.5',
      ),
      'honeypot' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/honeypot/honeypot.module',
        'basename' => 'honeypot.module',
        'name' => 'Honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'type' => 'module',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'package' => 'Spam control',
          'configure' => 'honeypot.config',
          'hidden' => false,
          'version' => '8.x-1.27',
          'core' => '8.x',
          'project' => 'honeypot',
          'datestamp' => 1499867346,
        ),
        'schema_version' => '8100',
        'version' => '8.x-1.27',
      ),
      'ctools_views' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/ctools/modules/ctools_views/ctools_views.module',
        'basename' => 'ctools_views.module',
        'name' => 'Chaos tools Views',
        'info' => 
        array (
          'name' => 'Chaos tools Views',
          'type' => 'module',
          'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
          'package' => 'Chaos tool suite (Experimental)',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'views',
          ),
          'version' => '8.x-3.0',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1493401747,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'Chaos tools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'type' => 'module',
          'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
          'package' => 'Chaos tool suite',
          'version' => '8.x-3.0',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1493401747,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0',
      ),
      'addtoany' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/addtoany/addtoany.module',
        'basename' => 'addtoany.module',
        'name' => 'AddToAny',
        'info' => 
        array (
          'name' => 'AddToAny',
          'type' => 'module',
          'description' => 'Share buttons by AddToAny, including the AddToAny universal sharing button, Facebook, Twitter, Google+, Pinterest, and over 100 more on the <a href="https://www.addtoany.com/" target="_blank">AddToAny</a> platform.',
          'package' => 'Other',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
          'configure' => 'addtoany.admin_settings',
          'version' => '8.x-1.10',
          'core' => '8.x',
          'project' => 'addtoany',
          'datestamp' => 1530656924,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.10',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/php/php.module',
        'basename' => 'php.module',
        'name' => 'PHP Filter',
        'info' => 
        array (
          'name' => 'PHP Filter',
          'type' => 'module',
          'description' => 'Allows embedded PHP code/snippets to be evaluated. Enabling this can cause security and performance issues as it allows users to execute PHP code on your site.',
          'package' => 'Filters',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'php',
          'datestamp' => 1529156626,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'entity_reference_revisions' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_reference_revisions/entity_reference_revisions.module',
        'basename' => 'entity_reference_revisions.module',
        'name' => 'Entity Reference Revisions',
        'info' => 
        array (
          'name' => 'Entity Reference Revisions',
          'type' => 'module',
          'description' => 'Adds a Entity Reference field type with revision support.',
          'package' => 'Field types',
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'entity_reference_revisions',
          'datestamp' => 1527241086,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'hmp_channel' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/hmp_channel/hmp_channel.module',
        'basename' => 'hmp_channel.module',
        'name' => 'HMP Channel',
        'info' => 
        array (
          'name' => 'HMP Channel',
          'description' => 'Channels helper module',
          'package' => 'HMP Custom',
          'type' => 'module',
          'version' => 1,
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => 1,
      ),
      'hmp_import' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/hmp_import/hmp_import.module',
        'basename' => 'hmp_import.module',
        'name' => 'HMP Import',
        'info' => 
        array (
          'name' => 'HMP Import',
          'description' => 'Import nodes from D7 -> D8',
          'package' => 'HMP Custom',
          'type' => 'module',
          'version' => 1,
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => 1,
      ),
    ),
    'themes' => 
    array (
      'classy.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/classy/classy.info.yml',
        'basename' => 'classy.info.yml',
        'name' => 'Classy',
        'info' => 
        array (
          'name' => 'Classy',
          'type' => 'theme',
          'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
          'package' => 'Core',
          'hidden' => true,
          'libraries' => 
          array (
            0 => 'classy/base',
            1 => 'classy/messages',
            2 => 'core/normalize',
          ),
          'libraries-extend' => 
          array (
            'user/drupal.user' => 
            array (
              0 => 'classy/user',
            ),
            'core/drupal.dropbutton' => 
            array (
              0 => 'classy/dropbutton',
            ),
            'core/drupal.dialog' => 
            array (
              0 => 'classy/dialog',
            ),
            'file/drupal.file' => 
            array (
              0 => 'classy/file',
            ),
            'core/drupal.progress' => 
            array (
              0 => 'classy/progress',
            ),
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'version' => '8.5.5',
      ),
      'twig.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/engines/twig/twig.info.yml',
        'basename' => 'twig.info.yml',
        'name' => 'Twig',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Twig',
          'package' => 'Core',
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'version' => '8.5.5',
      ),
      'seven.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/seven/seven.info.yml',
        'basename' => 'seven.info.yml',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
          'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
          'package' => 'Core',
          'libraries' => 
          array (
            0 => 'seven/global-styling',
          ),
          'libraries-override' => 
          array (
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/system/components/system-status-counter.css' => 'css/components/system-status-counter.css',
                  '/core/themes/stable/css/system/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
                  '/core/themes/stable/css/system/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/vertical-tabs.css' => false,
                ),
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                ),
              ),
            ),
            'core/jquery.ui.dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                ),
              ),
            ),
            'classy/dialog' => 'seven/seven.drupal.dialog',
          ),
          'libraries-extend' => 
          array (
            'core/ckeditor' => 
            array (
              0 => 'seven/ckeditor-dialog',
            ),
            'core/drupal.vertical-tabs' => 
            array (
              0 => 'seven/vertical-tabs',
            ),
            'core/jquery.ui' => 
            array (
              0 => 'seven/seven.jquery.ui',
            ),
            'tour/tour-styling' => 
            array (
              0 => 'seven/tour-styling',
            ),
          ),
          'quickedit_stylesheets' => 
          array (
            0 => 'css/components/quickedit.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'pre_content' => 'Pre-content',
            'breadcrumb' => 'Breadcrumb',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'version' => '8.5.5',
      ),
      'stark.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/stark/stark.info.yml',
        'basename' => 'stark.info.yml',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'type' => 'theme',
          'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
          'package' => 'Core',
          'base theme' => false,
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'version' => '8.5.5',
      ),
      'bartik.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/bartik/bartik.info.yml',
        'basename' => 'bartik.info.yml',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
          'package' => 'Core',
          'libraries' => 
          array (
            0 => 'bartik/global-styling',
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/base/elements.css',
            1 => 'css/components/captions.css',
            2 => 'css/components/table.css',
            3 => 'css/components/text-formatted.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'primary_menu' => 'Primary menu',
            'secondary_menu' => 'Secondary menu',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured_top' => 'Featured top',
            'breadcrumb' => 'Breadcrumb',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'featured_bottom_first' => 'Featured bottom first',
            'featured_bottom_second' => 'Featured bottom second',
            'featured_bottom_third' => 'Featured bottom third',
            'footer_first' => 'Footer first',
            'footer_second' => 'Footer second',
            'footer_third' => 'Footer third',
            'footer_fourth' => 'Footer fourth',
            'footer_fifth' => 'Footer fifth',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'version' => '8.5.5',
      ),
      'stable.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/stable/stable.info.yml',
        'basename' => 'stable.info.yml',
        'name' => 'Stable',
        'info' => 
        array (
          'name' => 'Stable',
          'type' => 'theme',
          'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
          'package' => 'Core',
          'base theme' => false,
          'hidden' => true,
          'libraries-override' => 
          array (
            'block/drupal.block.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/block.admin.css' => 'css/block/block.admin.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.language' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
                ),
              ),
            ),
            'color/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/color.admin.css' => 'css/color/color.admin.css',
                ),
              ),
            ),
            'config_translation/drupal.config_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
                ),
              ),
            ),
            'content_translation/drupal.content_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
                ),
              ),
            ),
            'content_moderation/content_moderation' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/content_moderation.module.css' => 'css/content_moderation/content_moderation.module.css',
                ),
                'theme' => 
                array (
                  'css/content_moderation.theme.css' => 'css/content_moderation/content_moderation.theme.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-links' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.module.css' => 'css/contextual/contextual.module.css',
                ),
                'theme' => 
                array (
                  'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
                  'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
                ),
              ),
            ),
            'core/drupal.dialog.off_canvas' => 
            array (
              'css' => 
              array (
                'base' => 
                array (
                  'misc/dialog/off-canvas.reset.css' => 'css/core/dialog/off-canvas.reset.css',
                  'misc/dialog/off-canvas.base.css' => 'css/core/dialog/off-canvas.base.css',
                  'misc/dialog/off-canvas.css' => 'css/core/dialog/off-canvas.css',
                  'misc/dialog/off-canvas.theme.css' => 'css/core/dialog/off-canvas.theme.css',
                ),
                'component' => 
                array (
                  'misc/dialog/off-canvas.motion.css' => 'css/core/dialog/off-canvas.motion.css',
                  'misc/dialog/off-canvas.button.css' => 'css/core/dialog/off-canvas.button.css',
                  'misc/dialog/off-canvas.form.css' => 'css/core/dialog/off-canvas.form.css',
                  'misc/dialog/off-canvas.table.css' => 'css/core/dialog/off-canvas.table.css',
                  'misc/dialog/off-canvas.details.css' => 'css/core/dialog/off-canvas.details.css',
                  'misc/dialog/off-canvas.tabledrag.css' => 'css/core/dialog/off-canvas.tabledrag.css',
                  'misc/dialog/off-canvas.dropbutton.css' => 'css/core/dialog/off-canvas.dropbutton.css',
                  'misc/dialog/off-canvas.layout.css' => 'css/core/dialog/off-canvas.layout.css',
                ),
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
                ),
              ),
            ),
            'dblog/drupal.dblog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/dblog.module.css' => 'css/dblog/dblog.module.css',
                ),
              ),
            ),
            'field_ui/drupal.field_ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
                ),
              ),
            ),
            'file/drupal.file' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/file.admin.css' => 'css/file/file.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/caption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/filter.caption.css' => 'css/filter/filter.caption.css',
                ),
              ),
            ),
            'image/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/image.admin.css' => 'css/image/image.admin.css',
                ),
              ),
            ),
            'image/quickedit.inPlaceEditor.image' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/editors/image.css' => 'css/image/editors/image.css',
                ),
                'theme' => 
                array (
                  'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
                ),
              ),
            ),
            'language/drupal.language.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/language.admin.css' => 'css/language/language.admin.css',
                ),
              ),
            ),
            'locale/drupal.locale.admin' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/locale.admin.css' => 'css/locale/locale.admin.css',
                ),
              ),
            ),
            'menu_ui/drupal.menu_ui.adminforms' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
                ),
              ),
            ),
            'node/drupal.node' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.preview' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.preview.css' => 'css/node/node.preview.css',
                ),
              ),
            ),
            'node/form' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.admin.css' => 'css/node/node.admin.css',
                ),
              ),
            ),
            'quickedit/quickedit' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
                ),
                'theme' => 
                array (
                  'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
                  'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
                ),
              ),
            ),
            'settings_tray/drupal.settings_tray' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/settings_tray.module.css' => 'css/settings_tray/settings_tray.module.css',
                  'css/settings_tray.motion.css' => 'css/settings_tray/settings_tray.motion.css',
                  'css/settings_tray.toolbar.css' => 'css/settings_tray/settings_tray.toolbar.css',
                ),
                'theme' => 
                array (
                  'css/settings_tray.theme.css' => 'css/settings_tray/settings_tray.theme.css',
                ),
              ),
            ),
            'shortcut/drupal.shortcut' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
                  'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
                ),
              ),
            ),
            'simpletest/drupal.simpletest' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/simpletest.module.css' => 'css/simpletest/simpletest.module.css',
                ),
              ),
            ),
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
                  'css/components/align.module.css' => 'css/system/components/align.module.css',
                  'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
                  'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
                  'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
                  'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
                  'css/components/details.module.css' => 'css/system/components/details.module.css',
                  'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
                  'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
                  'css/components/js.module.css' => 'css/system/components/js.module.css',
                  'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
                  'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
                  'css/components/progress.module.css' => 'css/system/components/progress.module.css',
                  'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
                  'css/components/resize.module.css' => 'css/system/components/resize.module.css',
                  'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
                  'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
                  'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
                  'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
                  'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
                  'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
                  'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
                ),
              ),
            ),
            'system/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.admin.css' => 'css/system/system.admin.css',
                ),
              ),
            ),
            'system/maintenance' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.maintenance.css' => 'css/system/system.maintenance.css',
                ),
              ),
            ),
            'system/diff' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/system.diff.css' => 'css/system/system.diff.css',
                ),
              ),
            ),
            'taxonomy/drupal.taxonomy' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
                ),
                'theme' => 
                array (
                  'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
                  'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar.menu' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
                ),
              ),
            ),
            'tour/tour-styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/tour.module.css' => 'css/tour/tour.module.css',
                ),
              ),
            ),
            'update/drupal.update.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
                ),
              ),
            ),
            'user/drupal.user' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/user.module.css' => 'css/user/user.module.css',
                ),
              ),
            ),
            'user/drupal.user.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.admin.css' => 'css/user/user.admin.css',
                ),
              ),
            ),
            'user/drupal.user.icons' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
                ),
              ),
            ),
            'views/views.module' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views.module.css' => 'css/views/views.module.css',
                ),
              ),
            ),
            'views_ui/admin.styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
                ),
                'theme' => 
                array (
                  'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
                  'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
                ),
              ),
            ),
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
        ),
        'version' => '8.5.5',
      ),
      'hmp_base.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/themes/hmp_base/hmp_base.info.yml',
        'basename' => 'hmp_base.info.yml',
        'name' => 'HMP Base',
        'info' => 
        array (
          'name' => 'HMP Base',
          'description' => 'Base Theme',
          'version' => 1,
          'type' => 'theme',
          'package' => 'HMP',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'hmp_base/global',
          ),
          'regions' => 
          array (
            'logo' => 'logo',
            'header_right' => 'Header Right',
            'skyscraper' => 'Skyscraper',
            'leaderboard' => 'Leaderboard',
            'above_content' => 'Above Content',
            'content' => 'Content',
            'aside' => 'Sidebar',
            'middle_leader' => 'Middle Leaderboard',
            'lower_leader' => 'Lower Leaderboard',
            'under_content' => 'Under Content',
          ),
        ),
        'version' => 1,
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '8.5.5',
        'description' => 'This platform is running Drupal 8.5.5',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'Minimal',
        'info' => 
        array (
          'name' => 'Minimal',
          'type' => 'profile',
          'description' => 'Build a custom site without pre-configured functionality. Suitable for advanced users.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'block',
            2 => 'dblog',
            3 => 'page_cache',
            4 => 'dynamic_page_cache',
          ),
          'themes' => 
          array (
            0 => 'stark',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/profiles/minimal/minimal.info.yml',
        'path' => '/data/disk/o2/static/drupal-8.5.5/core/profiles/minimal',
        'version' => '8.5.5',
      ),
      'standard' => 
      array (
        'name' => 'Standard',
        'info' => 
        array (
          'name' => 'Standard',
          'type' => 'profile',
          'description' => 'Install with commonly used features pre-configured.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'block',
            3 => 'breakpoint',
            4 => 'ckeditor',
            5 => 'color',
            6 => 'config',
            7 => 'comment',
            8 => 'contextual',
            9 => 'contact',
            10 => 'menu_link_content',
            11 => 'datetime',
            12 => 'block_content',
            13 => 'quickedit',
            14 => 'editor',
            15 => 'help',
            16 => 'image',
            17 => 'menu_ui',
            18 => 'options',
            19 => 'path',
            20 => 'page_cache',
            21 => 'dynamic_page_cache',
            22 => 'big_pipe',
            23 => 'taxonomy',
            24 => 'dblog',
            25 => 'search',
            26 => 'shortcut',
            27 => 'toolbar',
            28 => 'field_ui',
            29 => 'file',
            30 => 'rdf',
            31 => 'views',
            32 => 'views_ui',
            33 => 'tour',
            34 => 'automated_cron',
          ),
          'themes' => 
          array (
            0 => 'bartik',
            1 => 'seven',
          ),
          'version' => '8.5.5',
          'core' => '8.x',
          'project' => 'drupal',
          'datestamp' => 1530738955,
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/data/disk/o2/static/drupal-8.5.5/core/profiles/standard/standard.info.yml',
        'path' => '/data/disk/o2/static/drupal-8.5.5/core/profiles/standard',
        'version' => '8.5.5',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'pathauto' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'Pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'ctools:ctools',
            1 => 'drupal:path',
            2 => 'token:token',
          ),
          'configure' => 'entity.pathauto_pattern.collection',
          'recommends' => 
          array (
            0 => 'redirect:redirect',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'pathauto',
          'datestamp' => 1524421087,
        ),
        'schema_version' => '8106',
        'version' => '8.x-1.2',
      ),
      'block_class' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/block_class/block_class.module',
        'basename' => 'block_class.module',
        'name' => 'Block Class',
        'info' => 
        array (
          'name' => 'Block Class',
          'type' => 'module',
          'description' => 'Allows assigning classes to Blocks',
          'package' => 'Other',
          'dependencies' => 
          array (
            0 => 'drupal:block',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'block_class',
          'datestamp' => 1531440825,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'paragraphs_library' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_library/paragraphs_library.module',
        'basename' => 'paragraphs_library.module',
        'name' => 'Paragraphs Library',
        'info' => 
        array (
          'name' => 'Paragraphs Library',
          'type' => 'module',
          'description' => 'Provides a library for reusing paragraphs.',
          'package' => 'Paragraphs',
          'configure' => 'paragraphs_library_item.settings',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
            1 => 'drupal:views',
            2 => 'entity_usage:entity_usage (>= 8.x-2.0-alpha4)',
          ),
          'test_dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
          ),
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.3',
      ),
      'paragraphs_demo' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_demo/paragraphs_demo.module',
        'basename' => 'paragraphs_demo.module',
        'name' => 'Paragraphs Demo',
        'info' => 
        array (
          'description' => 'Provides multilingual demo Paragraphs types.',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
            1 => 'drupal:field',
            2 => 'drupal:image',
            3 => 'drupal:field_ui',
            4 => 'drupal:block',
            5 => 'drupal:language',
            6 => 'drupal:content_translation',
            7 => 'drupal:node',
            8 => 'search_api:search_api_db',
            9 => 'search_api:search_api',
            10 => 'drupal:views',
            11 => 'drupal:taxonomy',
            12 => 'paragraphs:paragraphs_library',
            13 => 'drupal:entity_browser',
          ),
          'hidden' => false,
          'name' => 'Paragraphs Demo',
          'package' => 'Paragraphs',
          'type' => 'module',
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'paragraphs_type_permissions' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_type_permissions/paragraphs_type_permissions.module',
        'basename' => 'paragraphs_type_permissions.module',
        'name' => 'Paragraphs Type Permissions',
        'info' => 
        array (
          'name' => 'Paragraphs Type Permissions',
          'type' => 'module',
          'description' => 'Allows users to configure permissions for individual Paragraphs types.',
          'package' => 'Paragraphs',
          'dependencies' => 
          array (
            0 => 'paragraphs:paragraphs',
          ),
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'paragraphs' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/paragraphs.module',
        'basename' => 'paragraphs.module',
        'name' => 'Paragraphs',
        'info' => 
        array (
          'name' => 'Paragraphs',
          'type' => 'module',
          'description' => 'Enables the creation of paragraphs entities.',
          'package' => 'Paragraphs',
          'configure' => 'entity.paragraphs_type.collection',
          'dependencies' => 
          array (
            0 => 'entity_reference_revisions:entity_reference_revisions',
            1 => 'drupal:file',
            2 => 'drupal:system (>= 8.5)',
          ),
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
            1 => 'replicate:replicate',
            2 => 'inline_entity_form:inline_entity_form',
            3 => 'field_group:field_group',
            4 => 'block_field:block_field',
          ),
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'paragraphs',
          'datestamp' => 1527502688,
        ),
        'schema_version' => '8014',
        'version' => '8.x-1.3',
      ),
      'admin_toolbar_links_access_filter' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.module',
        'basename' => 'admin_toolbar_links_access_filter.module',
        'name' => 'Admin Toolbar Links Access Filter',
        'info' => 
        array (
          'name' => 'Admin Toolbar Links Access Filter',
          'description' => 'Provides a workaround for the common problem that users with \'Use the administration pages and help\' permission see menu links they don\'t have access permission for. Once the issue <a href=\'https://www.drupal.org/node/296693\'>https://www.drupal.org/node/296693</a> be solved, this module will be deprecated.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'admin_toolbar_tools' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.module',
        'basename' => 'admin_toolbar_tools.module',
        'name' => 'Admin Toolbar Extra Tools',
        'info' => 
        array (
          'name' => 'Admin Toolbar Extra Tools',
          'description' => 'Adds menu links to the Admin Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'admin_toolbar:admin_toolbar',
            1 => 'drupal:system (>=8.3)',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'admin_toolbar' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar.module',
        'basename' => 'admin_toolbar.module',
        'name' => 'Admin Toolbar',
        'info' => 
        array (
          'name' => 'Admin Toolbar',
          'description' => 'Provides a drop-down menu interface to the site Toolbar.',
          'package' => 'Administration',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'drupal:toolbar',
          ),
          'version' => '8.x-1.24',
          'core' => '8.x',
          'project' => 'admin_toolbar',
          'datestamp' => 1527522484,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.24',
      ),
      'redirect_domain' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/modules/redirect_domain/redirect_domain.module',
        'basename' => 'redirect_domain.module',
        'name' => 'Redirect Domain',
        'info' => 
        array (
          'name' => 'Redirect Domain',
          'type' => 'module',
          'description' => 'Allows users to redirect between domains.',
          'dependencies' => 
          array (
            0 => 'redirect',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1525419807,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'redirect_404' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/modules/redirect_404/redirect_404.module',
        'basename' => 'redirect_404.module',
        'name' => 'Redirect 404',
        'info' => 
        array (
          'name' => 'Redirect 404',
          'type' => 'module',
          'description' => 'Logs 404 errors and allows users to create redirects for often requested but missing pages.',
          'dependencies' => 
          array (
            0 => 'redirect',
            1 => 'views',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1525419807,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.2',
      ),
      'redirect' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'Redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'type' => 'module',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'configure' => 'redirect.settings',
          'dependencies' => 
          array (
            0 => 'drupal:link',
            1 => 'drupal:views',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'redirect',
          'datestamp' => 1525419807,
        ),
        'schema_version' => '8108',
        'version' => '8.x-1.2',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'Views Slideshow Cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow Cycle',
          'type' => 'module',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views_slideshow:views_slideshow',
          ),
          'version' => '8.x-4.6',
          'core' => '8.x',
          'project' => 'views_slideshow',
          'datestamp' => 1510987088,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.6',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'Views Slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'type' => 'module',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'drupal:views',
          ),
          'version' => '8.x-4.6',
          'core' => '8.x',
          'project' => 'views_slideshow',
          'datestamp' => 1510987088,
        ),
        'schema_version' => 8000,
        'version' => '8.x-4.6',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'Token',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'version' => '8.x-1.3',
          'core' => '8.x',
          'project' => 'token',
          'datestamp' => 1527232696,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.3',
      ),
      'file_browser' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/file_browser/file_browser.module',
        'basename' => 'file_browser.module',
        'name' => 'File Browser',
        'info' => 
        array (
          'name' => 'File Browser',
          'description' => 'Provides a default Entity Browser for files, using Masonry and Imagesloaded.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'entity_browser',
            1 => 'entity_embed',
            2 => 'dropzonejs',
            3 => 'dropzonejs_eb_widget',
            4 => 'field',
            5 => 'file',
            6 => 'image',
            7 => 'menu_ui',
            8 => 'node',
            9 => 'path',
            10 => 'text',
            11 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'ctools:ctools',
          ),
          'version' => '8.x-1.1',
          'core' => '8.x',
          'project' => 'file_browser',
          'datestamp' => 1493226857,
        ),
        'schema_version' => '8004',
        'version' => '8.x-1.1',
      ),
      'metatag_open_graph' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_open_graph/metatag_open_graph.module',
        'basename' => 'metatag_open_graph.module',
        'name' => 'Metatag: Open Graph',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph',
          'type' => 'module',
          'description' => 'Provides support for Open Graph Protocol meta tags.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => '8102',
        'version' => '8.x-1.5',
      ),
      'metatag_google_cse' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_google_cse/metatag_google_cse.module',
        'basename' => 'metatag_google_cse.module',
        'name' => 'Metatag: Google Custom Search Engine (CSE)',
        'info' => 
        array (
          'name' => 'Metatag: Google Custom Search Engine (CSE)',
          'type' => 'module',
          'description' => 'Provides support for meta tags used for Google Custom Search Engine.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_dc_advanced' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_dc_advanced/metatag_dc_advanced.module',
        'basename' => 'metatag_dc_advanced.module',
        'name' => 'Metatag: Dublin Core Advanced',
        'info' => 
        array (
          'name' => 'Metatag: Dublin Core Advanced',
          'type' => 'module',
          'description' => 'Provides forty additional meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_dc',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_open_graph_products' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_open_graph_products/metatag_open_graph_products.module',
        'basename' => 'metatag_open_graph_products.module',
        'name' => 'Metatag: Open Graph Products',
        'info' => 
        array (
          'name' => 'Metatag: Open Graph Products',
          'type' => 'module',
          'description' => 'Provides additional Open Graph Protocol meta tags for describing products.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
            1 => 'metatag:metatag_open_graph',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_app_links' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_app_links/metatag_app_links.module',
        'basename' => 'metatag_app_links.module',
        'name' => 'Metatag: App Links',
        'info' => 
        array (
          'name' => 'Metatag: App Links',
          'type' => 'module',
          'description' => 'Provides support for applinks.org meta tags.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_favicons' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_favicons/metatag_favicons.module',
        'basename' => 'metatag_favicons.module',
        'name' => 'Metatag: favicons',
        'info' => 
        array (
          'name' => 'Metatag: favicons',
          'type' => 'module',
          'description' => 'Provides support for many different favicons.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_hreflang' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_hreflang/metatag_hreflang.module',
        'basename' => 'metatag_hreflang.module',
        'name' => 'Metatag: hreflang',
        'info' => 
        array (
          'name' => 'Metatag: hreflang',
          'type' => 'module',
          'description' => 'Provides support for the hreflang meta tag with some extra logic to simplify it.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_test_custom_route' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/tests/modules/metatag_test_custom_route/metatag_test_custom_route.module',
        'basename' => 'metatag_test_custom_route.module',
        'name' => 'Metatag: Test Custom Route',
        'info' => 
        array (
          'name' => 'Metatag: Test Custom Route',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom route that only inherits the global configuration.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_test_tag' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/tests/modules/metatag_test_tag/metatag_test_tag.module',
        'basename' => 'metatag_test_tag.module',
        'name' => 'Metatag Tests: Tag',
        'info' => 
        array (
          'name' => 'Metatag Tests: Tag',
          'type' => 'module',
          'description' => 'Support module for testing handling of a custom meta tag.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_mobile' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_mobile/metatag_mobile.module',
        'basename' => 'metatag_mobile.module',
        'name' => 'Metatag: Mobile & UI Adjustments',
        'info' => 
        array (
          'name' => 'Metatag: Mobile & UI Adjustments',
          'type' => 'module',
          'description' => 'Provides support for meta tags used to control the mobile browser experience.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag:metatag',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'metatag_views' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_views/metatag_views.module',
        'basename' => 'metatag_views.module',
        'name' => 'Metatag: Views',
        'info' => 
        array (
          'name' => 'Metatag: Views',
          'type' => 'module',
          'description' => 'Provides views integration for metatags.',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'views',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => '8100',
        'version' => '8.x-1.5',
      ),
      'metatag' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'Metatag',
        'info' => 
        array (
          'name' => 'Metatag',
          'type' => 'module',
          'description' => 'Manage meta tags for all entities.',
          'package' => 'SEO',
          'configure' => 'entity.metatag_defaults.collection',
          'dependencies' => 
          array (
            0 => 'drupal:field',
            1 => 'token:token',
          ),
          'test_dependencies' => 
          array (
            0 => 'devel:devel',
            1 => 'redirect:redirect',
            2 => 'restui:restui',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'metatag',
          'datestamp' => 1522344488,
        ),
        'schema_version' => '8107',
        'version' => '8.x-1.5',
      ),
      'devel_generate_example' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel_generate/tests/modules/devel_generate_example/devel_generate_example.module',
        'basename' => 'devel_generate_example.module',
        'name' => 'Devel generate Example',
        'info' => 
        array (
          'name' => 'Devel generate Example',
          'type' => 'module',
          'description' => 'Create an example of DevelGenerate plugin type for testing purposing.',
          'package' => 'Development',
          'configure' => 'admin/config/development/generate',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_generate' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'Devel generate',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, menus, taxonomy terms...',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'webprofiler' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/webprofiler/webprofiler.module',
        'basename' => 'webprofiler.module',
        'name' => 'Web Profiler',
        'info' => 
        array (
          'name' => 'Web Profiler',
          'type' => 'module',
          'description' => 'Drupal Web Profiler.',
          'package' => 'Development',
          'configure' => 'webprofiler.settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => '8001',
        'version' => '8.x-1.2',
      ),
      'kint' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/kint/kint.module',
        'basename' => 'kint.module',
        'name' => 'Devel Kint',
        'info' => 
        array (
          'name' => 'Devel Kint',
          'type' => 'module',
          'description' => 'Wrapper for Kint debugging tool',
          'package' => 'Development',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/tests/modules/devel_test/devel_test.module',
        'basename' => 'devel_test.module',
        'name' => 'Devel test module',
        'info' => 
        array (
          'name' => 'Devel test module',
          'type' => 'module',
          'description' => 'Support module for Devel testing.',
          'package' => 'Testing',
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel_entity_test' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/tests/modules/devel_entity_test/devel_entity_test.module',
        'basename' => 'devel_entity_test.module',
        'name' => 'Devel entity test module',
        'info' => 
        array (
          'name' => 'Devel entity test module',
          'type' => 'module',
          'description' => 'Provides entity types for Devel tests.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
            2 => 'entity_test',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.2',
      ),
      'devel' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'Devel',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'configure' => 'devel.admin_settings',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '8.x-1.2',
          'core' => '8.x',
          'project' => 'devel',
          'datestamp' => 1507197848,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.2',
      ),
      'entity_browser_entity_form' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_browser/modules/entity_form/entity_browser_entity_form.module',
        'basename' => 'entity_browser_entity_form.module',
        'name' => 'Entity Browser IEF',
        'info' => 
        array (
          'name' => 'Entity Browser IEF',
          'description' => 'Entity browser inline entity form integration.',
          'type' => 'module',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'entity_browser:entity_browser',
            1 => 'inline_entity_form:inline_entity_form',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'entity_browser',
          'datestamp' => 1528140785,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'entity_browser' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_browser/entity_browser.module',
        'basename' => 'entity_browser.module',
        'name' => 'Entity Browser',
        'info' => 
        array (
          'name' => 'Entity Browser',
          'description' => 'Provide a generic entity browser/picker/selector.',
          'type' => 'module',
          'package' => 'Media',
          'test_dependencies' => 
          array (
            0 => 'ctools:ctools',
            1 => 'token:token',
            2 => 'inline_entity_form:inline_entity_form',
            3 => 'media_entity:media_entity',
            4 => 'paragraphs:paragraphs',
          ),
          'configure' => 'entity.entity_browser.collection',
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'entity_browser',
          'datestamp' => 1528140785,
        ),
        'schema_version' => '8002',
        'version' => '8.x-1.5',
      ),
      'honeypot' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/honeypot/honeypot.module',
        'basename' => 'honeypot.module',
        'name' => 'Honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'type' => 'module',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'package' => 'Spam control',
          'configure' => 'honeypot.config',
          'hidden' => false,
          'version' => '8.x-1.27',
          'core' => '8.x',
          'project' => 'honeypot',
          'datestamp' => 1499867346,
        ),
        'schema_version' => '8100',
        'version' => '8.x-1.27',
      ),
      'ctools_views' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/ctools/modules/ctools_views/ctools_views.module',
        'basename' => 'ctools_views.module',
        'name' => 'Chaos tools Views',
        'info' => 
        array (
          'name' => 'Chaos tools Views',
          'type' => 'module',
          'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
          'package' => 'Chaos tool suite (Experimental)',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'views',
          ),
          'version' => '8.x-3.0',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1493401747,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'Chaos tools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'type' => 'module',
          'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
          'package' => 'Chaos tool suite',
          'version' => '8.x-3.0',
          'core' => '8.x',
          'project' => 'ctools',
          'datestamp' => 1493401747,
        ),
        'schema_version' => 8000,
        'version' => '8.x-3.0',
      ),
      'addtoany' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/addtoany/addtoany.module',
        'basename' => 'addtoany.module',
        'name' => 'AddToAny',
        'info' => 
        array (
          'name' => 'AddToAny',
          'type' => 'module',
          'description' => 'Share buttons by AddToAny, including the AddToAny universal sharing button, Facebook, Twitter, Google+, Pinterest, and over 100 more on the <a href="https://www.addtoany.com/" target="_blank">AddToAny</a> platform.',
          'package' => 'Other',
          'dependencies' => 
          array (
            0 => 'drupal:node',
          ),
          'configure' => 'addtoany.admin_settings',
          'version' => '8.x-1.10',
          'core' => '8.x',
          'project' => 'addtoany',
          'datestamp' => 1530656924,
        ),
        'schema_version' => '8101',
        'version' => '8.x-1.10',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/php/php.module',
        'basename' => 'php.module',
        'name' => 'PHP Filter',
        'info' => 
        array (
          'name' => 'PHP Filter',
          'type' => 'module',
          'description' => 'Allows embedded PHP code/snippets to be evaluated. Enabling this can cause security and performance issues as it allows users to execute PHP code on your site.',
          'package' => 'Filters',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'version' => '8.x-1.0',
          'core' => '8.x',
          'project' => 'php',
          'datestamp' => 1529156626,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.0',
      ),
      'entity_reference_revisions' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_reference_revisions/entity_reference_revisions.module',
        'basename' => 'entity_reference_revisions.module',
        'name' => 'Entity Reference Revisions',
        'info' => 
        array (
          'name' => 'Entity Reference Revisions',
          'type' => 'module',
          'description' => 'Adds a Entity Reference field type with revision support.',
          'package' => 'Field types',
          'test_dependencies' => 
          array (
            0 => 'diff:diff',
          ),
          'version' => '8.x-1.5',
          'core' => '8.x',
          'project' => 'entity_reference_revisions',
          'datestamp' => 1527241086,
        ),
        'schema_version' => 8000,
        'version' => '8.x-1.5',
      ),
      'hmp_channel' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/hmp_channel/hmp_channel.module',
        'basename' => 'hmp_channel.module',
        'name' => 'HMP Channel',
        'info' => 
        array (
          'name' => 'HMP Channel',
          'description' => 'Channels helper module',
          'package' => 'HMP Custom',
          'type' => 'module',
          'version' => 1,
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => 1,
      ),
      'hmp_import' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/hmp_import/hmp_import.module',
        'basename' => 'hmp_import.module',
        'name' => 'HMP Import',
        'info' => 
        array (
          'name' => 'HMP Import',
          'description' => 'Import nodes from D7 -> D8',
          'package' => 'HMP Custom',
          'type' => 'module',
          'version' => 1,
          'core' => '8.x',
        ),
        'schema_version' => 8000,
        'version' => 1,
      ),
    ),
    'themes' => 
    array (
      'hmp_base.info' => 
      array (
        'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/themes/hmp_base/hmp_base.info.yml',
        'basename' => 'hmp_base.info.yml',
        'name' => 'HMP Base',
        'info' => 
        array (
          'name' => 'HMP Base',
          'description' => 'Base Theme',
          'version' => 1,
          'type' => 'theme',
          'package' => 'HMP',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'hmp_base/global',
          ),
          'regions' => 
          array (
            'logo' => 'logo',
            'header_right' => 'Header Right',
            'skyscraper' => 'Skyscraper',
            'leaderboard' => 'Leaderboard',
            'above_content' => 'Above Content',
            'content' => 'Content',
            'aside' => 'Sidebar',
            'middle_leader' => 'Middle Leaderboard',
            'lower_leader' => 'Lower Leaderboard',
            'under_content' => 'Under Content',
          ),
        ),
        'version' => 1,
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);