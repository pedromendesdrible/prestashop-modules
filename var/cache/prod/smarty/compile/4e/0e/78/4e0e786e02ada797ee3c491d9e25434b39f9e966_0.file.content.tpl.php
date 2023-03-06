<?php
/* Smarty version 3.1.47, created on 2023-03-06 15:05:21
  from 'C:\xampp\htdocs\prestashop\admin0154awpo7\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64060131a67144_16459199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e0e786e02ada797ee3c491d9e25434b39f9e966' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin0154awpo7\\themes\\default\\template\\content.tpl',
      1 => 1677667032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64060131a67144_16459199 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
