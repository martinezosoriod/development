<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
 $hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['before_save'] = Array();
//Add by invreate
$hook_array['before_save'][] = Array(1, 'Save Accounts', 'compania_mea/logic_hooks/Accounts.php','Accounts_logic', 'save_Accounts');
//End add by invreate
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateGeocodeInfo');
$hook_array['after_save'] = Array();
//Add by invreate
$hook_array['after_save'][] = Array(1, 'Accounts Saved', 'compania_mea/logic_hooks/Accounts.php','Accounts_logic', 'Accounts_saved');
//End add by invreate
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo');
$hook_array['after_save'][] = Array(78, 'updateRelatedProjectGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedProjectGeocodeInfo');
$hook_array['after_save'][] = Array(79, 'updateRelatedOpportunitiesGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedOpportunitiesGeocodeInfo');
$hook_array['after_save'][] = Array(80, 'updateRelatedCasesGeocodeInfo', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'updateRelatedCasesGeocodeInfo');
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(77, 'addRelationship', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'addRelationship');
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(77, 'deleteRelationship', 'modules/Accounts/AccountsJjwg_MapsLogicHook.php','AccountsJjwg_MapsLogicHook', 'deleteRelationship');



?>
