<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class PIS_Reviews_logic{
      
  function save_PIS_Reviews($bean, $event, $arguments){

    global $app_list_strings;

    $log = $GLOBALS['log'];
    $log->fatal("Editing PIS_Reviews");

//     $bean->codigo = strtoupper($bean->codigo);
//     $bean->codigo = str_replace(' ', '', $bean->codigo);
//     $bean->description = $bean->detail;
//     $bean->name = $bean->codigo . ' - ' . $bean->cuenta;

     $bean->pis_supplier_id = $bean->pis_suppli8969ppliers_ida;
//     $split = split("-", $bean->date_calculation);
//     $bean->day_calculation = $split[2];
//     $bean->month_calculation = $split[1];
//     $bean->year_calculation = $split[0];

//     //     Reference values stored in the measurement
//     require_once('modu-les/PREF_MODUL/PREF_MODUL.php');
//     $PREF_MODUL = new PREF_MODUL();
//     $PREF_MODU = $PREF_MODUL->retrieve($bean->ids_global_id);
    
//     $bean->critical = $PREF_MODU->critical;
//     $bean->acceptable = $PREF_MODU->acceptable;
//     $bean->ideal = $PREF_MODU->ideal;
    
  }


//   Function that runs after saving the data in the database
  function PIS_Reviews_saved($bean, $event, $arguments){

    global $app_list_strings;

    $log = $GLOBALS['log'];
    $log->fatal("Saved PIS_Reviews");

// // 	Reference values stored in the measurement
//     require_once('PIS_Reviewss/PREF_MODUL/PREF_MODUL.php');
//     $PREF_MODUL = new PREF_MODUL();
//     $PREF_MODU = $PREF_MODUL->retrieve($bean->ids_global_id);
    
//     $codigo = $PREF_MODU->number;
//     $query = "UPDATE PIS_Reviews SET identifier = CONCAT('{$codigo}', '-',LPAD(number, 2, '0')) WHERE id = '{$bean->id}' ";
// // 	$log->fatal($query);
//     $bean->db->query($query);

// // 	Update dependencies
//     $query =
//     "UPDATE PIS_Reviews ".
//     "SET field =  '{$bean->calculation}', measurement =  '{$bean->measurement}', ".
//     "periodicity =  '{$bean->periodicity}', perspective =  '{$bean->perspective}', ".
//     "trend =  '{$bean->trend}' ".
//     "WHERE ids_global_id = '{$bean->id}';";
// //     $log->fatal('SQL: '.$query);
//     $bean->db->query($query);

//     //     Delete unnecessary relationship in the database.
//     $deleteSql =
//     "DELETE FROM table_relationship WHERE field = '{$bean->id}' AND deleted = 1";
//     //     $log->fatal($deleteSql);
//     $bean->db->query($deleteSql);
    
  }


}

?>
