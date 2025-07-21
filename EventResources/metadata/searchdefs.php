<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'EventResources';
$searchdefs[$module_name] = array(
    'templateMeta' => array(
        'maxColumns' => '3',
        'maxColumnsBasic' => '4',
        'widths' => array(
            'label' => '10',
            'field' => '30'
        ),
    ),
    'layout' => array(
        'basic_search' => array(
            'name',
            array(
                'name' => 'current_user_only',
                'label' => 'LBL_CURRENT_USER_FILTER',
                'type' => 'bool'
            ),
        ),
        'advanced_search' => array(
            'name',
            'uid',
            'argb',
            'pattern',
            'daily_calendar_id',
            'event_creation_rule_id',
            'last_post_date',
            'last_post_user_name',
            'hourly_calendar_id',
            'rub103',
            'rub75',
            'rub76',
            'rub81',
            'rub150',
            'open_forum',
            array(
                'name' => 'assigned_user_id',
                'label' => 'LBL_ASSIGNED_TO',
                'type' => 'enum',
                'function' => array(
                    'name' => 'get_user_array',
                    'params' => array(
                        0 => false
                    )
                )
            ),
            array(
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enable_range_search' => true,
                'options' => 'date_range_search_dom',
            ),
            array(
                'name' => 'date_modified',
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'enable_range_search' => true,
                'options' => 'date_range_search_dom',
            ),
        ),
    ),
);