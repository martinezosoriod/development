<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Users_logic{
	
	function setSessionView($bean, $event, $arguments){
	
		global $current_user;
		global $log;
	
		$_SESSION['duserId'] = $current_user->id;
		$log->fatal('User_id = ' . $current_user->id);
	
	}
      
  function save_Users($bean, $event, $arguments){

    global $app_list_strings;
    global $current_user;
    global $log;

    $log = $GLOBALS['log'];
    $log->fatal("Editing Users");

//     $bean->codigo = strtoupper($bean->codigo);
//     $bean->codigo = str_replace(' ', '', $bean->codigo);

//    $bean->name = $bean->codigo . ' - ' . $bean->cuenta;


  }


//   Function that runs after saving the data in the database
  function Users_saved($bean, $event, $arguments){

    global $app_list_strings;
    global $current_user;
    global $log;

    $log = $GLOBALS['log'];
    $log->fatal("Saved Users");
    
// 	$log->fatal('New user = ' . $bean->user_name);
    $bean->default_team = 1;
    	
// 	Add team Everyone
	$teamSql = "INSERT INTO team_memberships " .
    			"SELECT UUID( ) , NOW( ) , 0, 1, '{$bean->id}', {$bean->is_admin}";
// 	$log->fatal('Team = ' . $teamSql);
	$bean->db->query($teamSql);
    	
// 	Add Rol Default
	$rolSql = "INSERT INTO acl_roles_users " .
	"SELECT UUID( ) , 1, '{$bean->id}', NOW(), 0";
// 	$log->fatal('Rol = ' . $rolSql);
	$bean->db->query($rolSql);
    	   
  }


}

?>
