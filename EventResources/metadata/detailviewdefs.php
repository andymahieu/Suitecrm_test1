<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'EventResources';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'form' => array(
            'buttons' => array(
                'EDIT',
                'DUPLICATE',
                'DELETE',
                'FIND_DUPLICATES',
            ),
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
        'useTabs' => true,
        'tabDefs' => array(
            'DEFAULT' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
            'LBL_PANEL_ADVANCED' => array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
        ),
    ),
    'panels' => array(
        'default' => array(
            array(
                'name',
                'assigned_user_name',
            ),
            array(
                'uid',
                'argb',
            ),
            array(
                'pattern',
                'daily_calendar_id',
            ),
            array(
                'event_creation_rule_id',
                'hourly_calendar_id',
            ),
            array(
                'last_post_date',
                'last_post_user_name',
            ),
            array(
                'rub103',
                'rub75',
            ),
            array(
                'rub76',
                'rub81',
            ),
            array(
                'rub150',
                'open_forum',
            ),
            array(
                array(
                    'name' => 'external_data',
                    'studio' => 'visible',
                    'label' => 'LBL_EXTERNAL_DATA',
                ),
            ),
            array(
                array(
                    'name' => 'description',
                    'comment' => 'Full text of the note',
                    'label' => 'LBL_DESCRIPTION',
                ),
            ),
        ),
        'LBL_PANEL_ADVANCED' => array(
            array(
                'date_entered',
                'date_modified',
            ),
            array(
                'created_by_name',
                'modified_by_name',
            ),
        ),
    ),
);