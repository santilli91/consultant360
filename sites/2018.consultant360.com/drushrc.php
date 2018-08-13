<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'MGWGXXR5Yr';
$options['db_name'] = '2018consultant36';
$options['db_user'] = '2018consultant36';
$options['packages'] = array (
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
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'action' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/action/action.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'addtoany' => 
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
      'mtime' => 1530656924,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/addtoany/addtoany.info.yml',
      'status' => 1,
      'schema_version' => '8101',
    ),
    'admin_toolbar' => 
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
      'mtime' => 1527522484,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'admin_toolbar_links_access_filter' => 
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
      'mtime' => 1527522484,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar_links_access_filter/admin_toolbar_links_access_filter.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'admin_toolbar_tools' => 
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
      'mtime' => 1527522484,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'advagg' => 
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
      'mtime' => 1518684422,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_bundler' => 
    array (
      'name' => 'AdvAgg Bundler',
      'description' => 'Customize the number of aggregates to be created.',
      'package' => 'Advanced CSS/JS Aggregation',
      'dependencies' => 
      array (
        0 => 'advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_bundler.settings',
      'version' => '8.x-3.5',
      'core' => '8.x',
      'project' => 'advagg',
      'datestamp' => 1518684422,
      'mtime' => 1518684422,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_bundler/advagg_bundler.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_cdn' => 
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
      'mtime' => 1518684422,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_cdn/advagg_cdn.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_css_minify' => 
    array (
      'name' => 'AdvAgg Minify CSS',
      'description' => 'Minify CSS.',
      'package' => 'Advanced CSS/JS Aggregation',
      'dependencies' => 
      array (
        0 => 'advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_css_minify.settings',
      'version' => '8.x-3.5',
      'core' => '8.x',
      'project' => 'advagg',
      'datestamp' => 1518684422,
      'mtime' => 1518684422,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_css_minify/advagg_css_minify.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_ext_minify' => 
    array (
      'name' => 'AdvAgg External Minification',
      'description' => 'Minify Javascript and/or CSS with a command line minifier.',
      'package' => 'Advanced CSS/JS Aggregation',
      'dependencies' => 
      array (
        0 => 'advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_ext_minify.settings',
      'version' => '8.x-3.5',
      'core' => '8.x',
      'project' => 'advagg',
      'datestamp' => 1518684422,
      'mtime' => 1518684422,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_ext_minify/advagg_ext_minify.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_js_minify' => 
    array (
      'name' => 'AdvAgg Minify JavaScript',
      'description' => 'Minify JavaScript with a 3rd party minifier; JSMin+, JSMin c ext, JShrink, and JSqueeze currently.',
      'package' => 'Advanced CSS/JS Aggregation',
      'dependencies' => 
      array (
        0 => 'advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_js_minify.settings',
      'version' => '8.x-3.5',
      'core' => '8.x',
      'project' => 'advagg',
      'datestamp' => 1518684422,
      'mtime' => 1518684422,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_js_minify/advagg_js_minify.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_mod' => 
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
      'mtime' => 1518684422,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_mod/advagg_mod.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_old_ie_compatibility' => 
    array (
      'name' => 'AdvAgg Old Internet Explorer Compatibility Enhancer',
      'description' => 'Provides some enhanced compatibility with outdated Internet Explorer versions.',
      'package' => 'Advanced CSS/JS Aggregation',
      'dependencies' => 
      array (
        0 => 'advagg',
      ),
      'type' => 'module',
      'configure' => 'advagg_old_ie_compatibility.settings',
      'version' => '8.x-3.5',
      'core' => '8.x',
      'project' => 'advagg',
      'datestamp' => 1518684422,
      'mtime' => 1518684422,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_old_ie_compatibility/advagg_old_ie_compatibility.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'advagg_validator' => 
    array (
      'name' => 'AdvAgg CSS/JS Validator',
      'description' => 'Validate the CSS and JS files used in Aggregation for syntax errors.',
      'package' => 'Advanced CSS/JS Aggregation',
      'type' => 'module',
      'version' => '8.x-3.5',
      'core' => '8.x',
      'project' => 'advagg',
      'datestamp' => 1518684422,
      'mtime' => 1518684422,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/advagg/advagg_validator/advagg_validator.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'aggregator' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/aggregator/aggregator.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'automated_cron' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/automated_cron/automated_cron.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'backup_migrate' => 
    array (
      'name' => 'Backup and Migrate',
      'description' => 'Backup the Drupal database and files or migrate them to another environment.',
      'package' => 'Other',
      'type' => 'module',
      'configure' => 'backup_migrate.quick_backup',
      'version' => '8.x-4.0',
      'core' => '8.x',
      'project' => 'backup_migrate',
      'datestamp' => 1522330988,
      'mtime' => 1532443983,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/backup_migrate/backup_migrate.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ban' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/ban/ban.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'basic_auth' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/basic_auth/basic_auth.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'big_pipe' => 
    array (
      'name' => 'BigPipe',
      'type' => 'module',
      'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/big_pipe/big_pipe.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'block' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/block/block.info.yml',
      'status' => 1,
      'schema_version' => '8003',
    ),
    'block_class' => 
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
      'mtime' => 1531440826,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/modules/contrib/block_class/block_class.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'block_content' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/block_content/block_content.info.yml',
      'status' => 1,
      'schema_version' => '8400',
    ),
    'block_place' => 
    array (
      'name' => 'Place Blocks',
      'type' => 'module',
      'description' => 'Allow administrators to place blocks from any Drupal page',
      'package' => 'Core (Experimental)',
      'hidden' => true,
      'dependencies' => 
      array (
        0 => 'block',
      ),
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/block_place/block_place.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'book' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/book/book.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'breakpoint' => 
    array (
      'name' => 'Breakpoint',
      'type' => 'module',
      'description' => 'Manage breakpoints and breakpoint groups for responsive designs.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/breakpoint/breakpoint.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'captcha' => 
    array (
      'name' => 'CAPTCHA',
      'type' => 'module',
      'description' => 'Provides the CAPTCHA API for adding challenges to arbitrary forms.',
      'package' => 'Spam control',
      'configure' => 'captcha_settings',
      'dependencies' => 
      array (
        0 => 'node',
      ),
      'version' => '8.x-1.0-beta1',
      'core' => '8.x',
      'project' => 'captcha',
      'datestamp' => 1487198589,
      'mtime' => 1532092894,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/captcha/captcha.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'cdn' => 
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
      'mtime' => 1512212591,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/cdn/cdn.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'cdn_ui' => 
    array (
      'name' => 'CDN UI',
      'description' => 'Administrative interface for CDN.',
      'type' => 'module',
      'package' => 'Web services',
      'configure' => 'cdn_ui.settings',
      'dependencies' => 
      array (
        0 => 'cdn',
      ),
      'version' => '8.x-3.2',
      'core' => '8.x',
      'project' => 'cdn',
      'datestamp' => 1512212591,
      'mtime' => 1512212591,
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/cdn/cdn_ui/cdn_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ckeditor' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/ckeditor/ckeditor.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'color' => 
    array (
      'name' => 'Color',
      'type' => 'module',
      'description' => 'Allows administrators to change the color scheme of compatible themes.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/color/color.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'comment' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/comment/comment.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'config' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config/config.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'config_translation' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/config_translation/config_translation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'contact' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/contact/contact.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'content_moderation' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/content_moderation/content_moderation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'content_translation' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/content_translation/content_translation.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'contextual' => 
    array (
      'name' => 'Contextual Links',
      'type' => 'module',
      'description' => 'Provides contextual links to perform actions related to elements on a page.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/contextual/contextual.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools' => 
    array (
      'name' => 'Chaos tools',
      'type' => 'module',
      'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
      'package' => 'Chaos tool suite',
      'version' => '8.x-3.0',
      'core' => '8.x',
      'project' => 'ctools',
      'datestamp' => 1493401747,
      'mtime' => 1523555979,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/ctools/ctools.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'ctools_block' => 
    array (
      'name' => 'Chaos tools blocks',
      'type' => 'module',
      'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
      'package' => 'Chaos tool suite (Experimental)',
      'dependencies' => 
      array (
        0 => 'ctools',
      ),
      'version' => '8.x-3.0',
      'core' => '8.x',
      'project' => 'ctools',
      'datestamp' => 1493401747,
      'mtime' => 1523555980,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/ctools/modules/ctools_block/ctools_block.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'ctools_views' => 
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
      'mtime' => 1523555980,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/ctools/modules/ctools_views/ctools_views.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'datetime' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/datetime/datetime.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'datetime_range' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/datetime_range/datetime_range.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'dblog' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/dblog/dblog.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'devel' => 
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
      'mtime' => 1524489162,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'devel_generate' => 
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
      'mtime' => 1524489163,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/devel_generate/devel_generate.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'dynamic_page_cache' => 
    array (
      'name' => 'Internal Dynamic Page Cache',
      'type' => 'module',
      'description' => 'Caches pages for any user, handling dynamic content correctly.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/dynamic_page_cache/dynamic_page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'editor' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/editor/editor.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'entity_browser' => 
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
      'mtime' => 1528140785,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_browser/entity_browser.info.yml',
      'status' => 1,
      'schema_version' => '8002',
    ),
    'entity_browser_entity_form' => 
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
      'mtime' => 1528140785,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_browser/modules/entity_form/entity_browser_entity_form.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'entity_browser_example' => 
    array (
      'name' => 'Entity Browser example',
      'description' => 'Entity browser example module.',
      'type' => 'module',
      'package' => 'Media',
      'dependencies' => 
      array (
        0 => 'entity_browser:entity_browser',
        1 => 'drupal:views',
        2 => 'drupal:field',
        3 => 'drupal:file',
        4 => 'drupal:node',
        5 => 'drupal:image',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'entity_browser',
      'datestamp' => 1528140785,
      'mtime' => 1528140785,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_browser/modules/example/entity_browser_example.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'entity_reference' => 
    array (
      'name' => 'Entity Reference',
      'type' => 'module',
      'description' => 'Deprecated. All the functionality has been moved to Core.',
      'package' => 'Field types',
      'hidden' => true,
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/entity_reference/entity_reference.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'entity_reference_revisions' => 
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
      'mtime' => 1527241086,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/entity_reference_revisions/entity_reference_revisions.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'feeds' => 
    array (
      'name' => 'Feeds',
      'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
      'package' => 'Feeds',
      'type' => 'module',
      'configure' => 'entity.feeds_feed_type.collection',
      'dependencies' => 
      array (
        0 => 'drupal:system (>=8.3.0)',
      ),
      'version' => '8.x-3.0-alpha2',
      'core' => '8.x',
      'project' => 'feeds',
      'datestamp' => 1528634143,
      'mtime' => 1532365729,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/feeds/feeds.info.yml',
      'status' => 1,
      'schema_version' => '8001',
    ),
    'field' => 
    array (
      'name' => 'Field',
      'type' => 'module',
      'description' => 'Field API to add fields to entities like nodes and users.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field/field.info.yml',
      'status' => 1,
      'schema_version' => '8500',
    ),
    'field_layout' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field_layout/field_layout.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'field_ui' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/field_ui/field_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'file' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/file/file.info.yml',
      'status' => 1,
      'schema_version' => '8300',
    ),
    'file_browser' => 
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
      'mtime' => 1523556063,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/file_browser/file_browser.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'file_browser_example' => 
    array (
      'name' => 'File Browser Example',
      'description' => 'Provides an example Content Type and Custom Block Type for File Browser.',
      'type' => 'module',
      'dependencies' => 
      array (
        0 => 'file_browser',
      ),
      'version' => '8.x-1.1',
      'core' => '8.x',
      'project' => 'file_browser',
      'datestamp' => 1493226857,
      'mtime' => 1523556064,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/file_browser/modules/file_browser_example/file_browser_example.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'filter' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/filter/filter.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'forum' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/forum/forum.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'gate' => 
    array (
      'name' => 'HMP Gate',
      'description' => 'HMP Gating module.  Gate pages by password or user login, or grouped logins',
      'package' => 'HMP Custom',
      'type' => 'module',
      'core' => '8.x',
      'version' => 1.1000000000000001,
      'mtime' => 1532025540,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/gate/gate.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'hal' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/hal/hal.info.yml',
      'status' => 1,
      'schema_version' => '8501',
    ),
    'help' => 
    array (
      'name' => 'Help',
      'type' => 'module',
      'description' => 'Manages the display of online help.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/help/help.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'history' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/history/history.info.yml',
      'status' => 1,
      'schema_version' => '8101',
    ),
    'hmp_channel' => 
    array (
      'name' => 'HMP Channel',
      'description' => 'Channels helper module',
      'package' => 'HMP Custom',
      'type' => 'module',
      'version' => 1,
      'core' => '8.x',
      'mtime' => 1526671651,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/hmp_channel/hmp_channel.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'hmp_import' => 
    array (
      'name' => 'HMP Import',
      'description' => 'Import nodes from D7 -> D8',
      'package' => 'HMP Custom',
      'type' => 'module',
      'version' => 1,
      'core' => '8.x',
      'mtime' => 1525806973,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/hmp_import/hmp_import.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'hmp_matomo' => 
    array (
      'name' => 'HMP Matomo',
      'description' => 'HMP Matomo Module',
      'type' => 'module',
      'core' => '8.x',
      'package' => 'HMP Custom',
      'mtime' => 1532522115,
      'dependencies' => 
      array (
      ),
      'version' => NULL,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/custom/hmp_matomo/hmp_matomo.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'honeypot' => 
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
      'mtime' => 1523556013,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/honeypot/honeypot.info.yml',
      'status' => 1,
      'schema_version' => '8100',
    ),
    'image' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/image/image.info.yml',
      'status' => 1,
      'schema_version' => '8201',
    ),
    'image_captcha' => 
    array (
      'name' => 'Image CAPTCHA',
      'type' => 'module',
      'description' => 'Provides an image based CAPTCHA.',
      'package' => 'Spam control',
      'dependencies' => 
      array (
        0 => 'captcha',
      ),
      'configure' => 'admin/config/people/captcha/image_captcha',
      'version' => '8.x-1.0-beta1',
      'core' => '8.x',
      'project' => 'captcha',
      'datestamp' => 1487198589,
      'mtime' => 1532092896,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/captcha/image_captcha/image_captcha.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'inline_form_errors' => 
    array (
      'type' => 'module',
      'name' => 'Inline Form Errors',
      'description' => 'Places error messages adjacent to form inputs, for improved usability and accessibility.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/inline_form_errors/inline_form_errors.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'kint' => 
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
      'mtime' => 1524489168,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/kint/kint.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'language' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/language/language.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'layout_builder' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/layout_builder/layout_builder.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'layout_discovery' => 
    array (
      'name' => 'Layout Discovery',
      'type' => 'module',
      'description' => 'Provides a way for modules or themes to register layouts.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/layout_discovery/layout_discovery.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'link' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/link/link.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'locale' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/locale/locale.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'media' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/media/media.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'menu_link_attributes' => 
    array (
      'name' => 'Menu Link Attributes',
      'type' => 'module',
      'description' => 'Allows you to add attributes to menu links.',
      'dependencies' => 
      array (
        0 => 'menu_link_content',
      ),
      'configure' => 'menu_link_attributes.config',
      'version' => '8.x-1.0',
      'core' => '8.x',
      'project' => 'menu_link_attributes',
      'datestamp' => 1507134253,
      'mtime' => 1532619058,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/menu_link_attributes/menu_link_attributes.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'menu_link_content' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/menu_link_content/menu_link_content.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'menu_ui' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/menu_ui/menu_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'metatag' => 
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
      'mtime' => 1523556039,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag.info.yml',
      'status' => 1,
      'schema_version' => '8107',
    ),
    'metatag_app_links' => 
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
      'mtime' => 1523556018,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_app_links/metatag_app_links.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_dc' => 
    array (
      'name' => 'Metatag: Dublin Core',
      'type' => 'module',
      'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'metatag',
      'datestamp' => 1522344488,
      'mtime' => 1523556018,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_dc/metatag_dc.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_dc_advanced' => 
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
      'mtime' => 1523556019,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_dc_advanced/metatag_dc_advanced.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_facebook' => 
    array (
      'name' => 'Metatag: Facebook',
      'type' => 'module',
      'description' => 'A set of meta tags specially for controlling advanced functionality with Facebook.',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'metatag',
      'datestamp' => 1522344488,
      'mtime' => 1523556021,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_facebook/metatag_facebook.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'metatag_favicons' => 
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
      'mtime' => 1523556022,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_favicons/metatag_favicons.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_google_cse' => 
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
      'mtime' => 1523556024,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_google_cse/metatag_google_cse.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_google_plus' => 
    array (
      'name' => 'Metatag: Google Plus',
      'type' => 'module',
      'description' => 'Provides support for Google\'s Plus meta tags.',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'metatag',
      'datestamp' => 1522344488,
      'mtime' => 1523556026,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_google_plus/metatag_google_plus.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'metatag_hreflang' => 
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
      'mtime' => 1523556027,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_hreflang/metatag_hreflang.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_mobile' => 
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
      'mtime' => 1523556028,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_mobile/metatag_mobile.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_open_graph' => 
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
      'mtime' => 1523556029,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_open_graph/metatag_open_graph.info.yml',
      'status' => 1,
      'schema_version' => '8102',
    ),
    'metatag_open_graph_products' => 
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
      'mtime' => 1523556031,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_open_graph_products/metatag_open_graph_products.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_pinterest' => 
    array (
      'name' => 'Metatag: Pinterest',
      'type' => 'module',
      'description' => 'Provides support for Pinterest\'s custom meta tags.',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'metatag',
      'datestamp' => 1522344488,
      'mtime' => 1523556032,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_pinterest/metatag_pinterest.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'metatag_twitter_cards' => 
    array (
      'name' => 'Metatag: Twitter Cards',
      'type' => 'module',
      'description' => 'Provides support for Twitter\'s Card meta tags.',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'metatag',
      'datestamp' => 1522344488,
      'mtime' => 1523556034,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_verification' => 
    array (
      'name' => 'Metatag: Verification',
      'type' => 'module',
      'description' => 'Verifies ownership of a site for search engines and other services.',
      'package' => 'SEO',
      'dependencies' => 
      array (
        0 => 'metatag:metatag',
      ),
      'version' => '8.x-1.5',
      'core' => '8.x',
      'project' => 'metatag',
      'datestamp' => 1522344488,
      'mtime' => 1523556034,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_verification/metatag_verification.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'metatag_views' => 
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
      'mtime' => 1523556037,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/metatag/metatag_views/metatag_views.info.yml',
      'status' => 1,
      'schema_version' => '8100',
    ),
    'migrate' => 
    array (
      'name' => 'Migrate',
      'type' => 'module',
      'description' => 'Handles migrations',
      'package' => 'Migration',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate/migrate.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate_drupal/migrate_drupal.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'migrate_drupal_ui' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/migrate_drupal_ui/migrate_drupal_ui.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'node' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/node/node.info.yml',
      'status' => 1,
      'schema_version' => '8401',
    ),
    'options' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/options/options.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'page_cache' => 
    array (
      'name' => 'Internal Page Cache',
      'type' => 'module',
      'description' => 'Caches pages for anonymous users. Use when an external page cache is not available.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/page_cache/page_cache.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'paragraphs' => 
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
      'mtime' => 1527502688,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/paragraphs.info.yml',
      'status' => 1,
      'schema_version' => 8014,
    ),
    'paragraphs_demo' => 
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
      'mtime' => 1527502688,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_demo/paragraphs_demo.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'paragraphs_library' => 
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
      'mtime' => 1527502688,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_library/paragraphs_library.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'paragraphs_type_permissions' => 
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
      'mtime' => 1527502688,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/paragraphs/modules/paragraphs_type_permissions/paragraphs_type_permissions.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'path' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/path/path.info.yml',
      'status' => 1,
      'schema_version' => '8200',
    ),
    'pathauto' => 
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
      'mtime' => 1524421087,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/pathauto/pathauto.info.yml',
      'status' => 1,
      'schema_version' => '8106',
    ),
    'php' => 
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
      'mtime' => 1529521034,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/php/php.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'quickedit' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/quickedit/quickedit.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'rdf' => 
    array (
      'name' => 'RDF',
      'type' => 'module',
      'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rdf/rdf.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'recaptcha' => 
    array (
      'name' => 'reCAPTCHA',
      'type' => 'module',
      'description' => 'Protect your website from spam and abuse while letting real people pass through with ease.',
      'package' => 'Spam control',
      'configure' => 'recaptcha.admin_settings_form',
      'dependencies' => 
      array (
        0 => 'captcha',
      ),
      'version' => '8.x-2.3',
      'core' => '8.x',
      'project' => 'recaptcha',
      'datestamp' => 1521320884,
      'mtime' => 1532092900,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/recaptcha/recaptcha.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'redirect' => 
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
      'mtime' => 1525419807,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/redirect.info.yml',
      'status' => 1,
      'schema_version' => '8108',
    ),
    'redirect_404' => 
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
      'mtime' => 1525419807,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/modules/redirect_404/redirect_404.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'redirect_domain' => 
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
      'mtime' => 1525419807,
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/redirect/modules/redirect_domain/redirect_domain.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'redis' => 
    array (
      'name' => 'Redis',
      'description' => 'Provide a module placeholder, for using as dependency for module that needs Redis.',
      'package' => 'Performance',
      'type' => 'module',
      'core' => '8.x',
      'configure' => 'redis.admin_display',
      'mtime' => 1506697533,
      'dependencies' => 
      array (
      ),
      'version' => NULL,
      'php' => '5.5.9',
      'filename' => '/data/all/000/modules/redis_eight/redis.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'responsive_image' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/responsive_image/responsive_image.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'rest' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/rest/rest.info.yml',
      'status' => 1,
      'schema_version' => '8401',
    ),
    'robotstxt' => 
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
      'mtime' => 1491149337,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/all/002/o_contrib_eight/robotstxt/robotstxt.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'search' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/search/search.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'serialization' => 
    array (
      'name' => 'Serialization',
      'type' => 'module',
      'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML',
      'package' => 'Web services',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/serialization/serialization.info.yml',
      'status' => 1,
      'schema_version' => '8401',
    ),
    'settings_tray' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/settings_tray/settings_tray.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'shortcut' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/shortcut/shortcut.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'simpletest' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/simpletest/simpletest.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'smtp' => 
    array (
      'name' => 'SMTP Authentication Support',
      'description' => 'Allow for site emails to be sent through an SMTP server of your choice.',
      'package' => 'Mail',
      'type' => 'module',
      'configure' => 'smtp.config',
      'version' => '8.x-1.0-beta4',
      'core' => '8.x',
      'project' => 'smtp',
      'datestamp' => 1527598397,
      'mtime' => 1532436905,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/smtp/smtp.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'standard' => 
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
      'mtime' => 1530738955,
      'package' => 'Other',
      'php' => '5.5.9',
      'hidden' => true,
      'required' => true,
      'distribution' => 
      array (
        'name' => 'Drupal',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/profiles/standard/standard.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'statistics' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/statistics/statistics.info.yml',
      'status' => 1,
      'schema_version' => '8300',
    ),
    'syslog' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/syslog/syslog.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'system' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/system/system.info.yml',
      'status' => 1,
      'schema_version' => '8501',
    ),
    'taxonomy' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/taxonomy/taxonomy.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'telephone' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/telephone/telephone.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'text' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/text/text.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'token' => 
    array (
      'type' => 'module',
      'name' => 'Token',
      'description' => 'Provides a user interface for the Token API and some missing core tokens.',
      'version' => '8.x-1.3',
      'core' => '8.x',
      'project' => 'token',
      'datestamp' => 1527232696,
      'mtime' => 1527232696,
      'dependencies' => 
      array (
      ),
      'package' => 'Other',
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/token/token.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'toolbar' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/toolbar/toolbar.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'tour' => 
    array (
      'name' => 'Tour',
      'type' => 'module',
      'description' => 'Provides guided tours.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/tour/tour.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'tracker' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/tracker/tracker.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'update' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/update/update.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'user' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/user/user.info.yml',
      'status' => 1,
      'schema_version' => '8100',
    ),
    'views' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views/views.info.yml',
      'status' => 1,
      'schema_version' => '8500',
    ),
    'views_slideshow' => 
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
      'mtime' => 1524660966,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/views_slideshow/views_slideshow.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'views_slideshow_cycle' => 
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
      'mtime' => 1524660968,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'views_ui' => 
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
      'mtime' => 1530738955,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/views_ui/views_ui.info.yml',
      'status' => 1,
      'schema_version' => 8000,
    ),
    'webprofiler' => 
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
      'mtime' => 1524489186,
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/all/modules/contrib/devel/webprofiler/webprofiler.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
    'workflows' => 
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
      'mtime' => 1530738955,
      'dependencies' => 
      array (
      ),
      'php' => '5.5.9',
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/modules/workflows/workflows.info.yml',
      'status' => 0,
      'schema_version' => -1,
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
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
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/bartik/screenshot.png',
      'php' => '5.5.9',
      'mtime' => 1530738955,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'dependencies' => 
      array (
        0 => 'classy',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/bartik/bartik.info.yml',
      'status' => 1,
    ),
    'classy' => 
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
      'engine' => 'twig',
      'base theme' => 'stable',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/classy/screenshot.png',
      'php' => '5.5.9',
      'mtime' => 1530738955,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'dependencies' => 
      array (
        0 => 'stable',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/classy/classy.info.yml',
      'status' => 1,
    ),
    'seven' => 
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
        1 => 'page_top',
        2 => 'page_bottom',
      ),
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'engine' => 'twig',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/seven/screenshot.png',
      'php' => '5.5.9',
      'mtime' => 1530738955,
      'dependencies' => 
      array (
        0 => 'classy',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/seven/seven.info.yml',
      'status' => 1,
    ),
    'stable' => 
    array (
      'name' => 'Stable',
      'type' => 'theme',
      'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
      'package' => 'Core',
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
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stable/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'mtime' => 1530738955,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/stable/stable.info.yml',
      'status' => 1,
    ),
    'stark' => 
    array (
      'name' => 'Stark',
      'type' => 'theme',
      'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
      'package' => 'Core',
      'version' => '8.5.5',
      'core' => '8.x',
      'project' => 'drupal',
      'datestamp' => 1530738955,
      'engine' => 'twig',
      'regions' => 
      array (
        'sidebar_first' => 'Left sidebar',
        'sidebar_second' => 'Right sidebar',
        'content' => 'Content',
        'header' => 'Header',
        'primary_menu' => 'Primary menu',
        'secondary_menu' => 'Secondary menu',
        'footer' => 'Footer',
        'highlighted' => 'Highlighted',
        'help' => 'Help',
        'page_top' => 'Page top',
        'page_bottom' => 'Page bottom',
        'breadcrumb' => 'Breadcrumb',
      ),
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'screenshot' => 'core/themes/stark/screenshot.png',
      'php' => '5.5.9',
      'libraries' => 
      array (
      ),
      'mtime' => 1530738955,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/core/themes/stark/stark.info.yml',
      'status' => 0,
    ),
    'hmp_base' => 
    array (
      'name' => 'HMP Base C360',
      'description' => 'C360 Channel Theme',
      'version' => 1,
      'type' => 'theme',
      'package' => 'HMP',
      'core' => '8.x',
      'screenshot' => 'sites/2018.consultant360.com/themes/hmp_base/screenshot.png',
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
        'floater' => 'Floater',
      ),
      'engine' => 'twig',
      'base theme' => 'stable',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'php' => '5.5.9',
      'mtime' => 1532708697,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'dependencies' => 
      array (
        0 => 'stable',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/sites/2018.consultant360.com/themes/hmp_base/hmp_base.info.yml',
      'platform' => -1,
      'status' => 1,
    ),
    'Remove' => 
    array (
      'name' => 'Old Theme Needs Removed',
      'description' => 'Remove this',
      'version' => 1,
      'type' => 'theme',
      'package' => 'HMP',
      'core' => '8.x',
      'screenshot' => 'themes/Remove/screenshot.png',
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
      'engine' => 'twig',
      'base theme' => 'stable',
      'features' => 
      array (
        0 => 'favicon',
        1 => 'logo',
        2 => 'node_user_picture',
        3 => 'comment_user_picture',
        4 => 'comment_user_verification',
      ),
      'php' => '5.5.9',
      'mtime' => 1532698359,
      'regions_hidden' => 
      array (
        0 => 'page_top',
        1 => 'page_bottom',
      ),
      'dependencies' => 
      array (
        0 => 'stable',
      ),
      'filename' => '/data/disk/o2/static/drupal-8.5.5/themes/Remove/Remove.info.yml',
      'status' => 0,
    ),
  ),
);
$options['installed'] = true;
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
