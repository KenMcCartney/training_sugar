<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

require_once 'modules/pmse_Project/clients/base/api/wrappers/PMSECrmDataWrapper.php';

function getTargetsModules()
{
    // Prepare the result
    $modules = array();

    // Get the module list from the data wrapper
    $wrapper = new PMSECrmDataWrapper();
    $list = $wrapper->retrieveModules();

    // If there are results, use them to build the list
    if (is_array($list)) {
        foreach ($list as $module) {
            $modules[$module['value']] = $module['text'];
        }
    }

    // Filter the module list through ACLs
    $modules = SugarACL::filterModuleList($modules, 'access', true);

    // Return the result
    return $modules;
}
