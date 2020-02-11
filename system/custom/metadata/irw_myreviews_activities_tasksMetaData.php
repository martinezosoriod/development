<?php
// created: 2020-02-11 12:05:31
$dictionary["irw_myreviews_activities_tasks"] = array (
  'relationships' => 
  array (
    'irw_myreviews_activities_tasks' => 
    array (
      'lhs_module' => 'Irw_myreviews',
      'lhs_table' => 'irw_myreviews',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Irw_myreviews',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);