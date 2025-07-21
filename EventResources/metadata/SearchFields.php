<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'EventResources';
$searchFields[$module_name] = array(
    'name' => array('query_type' => 'default'),
    'current_user_only' => array(
        'query_type' => 'default',
        'db_field' => array('assigned_user_id'),
        'my_items' => true,
        'vname' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool'
    ),
    'assigned_user_id' => array('query_type' => 'default'),
    'uid' => array('query_type' => 'default'),
    'argb' => array('query_type' => 'default'),
    'pattern' => array('query_type' => 'default'),
    'daily_calendar_id' => array('query_type' => 'default'),
    'event_creation_rule_id' => array('query_type' => 'default'),
    'last_post_date' => array('query_type' => 'default'),
    'last_post_user_name' => array('query_type' => 'default'),
    'hourly_calendar_id' => array('query_type' => 'default'),
    'rub103' => array('query_type' => 'default'),
    'rub75' => array('query_type' => 'default'),
    'rub76' => array('query_type' => 'default'),
    'rub81' => array('query_type' => 'default'),
    'rub150' => array('query_type' => 'default'),
    'open_forum' => array('query_type' => 'default'),
    'range_date_entered' => array('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
    'start_range_date_entered' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
    'end_range_date_entered' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
    'range_date_modified' => array('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
    'start_range_date_modified' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
    'end_range_date_modified' => array(
        'query_type' => 'default',
        'enable_range_search' => true,
        'is_date_field' => true
    ),
);