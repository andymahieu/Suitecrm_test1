<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

// Execute the SQL script to create the tables
$sqlFile = 'modules/EventResources/install/install.sql';
if (file_exists($sqlFile)) {
    $sql = file_get_contents($sqlFile);
    $db = DBManagerFactory::getInstance();
    
    // Split the SQL file into individual statements
    $sqlStatements = explode(';', $sql);
    foreach ($sqlStatements as $statement) {
        $statement = trim($statement);
        if (!empty($statement)) {
            $db->query($statement);
        }
    }
    
    echo "EventResources tables created successfully.<br>";
} else {
    echo "Error: SQL file not found at $sqlFile<br>";
}

// Add the module to the navigation menu
$admin = new Administration();
$admin->saveSetting('MySettings', 'moduleVisibility', '', 'base64', serialize(array('EventResources' => 'visible')));

// Rebuild the extension
require_once('modules/Administration/QuickRepairAndRebuild.php');
$repair = new RepairAndClear();
$repair->repairAndClearAll(array('clearAll'), array('EventResources'), true, false);

echo "EventResources module installed successfully.<br>";