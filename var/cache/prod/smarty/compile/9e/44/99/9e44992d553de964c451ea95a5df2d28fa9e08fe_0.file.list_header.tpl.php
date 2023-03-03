<?php
/* Smarty version 3.1.47, created on 2023-03-01 14:35:43
  from 'C:\xampp\htdocs\prestashop\admin0154awpo7\themes\default\template\controllers\attributes_groups\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff62bf42bfe4_89159818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e44992d553de964c451ea95a5df2d28fa9e08fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin0154awpo7\\themes\\default\\template\\controllers\\attributes_groups\\helpers\\list\\list_header.tpl',
      1 => 1677667033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff62bf42bfe4_89159818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196434906963ff62bf42b094_35911567', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_196434906963ff62bf42b094_35911567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_196434906963ff62bf42b094_35911567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
