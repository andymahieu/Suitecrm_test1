<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'EventResources';
$listViewDefs[$module_name] = array(
    'NAME' => array(
        'width' => '32',
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true
    ),
    'UID' => array(
        'type' => 'varchar',
        'label' => 'LBL_UID',
        'width' => '10%',
        'default' => true,
    ),
    'ARGB' => array(
        'type' => 'int',
        'label' => 'LBL_ARGB',
        'width' => '10%',
        'default' => true,
    ),
    'PATTERN' => array(
        'type' => 'int',
        'label' => 'LBL_PATTERN',
        'width' => '10%',
        'default' => true,
    ),
    'LAST_POST_DATE' => array(
        'type' => 'datetime',
        'label' => 'LBL_LAST_POST_DATE',
        'width' => '10%',
        'default' => true,
    ),
    'LAST_POST_USER_NAME' => array(
        'type' => 'varchar',
        'label' => 'LBL_LAST_POST_USER_NAME',
        'width' => '10%',
        'default' => true,
    ),
    'OPEN_FORUM' => array(
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_OPEN_FORUM',
        'width' => '10%',
    ),
    'ASSIGNED_USER_NAME' => array(
        'width' => '9',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true,
    ),
    'DATE_MODIFIED' => array(
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
    ),
    'DATE_ENTERED' => array(
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
    ),
);