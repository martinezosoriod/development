<?php

$hook_version = 1; 
$hook_array = Array(); 

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
	1, 'Save Irw_myreviews', 'compania_mea/logic_hooks/Irw_myreviews.php','Irw_myreviews_logic', 'save_Irw_myreviews'
);

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(
	1, 'Irw_myreviews Saved', 'compania_mea/logic_hooks/Irw_myreviews.php','Irw_myreviews_logic', 'Irw_myreviews_saved'
); 

?>
