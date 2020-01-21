<?php
// created: 2020-01-21 15:50:05
$dictionary["inv_mysettings_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'inv_mysettings_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Inv_mysettings',
      'rhs_table' => 'inv_mysettings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'inv_mysettings_accounts_c',
      'join_key_lhs' => 'inv_mysettings_accountsaccounts_ida',
      'join_key_rhs' => 'inv_mysettings_accountsinv_mysettings_idb',
    ),
  ),
  'table' => 'inv_mysettings_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'inv_mysettings_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'inv_mysettings_accountsinv_mysettings_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'inv_mysettings_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'inv_mysettings_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'inv_mysettings_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'inv_mysettings_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'inv_mysettings_accountsinv_mysettings_idb',
      ),
    ),
  ),
);