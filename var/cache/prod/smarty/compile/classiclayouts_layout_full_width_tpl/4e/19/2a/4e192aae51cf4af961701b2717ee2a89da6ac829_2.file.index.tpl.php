<?php
/* Smarty version 3.1.47, created on 2023-03-01 12:50:56
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff4a3007c2b2_82174736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e192aae51cf4af961701b2717ee2a89da6ac829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1677667059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff4a3007c2b2_82174736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48985973363ff4a30062fb8_68783070', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20720650963ff4a30063a42_14160034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_64027646863ff4a300651a0_86336485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_169942316063ff4a30064a26_49822257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64027646863ff4a300651a0_86336485', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_48985973363ff4a30062fb8_68783070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_48985973363ff4a30062fb8_68783070',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20720650963ff4a30063a42_14160034',
  ),
  'page_content' => 
  array (
    0 => 'Block_169942316063ff4a30064a26_49822257',
  ),
  'hook_home' => 
  array (
    0 => 'Block_64027646863ff4a300651a0_86336485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20720650963ff4a30063a42_14160034', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169942316063ff4a30064a26_49822257', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
