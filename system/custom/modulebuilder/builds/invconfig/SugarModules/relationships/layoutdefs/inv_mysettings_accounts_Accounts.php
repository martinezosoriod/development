<?php
 // created: 2020-01-21 15:50:05
$layout_defs["Accounts"]["subpanel_setup"]['inv_mysettings_accounts'] = array (
  'order' => 100,
  'module' => 'Inv_mysettings',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_INV_MYSETTINGS_ACCOUNTS_FROM_INV_MYSETTINGS_TITLE',
  'get_subpanel_data' => 'inv_mysettings_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
