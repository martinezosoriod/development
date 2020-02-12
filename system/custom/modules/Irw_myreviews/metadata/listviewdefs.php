<?php
$module_name = 'Irw_myreviews';
$OBJECT_NAME = 'IRW_MYREVIEWS';
$listViewDefs [$module_name] = 
array (
  'CONSECUTIVE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CONSECUTIVE',
    'width' => '10%',
    'default' => true,
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
  ),
  'CATEGORY_ID' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_CATEGORY',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => true,
    'sortable' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => true,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'SOURCE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SOURCE',
    'width' => '10%',
  ),
  'WHICH_ONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WHICH_ONE',
    'width' => '10%',
    'default' => false,
  ),
  'PROCESS' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PROCESS',
    'id' => 'IRW_PROCESOS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'FIFTH' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_FIFTH',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'FOURTH' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_FOURTH',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'THIRD' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_THIRD',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'SECOND' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_SECOND',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'FIRST' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_FIRST',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
