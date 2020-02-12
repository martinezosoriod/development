<?php
// created: 2020-02-12 16:02:08
$dictionary["irw_myreviews_irw_indicators_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'irw_myreviews_irw_indicators_1' => 
    array (
      'lhs_module' => 'Irw_myreviews',
      'lhs_table' => 'irw_myreviews',
      'lhs_key' => 'id',
      'rhs_module' => 'Irw_indicators',
      'rhs_table' => 'irw_indicators',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'irw_myreviews_irw_indicators_1_c',
      'join_key_lhs' => 'irw_myreviews_irw_indicators_1irw_myreviews_ida',
      'join_key_rhs' => 'irw_myreviews_irw_indicators_1irw_indicators_idb',
    ),
  ),
  'table' => 'irw_myreviews_irw_indicators_1_c',
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
      'name' => 'irw_myreviews_irw_indicators_1irw_myreviews_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'irw_myreviews_irw_indicators_1irw_indicators_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'irw_myreviews_irw_indicators_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'irw_myreviews_irw_indicators_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'irw_myreviews_irw_indicators_1irw_myreviews_ida',
        1 => 'irw_myreviews_irw_indicators_1irw_indicators_idb',
      ),
    ),
  ),
);