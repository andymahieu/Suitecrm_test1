<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/EventResources/EventResources.php');

class EventResourcesDashlet extends DashletGeneric {
    function __construct($id, $def = null) {
        global $current_user, $app_strings;
        require('modules/EventResources/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'EventResources');
        }

        $this->searchFields = $dashletData['EventResourcesDashlet']['searchFields'];
        $this->columns = $dashletData['EventResourcesDashlet']['columns'];

        $this->seedBean = new EventResources();
    }
}