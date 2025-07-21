<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('EventResources', 'edit', true)) {
    $module_menu[] = array(
        'index.php?module=EventResources&action=EditView&return_module=EventResources&return_action=DetailView',
        $mod_strings['LNK_NEW_RECORD'],
        'Create',
        'EventResources'
    );
}
if (ACLController::checkAccess('EventResources', 'list', true)) {
    $module_menu[] = array(
        'index.php?module=EventResources&action=index&return_module=EventResources&return_action=DetailView',
        $mod_strings['LNK_LIST'],
        'List',
        'EventResources'
    );
}
if (ACLController::checkAccess('EventResources', 'import', true)) {
    $module_menu[] = array(
        'index.php?module=Import&action=Step1&import_module=EventResources&return_module=EventResources&return_action=index',
        $mod_strings['LNK_IMPORT_EVENTRESOURCES'],
        'Import',
        'EventResources'
    );
}