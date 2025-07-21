<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['EventResources'] = array(
    'table' => 'eventresources',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'vname' => 'LBL_ID',
            'type' => 'id',
            'required' => true,
            'reportable' => true,
            'comment' => 'Unique identifier'
        ),
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'type' => 'name',
            'link' => true,
            'dbType' => 'varchar',
            'len' => 255,
            'unified_search' => true,
            'full_text_search' => array(
                'boost' => 3
            ),
            'required' => true,
            'importable' => 'required',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),
        'date_entered' => array(
            'name' => 'date_entered',
            'vname' => 'LBL_DATE_ENTERED',
            'type' => 'datetime',
            'group' => 'created_by_name',
            'comment' => 'Date record created',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),
        'date_modified' => array(
            'name' => 'date_modified',
            'vname' => 'LBL_DATE_MODIFIED',
            'type' => 'datetime',
            'group' => 'modified_by_name',
            'comment' => 'Date record last modified',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),
        'modified_user_id' => array(
            'name' => 'modified_user_id',
            'rname' => 'user_name',
            'id_name' => 'modified_user_id',
            'vname' => 'LBL_MODIFIED',
            'type' => 'assigned_user_name',
            'table' => 'users',
            'isnull' => 'false',
            'group' => 'modified_by_name',
            'dbType' => 'id',
            'reportable' => true,
            'comment' => 'User who last modified record',
            'massupdate' => false,
        ),
        'modified_by_name' => array(
            'name' => 'modified_by_name',
            'vname' => 'LBL_MODIFIED_NAME',
            'type' => 'relate',
            'reportable' => false,
            'source' => 'non-db',
            'rname' => 'user_name',
            'table' => 'users',
            'id_name' => 'modified_user_id',
            'module' => 'Users',
            'link' => 'modified_user_link',
            'duplicate_merge' => 'disabled',
            'massupdate' => false,
        ),
        'created_by' => array(
            'name' => 'created_by',
            'rname' => 'user_name',
            'id_name' => 'modified_user_id',
            'vname' => 'LBL_CREATED',
            'type' => 'assigned_user_name',
            'table' => 'users',
            'isnull' => 'false',
            'dbType' => 'id',
            'group' => 'created_by_name',
            'comment' => 'User who created record',
            'massupdate' => false,
        ),
        'created_by_name' => array(
            'name' => 'created_by_name',
            'vname' => 'LBL_CREATED',
            'type' => 'relate',
            'reportable' => false,
            'link' => 'created_by_link',
            'rname' => 'user_name',
            'source' => 'non-db',
            'table' => 'users',
            'id_name' => 'created_by',
            'module' => 'Users',
            'duplicate_merge' => 'disabled',
            'importable' => 'false',
            'massupdate' => false,
        ),
        'description' => array(
            'name' => 'description',
            'vname' => 'LBL_DESCRIPTION',
            'type' => 'text',
            'comment' => 'Full text of the note',
            'rows' => 6,
            'cols' => 80,
        ),
        'deleted' => array(
            'name' => 'deleted',
            'vname' => 'LBL_DELETED',
            'type' => 'bool',
            'default' => '0',
            'reportable' => false,
            'comment' => 'Record deletion indicator'
        ),
        'created_by_link' => array(
            'name' => 'created_by_link',
            'type' => 'link',
            'relationship' => 'eventresources_created_by',
            'vname' => 'LBL_CREATED_USER',
            'link_type' => 'one',
            'module' => 'Users',
            'bean_name' => 'User',
            'source' => 'non-db',
        ),
        'modified_user_link' => array(
            'name' => 'modified_user_link',
            'type' => 'link',
            'relationship' => 'eventresources_modified_user',
            'vname' => 'LBL_MODIFIED_USER',
            'link_type' => 'one',
            'module' => 'Users',
            'bean_name' => 'User',
            'source' => 'non-db',
        ),
        'assigned_user_id' => array(
            'name' => 'assigned_user_id',
            'rname' => 'user_name',
            'id_name' => 'assigned_user_id',
            'vname' => 'LBL_ASSIGNED_TO_ID',
            'group' => 'assigned_user_name',
            'type' => 'relate',
            'table' => 'users',
            'module' => 'Users',
            'reportable' => true,
            'isnull' => 'false',
            'dbType' => 'id',
            'audited' => true,
            'comment' => 'User ID assigned to record',
            'duplicate_merge' => 'disabled',
        ),
        'assigned_user_name' => array(
            'name' => 'assigned_user_name',
            'link' => 'assigned_user_link',
            'vname' => 'LBL_ASSIGNED_TO_NAME',
            'rname' => 'user_name',
            'type' => 'relate',
            'reportable' => false,
            'source' => 'non-db',
            'table' => 'users',
            'id_name' => 'assigned_user_id',
            'module' => 'Users',
            'duplicate_merge' => 'disabled'
        ),
        'assigned_user_link' => array(
            'name' => 'assigned_user_link',
            'type' => 'link',
            'relationship' => 'eventresources_assigned_user',
            'vname' => 'LBL_ASSIGNED_TO_USER',
            'link_type' => 'one',
            'module' => 'Users',
            'bean_name' => 'User',
            'source' => 'non-db',
            'duplicate_merge' => 'enabled',
            'rname' => 'user_name',
            'id_name' => 'assigned_user_id',
            'table' => 'users',
        ),
        'SecurityGroups' => array(
            'name' => 'SecurityGroups',
            'type' => 'link',
            'relationship' => 'securitygroups_eventresources',
            'module' => 'SecurityGroups',
            'bean_name' => 'SecurityGroup',
            'source' => 'non-db',
            'vname' => 'LBL_SECURITYGROUPS',
        ),
        // Custom fields from EventResource11
        'uid' => array(
            'name' => 'uid',
            'vname' => 'LBL_UID',
            'type' => 'varchar',
            'len' => 255,
            'comment' => 'Unique identifier string'
        ),
        'argb' => array(
            'name' => 'argb',
            'vname' => 'LBL_ARGB',
            'type' => 'int',
            'comment' => 'ARGB color value'
        ),
        'pattern' => array(
            'name' => 'pattern',
            'vname' => 'LBL_PATTERN',
            'type' => 'int',
            'comment' => 'Pattern value'
        ),
        'daily_calendar_id' => array(
            'name' => 'daily_calendar_id',
            'vname' => 'LBL_DAILY_CALENDAR_ID',
            'type' => 'int',
            'comment' => 'Daily calendar ID'
        ),
        'event_creation_rule_id' => array(
            'name' => 'event_creation_rule_id',
            'vname' => 'LBL_EVENT_CREATION_RULE_ID',
            'type' => 'int',
            'comment' => 'Event creation rule ID'
        ),
        'last_post_date' => array(
            'name' => 'last_post_date',
            'vname' => 'LBL_LAST_POST_DATE',
            'type' => 'datetime',
            'comment' => 'Last post date'
        ),
        'last_post_user_name' => array(
            'name' => 'last_post_user_name',
            'vname' => 'LBL_LAST_POST_USER_NAME',
            'type' => 'varchar',
            'len' => 255,
            'comment' => 'Last post user name'
        ),
        'hourly_calendar_id' => array(
            'name' => 'hourly_calendar_id',
            'vname' => 'LBL_HOURLY_CALENDAR_ID',
            'type' => 'int',
            'comment' => 'Hourly calendar ID'
        ),
        'external_data' => array(
            'name' => 'external_data',
            'vname' => 'LBL_EXTERNAL_DATA',
            'type' => 'text',
            'comment' => 'External data'
        ),
        'rub103' => array(
            'name' => 'rub103',
            'vname' => 'LBL_RUB103',
            'type' => 'varchar',
            'len' => 80,
            'comment' => 'Rub103 field'
        ),
        'rub75' => array(
            'name' => 'rub75',
            'vname' => 'LBL_RUB75',
            'type' => 'varchar',
            'len' => 80,
            'comment' => 'Rub75 field'
        ),
        'open_forum' => array(
            'name' => 'open_forum',
            'vname' => 'LBL_OPEN_FORUM',
            'type' => 'bool',
            'default' => '0',
            'comment' => 'Open forum flag'
        ),
        // Custom fields from EventResource12
        'rub76' => array(
            'name' => 'rub76',
            'vname' => 'LBL_RUB76',
            'type' => 'varchar',
            'len' => 80,
            'comment' => 'Rub76 field'
        ),
        'rub81' => array(
            'name' => 'rub81',
            'vname' => 'LBL_RUB81',
            'type' => 'varchar',
            'len' => 80,
            'comment' => 'Rub81 field'
        ),
        'rub150' => array(
            'name' => 'rub150',
            'vname' => 'LBL_RUB150',
            'type' => 'varchar',
            'len' => 80,
            'comment' => 'Rub150 field'
        ),
    ),
    'relationships' => array(
        'eventresources_modified_user' => array(
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'EventResources',
            'rhs_table' => 'eventresources',
            'rhs_key' => 'modified_user_id',
            'relationship_type' => 'one-to-many'
        ),
        'eventresources_created_by' => array(
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'EventResources',
            'rhs_table' => 'eventresources',
            'rhs_key' => 'created_by',
            'relationship_type' => 'one-to-many'
        ),
        'eventresources_assigned_user' => array(
            'lhs_module' => 'Users',
            'lhs_table' => 'users',
            'lhs_key' => 'id',
            'rhs_module' => 'EventResources',
            'rhs_table' => 'eventresources',
            'rhs_key' => 'assigned_user_id',
            'relationship_type' => 'one-to-many'
        ),
        'securitygroups_eventresources' => array(
            'lhs_module' => 'SecurityGroups',
            'lhs_table' => 'securitygroups',
            'lhs_key' => 'id',
            'rhs_module' => 'EventResources',
            'rhs_table' => 'eventresources',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'securitygroups_records',
            'join_key_lhs' => 'securitygroup_id',
            'join_key_rhs' => 'record_id',
            'relationship_role_column' => 'module',
            'relationship_role_column_value' => 'EventResources'
        ),
    ),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager')) {
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('EventResources', 'EventResources', array('basic', 'assignable', 'security_groups'));