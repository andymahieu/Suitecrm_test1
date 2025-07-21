<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$popupMeta = array(
    'moduleMain' => 'EventResources',
    'varName' => 'EventResources',
    'orderBy' => 'name',
    'whereClauses' => array(
        'name' => 'eventresources.name',
        'uid' => 'eventresources.uid',
        'assigned_user_id' => 'eventresources.assigned_user_id',
    ),
    'searchInputs' => array(
        'name',
        'uid',
        'assigned_user_id',
    ),
    'searchdefs' => array(
        'name' => array(
            'name' => 'name',
            'width' => '10%'
        ),
        'uid' => array(
            'name' => 'uid',
            'width' => '10%'
        ),
        'assigned_user_id' => array(
            'name' => 'assigned_user_id',
            'label' => 'LBL_ASSIGNED_TO',
            'type' => 'enum',
            'function' => array(
                'name' => 'get_user_array',
                'params' => array(
                    0 => false
                )
            ),
            'width' => '10%'
        ),
    ),
    'listviewdefs' => array(
        'NAME' => array(
            'width' => '30',
            'label' => 'LBL_NAME',
            'link' => true,
            'default' => true
        ),
        'UID' => array(
            'type' => 'varchar',
            'label' => 'LBL_UID',
            'width' => '10%',
            'default' => true
        ),
        'ASSIGNED_USER_NAME' => array(
            'width' => '10',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            'default' => true
        ),
    ),
);