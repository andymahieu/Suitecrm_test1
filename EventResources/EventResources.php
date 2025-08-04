<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class EventResources extends SugarBean
{
    public $new_schema = true;
    public $module_dir = 'EventResources';
    public $object_name = 'EventResources';
    public $table_name = 'eventresources';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    
    // Custom fields from EventResource11
    public $uid;
    public $argb;
    public $pattern;
    public $daily_calendar_id;
    public $event_creation_rule_id;
    public $last_post_date;
    public $last_post_user_name;
    public $hourly_calendar_id;
    public $external_data;
    public $rub103;
    public $rub75;
    public $open_forum;
    
    // Custom fields from EventResource12
    public $rub76;
    public $rub81;
    public $rub150;

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':
                return true;
        }
        return false;
    }
}