<?php
/* Smarty version 3.1.47, created on 2023-03-01 14:27:57
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\cms\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff60ed1336c8_24067081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20149f7fd6cfe3e43778f62a9ce1636d56ed8f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\cms\\page.tpl',
      1 => 1677667060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff60ed1336c8_24067081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118117838663ff60ed10cc96_16504541', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81937149363ff60ed118d99_38947953', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_118117838663ff60ed10cc96_16504541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_118117838663ff60ed10cc96_16504541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_158168090663ff60ed119f58_17733582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_48576088063ff60ed11ca15_94035355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_47481549663ff60ed12db92_75166199 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_81937149363ff60ed118d99_38947953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_81937149363ff60ed118d99_38947953',
  ),
  'cms_content' => 
  array (
    0 => 'Block_158168090663ff60ed119f58_17733582',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_48576088063ff60ed11ca15_94035355',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_47481549663ff60ed12db92_75166199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158168090663ff60ed119f58_17733582', 'cms_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48576088063ff60ed11ca15_94035355', 'hook_cms_dispute_information', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47481549663ff60ed12db92_75166199', 'hook_cms_print_button', $this->tplIndex);
?>


  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
