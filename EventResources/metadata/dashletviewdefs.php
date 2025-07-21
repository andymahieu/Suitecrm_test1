<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $current_user;

$dashletData['EventResourcesDashlet']['searchFields'] = array(
    'name' => array(
        'default' => ''
    ),
    'uid' => array(
        'default' => ''
    ),
    'date_entered' => array(
        'default' => ''
    ),
    'date_modified' => array(
        'default' => ''
    ),
    'assigned_user_id' => array(
        'type' => 'assigned_user_name',
        'default' => $current_user->name
    )
);

$dashletData['EventResourcesDashlet']['columns'] = array(
    'name' => array(
        'width' => '40',
        'label' => 'LBL_LIST_NAME',
        'link' => true,
        'default' => true
    ),
    'uid' => array(
        'width' => '15',
        'label' => 'LBL_UID',
        'default' => true
    ),
    'argb' => array(
        'width' => '15',
        'label' => 'LBL_ARGB',
        'default' => false
    ),
    'pattern' => array(
        'width' => '15',
        'label' => 'LBL_PATTERN',
        'default' => false
    ),
    'last_post_date' => array(
        'width' => '15',
        'label' => 'LBL_LAST_POST_DATE',
        'default' => false
    ),
    'date_entered' => array(
        'width' => '15',
        'label' => 'LBL_DATE_ENTERED',
        'default' => true
    ),
    'date_modified' => array(
        'width' => '15',
        'label' => 'LBL_DATE_MODIFIED',
        'default' => true
    ),
    'created_by' => array(
        'width' => '8',
        'label' => 'LBL_CREATED',
        'default' => false
    ),
    'assigned_user_name' => array(
        'width' => '8',
        'label' => 'LBL_LIST_ASSIGNED_USER',
        'default' => true
    ),
);