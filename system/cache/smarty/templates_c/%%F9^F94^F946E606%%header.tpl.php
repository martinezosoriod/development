<?php /* Smarty version 2.6.31, created on 2019-11-18 21:37:34
         compiled from themes/SuiteP/tpls/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'themes/SuiteP/tpls/header.tpl', 69, false),)), $this); ?>
<?php if (file_exists ( 'custom/themes/SuiteP/tpls/_head.tpl' )): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "custom/themes/SuiteP/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/SuiteP/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<body onMouseOut="closeMenus();">

<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
    <div id="ajaxHeader">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/SuiteP/tpls/_headerModuleList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>
<?php echo '
    <iframe id=\'ajaxUI-history-iframe\' src=\'index.php?entryPoint=getImage&imageName=blank.png\' title=\'empty\'
            style=\'display:none\'></iframe>
<input id=\'ajaxUI-history-field\' type=\'hidden\'>
<script type=\'text/javascript\'>
    if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded) {
        YAHOO.util.History.register(\'ajaxUILoc\', "", SUGAR.ajaxUI.go);
        '; ?>
<?php if ($_REQUEST['module'] != 'ModuleBuilder'): ?>        YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
        <?php endif; ?><?php echo '
    }
</script>
'; ?>

<!-- Start of page content -->
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<div id="bootstrap-container"
     class="<?php if ($this->_tpl_vars['THEME_CONFIG']['display_sidebar'] && ((is_array($_tmp=@$_COOKIE['sidebartoggle'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) != 'collapsed'): ?>col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2<?php endif; ?> main bootstrap-container">
    <div id="content" class="content">
        <div id="pagecontent" class=".pagecontent">
<?php endif; ?>