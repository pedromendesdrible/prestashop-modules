<?php
/* Smarty version 3.1.47, created on 2023-03-01 14:31:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\cms\_partials\sitemap-nested-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff61c73b3170_64441133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '031667770cf8ae9e79c93450f1fd02d845254930' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\cms\\_partials\\sitemap-nested-list.tpl',
      1 => 1677667061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cms/_partials/sitemap-nested-list.tpl' => 2,
  ),
),false)) {
function content_63ff61c73b3170_64441133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101145933563ff61c73a4be8_87400778', 'sitemap_item');
?>

<?php }
/* {block 'sitemap_item'} */
class Block_101145933563ff61c73a4be8_87400778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sitemap_item' => 
  array (
    0 => 'Block_101145933563ff61c73a4be8_87400778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul<?php if (!empty($_smarty_tpl->tpl_vars['is_nested']->value)) {?> class="nested"<?php }?>>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
      <li>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['children'])) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['link']->value['children'],'is_nested'=>true), 0, true);
?>
        <?php }?>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
/* {/block 'sitemap_item'} */
}
