<?php

$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
	1, 'Save module', 'compania_mea/logic_hooks/module.php','module_logic', 'save_module'
);

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(
	1, 'module Saved', 'compania_mea/logic_hooks/module.php','module_logic', 'module_saved'
); 

?>
