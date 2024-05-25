<?php
/* Smarty version 4.5.2, created on 2024-05-25 11:22:31
  from '/Applications/MAMP/htdocs/minimal_project/manager/templates/default/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6651c9f7417137_38902506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669c3f401a738a2c4509e35ac3c8db9fe3723e7a' => 
    array (
      0 => '/Applications/MAMP/htdocs/minimal_project/manager/templates/default/error.tpl',
      1 => 1712733460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6651c9f7417137_38902506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/itsy_project/core/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="modx_error">
    <h2><i class="icon icon-exclamation-triangle"></i> An error occurred...</h2>

    <div class="error_container<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?> multiple<?php }?>">
        <p><?php echo $_smarty_tpl->tpl_vars['_e']->value['message'];?>
</p>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?>
        <p>&nbsp;</p>
        <p><strong>Errors:</strong></p>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_e']->value['errors'], 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <li><i class="icon icon-angle-right"></i> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php }?>
    </div>
</div><?php }
}
