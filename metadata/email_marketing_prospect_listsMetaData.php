<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
$dictionary['email_marketing_prospect_lists'] = array ( 

	'table' => 'email_marketing_prospect_lists',

	'fields' => array (
		array (
			'name' => 'id',
			'type' => 'varchar',
			'len' => '36',
		),
		array (
			'name' => 'prospect_list_id',
			'type' => 'varchar',
			'len' => '36',
		),
		array (
			'name' => 'email_marketing_id',
			'type' => 'varchar',
			'len' => '36',
		),
        array (
			'name' => 'date_modified',
			'type' => 'datetime'
		),
		array (
			'name' => 'deleted',
			'type' => 'bool',
			'len' => '1',
			'default' => '0'
		),
	),
	'indices' => array (
		array (
			'name' => 'email_mp_listspk',
			'type' => 'primary',
			'fields' => array ( 'id' )
		),
		array (
			'name' => 'email_mp_prospects',
			'type' => 'alternate_key',
			'fields' => array (	'email_marketing_id',
								'prospect_list_id'
						)
		),
	),
	
 	'relationships' => array (
		'email_marketing_prospect_lists' => array(
											'lhs_module'=> 'EmailMarketing', 
											'lhs_table'=> 'email_marketing', 
											'lhs_key' => 'id',
											'rhs_module'=> 'ProspectLists', 
											'rhs_table'=> 'prospect_lists', 
											'rhs_key' => 'id',
											'relationship_type'=>'many-to-many',
											'join_table'=> 'email_marketing_prospect_lists', 
											'join_key_lhs'=>'email_marketing_id',
											'join_key_rhs'=>'prospect_list_id', 
		),
	)
)
?>