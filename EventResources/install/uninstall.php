<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

// Drop the tables if the user chose to remove tables
if (isset($GLOBALS['sugar_config']['moduleInstaller']['packageScan']['remove_tables']) && 
    $GLOBALS['sugar_config']['moduleInstaller']['packageScan']['remove_tables']) {
    
    $db = DBManagerFactory::getInstance();
    
    // Drop the main table
    $db->query("DROP TABLE IF EXISTS eventresources");
    
    // Drop the relationship table
    $db->query("DROP TABLE IF EXISTS securitygroups_eventresources");
    
    echo "EventResources tables removed successfully.<br>";
}

// Rebuild the extension
require_once('modules/Administration/QuickRepairAndRebuild.php');
$repair = new RepairAndClear();
$repair->repairAndClearAll(array('clearAll'), array(), true, false);

echo "EventResources module uninstalled successfully.<br>";