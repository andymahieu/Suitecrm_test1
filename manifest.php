<?php
$manifest = array(
    'name' => 'EventResources Module',
    'description' => 'A module for managing Event Resources',
    'version' => '1.0',
    'author' => 'OpenHands',
    'readme' => 'This module provides CRUD functionality for Event Resources tables.',
    'acceptable_sugar_flavors' => array('CE'),
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(),
        'regex_matches' => array('6\\.5\\.[0-9]$'),
    ),
    'is_uninstallable' => true,
    'published_date' => date('Y-m-d H:i:s'),
    'type' => 'module',
    'remove_tables' => 'prompt',
);

$installdefs = array(
    'id' => 'EventResources',
    'beans' => array(
        array(
            'module' => 'EventResources',
            'class' => 'EventResources',
            'path' => 'modules/EventResources/EventResources.php',
            'tab' => true,
        ),
    ),
    'layoutdefs' => array(),
    'relationships' => array(),
    'image_dir' => '<basepath>/icons',
    'copy' => array(
        array(
            'from' => '<basepath>/EventResources',
            'to' => 'modules/EventResources',
        ),
    ),
    'language' => array(
        array(
            'from' => '<basepath>/EventResources/language/en_us/EventResources.php',
            'to_module' => 'EventResources',
            'language' => 'en_us',
        ),
    ),
    'dashlets' => array(
        array(
            'from' => '<basepath>/EventResources/Dashlets/EventResourcesDashlet',
            'name' => 'EventResourcesDashlet',
        ),
    ),
    'logic_hooks' => array(),
    'pre_execute' => array(),
    'post_execute' => array(
        '<basepath>/EventResources/install/install.php',
    ),
);