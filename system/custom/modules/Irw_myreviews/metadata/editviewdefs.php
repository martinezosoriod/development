<?php
$module_name = 'Irw_myreviews';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
      'maxColumns' => '2',
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => '',
          1 => 'status_id',
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
          0 => 'document_name',
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
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 'category_id',
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
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
          1 => 
          array (
            'name' => 'second',
            'studio' => 'visible',
            'label' => 'LBL_SECOND',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'third',
            'studio' => 'visible',
            'label' => 'LBL_THIRD',
          ),
          1 => 
          array (
            'name' => 'fourth',
            'studio' => 'visible',
            'label' => 'LBL_FOURTH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fifth',
            'studio' => 'visible',
            'label' => 'LBL_FIFTH',
          ),
          1 => 
          array (
            'name' => 'root_cause_c',
            'studio' => 'visible',
            'label' => 'LBL_ROOT_CAUSE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
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
