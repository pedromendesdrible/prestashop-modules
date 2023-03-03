<?php
/* Smarty version 3.1.47, created on 2023-03-01 14:35:43
  from 'C:\xampp\htdocs\prestashop\admin0154awpo7\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff62bf498532_00778177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e0a19122fd567e466376b25c845a9436819ce69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin0154awpo7\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1677667041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff62bf498532_00778177 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
