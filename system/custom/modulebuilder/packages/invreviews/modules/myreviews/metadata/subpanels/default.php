<?php
$module_name='Irw_myreviews';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'Irw_myreviews',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'object_image' => 
    array (
      'widget_class' => 'SubPanelIcon',
      'width' => '2%',
      'image2' => 'attachment',
      'image2_url_field' => 
      array (
        'id_field' => 'selected_revision_id',
        'filename_field' => 'selected_revision_filename',
      ),
      'attachment_image_only' => true,
      'default' => true,
    ),
    'category_id' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'default' => true,
      'vname' => 'LBL_SF_CATEGORY',
      'width' => '10%',
    ),
    'document_name' => 
    array (
      'name' => 'document_name',
      'vname' => 'LBL_LIST_DOCUMENT_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'active_date' => 
    array (
      'name' => 'active_date',
      'vname' => 'LBL_DOC_ACTIVE_DATE',
      'width' => '45%',
      'default' => true,
    ),
    'status' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_DOC_STATUS',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'Irw_myreviews',
      'width' => '5%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'Irw_myreviews',
      'width' => '5%',
      'default' => true,
    ),
  ),
);