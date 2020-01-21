<?php
// created: 2020-01-21 15:50:05
$dictionary["Inv_mysettings"]["fields"]["inv_mysettings_accounts"] = array (
  'name' => 'inv_mysettings_accounts',
  'type' => 'link',
  'relationship' => 'inv_mysettings_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_INV_MYSETTINGS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'inv_mysettings_accountsaccounts_ida',
);
$dictionary["Inv_mysettings"]["fields"]["inv_mysettings_accounts_name"] = array (
  'name' => 'inv_mysettings_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INV_MYSETTINGS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'inv_mysettings_accountsaccounts_ida',
  'link' => 'inv_mysettings_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Inv_mysettings"]["fields"]["inv_mysettings_accountsaccounts_ida"] = array (
  'name' => 'inv_mysettings_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'inv_mysettings_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INV_MYSETTINGS_ACCOUNTS_FROM_INV_MYSETTINGS_TITLE',
);
