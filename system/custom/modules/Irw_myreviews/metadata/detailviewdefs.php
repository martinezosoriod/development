<?php
$module_name = 'Irw_myreviews';
$_object_name = 'irw_myreviews';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'consecutive',
            'label' => 'LBL_CONSECUTIVE',
          ),
          1 => 
          array (
            'name' => 'status_id',
            'studio' => 'visible',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'source',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE',
          ),
          1 => 
          array (
            'name' => 'which_one',
            'label' => 'LBL_WHICH_ONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'process',
            'studio' => 'visible',
            'label' => 'LBL_PROCESS',
          ),
        ),
        3 => 
        array (
          0 => 'active_date',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        4 => 
        array (
          0 => 'category_id',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'link' => 'uploadfile',
              'id' => 'id',
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first',
            'studio' => 'visible',
            'label' => 'LBL_FIRST',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'second',
            'studio' => 'visible',
            'label' => 'LBL_SECOND',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'third',
            'studio' => 'visible',
            'label' => 'LBL_THIRD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fourth',
            'studio' => 'visible',
            'label' => 'LBL_FOURTH',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fifth',
            'studio' => 'visible',
            'label' => 'LBL_FIFTH',
          ),
        ),
      ),
      'lbl_detailview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'indicator',
            'studio' => 'visible',
            'label' => 'LBL_INDICATOR',
          ),
          1 => 
          array (
            'name' => 'date_closed',
            'label' => 'LBL_DATE_CLOSED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'closed_effectively',
            'studio' => 'visible',
            'label' => 'LBL_CLOSED_EFFECTIVELY',
          ),
        ),
      ),
    ),
  ),
);
;
?>
