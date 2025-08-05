<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_strings;

$dashletMeta['EventResourcesDashlet'] = array(
    'module' => 'EventResources',
    'title' => translate('LBL_HOMEPAGE_TITLE', 'EventResources'),
    'description' => 'A customizable view into EventResources',
    'category' => 'Module Views'
);