<?php
/* Smarty version 3.1.47, created on 2023-03-01 12:10:19
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff40ab47f323_85942745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d42563aca1b2369ebc6fe8da823c533b7ff3754' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1677667059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff40ab47f323_85942745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49027070163ff40ab477da8_86048967', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_65441528463ff40ab478942_00038446 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_89876027063ff40ab478300_93332817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65441528463ff40ab478942_00038446', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_207717228363ff40ab47cf87_26554265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_47269503863ff40ab47d6d7_70052629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_167987713963ff40ab47caa2_79385037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207717228363ff40ab47cf87_26554265', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47269503863ff40ab47d6d7_70052629', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_109261168563ff40ab47e5c0_78560883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_45156172663ff40ab47e152_93218925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109261168563ff40ab47e5c0_78560883', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_49027070163ff40ab477da8_86048967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49027070163ff40ab477da8_86048967',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_89876027063ff40ab478300_93332817',
  ),
  'page_title' => 
  array (
    0 => 'Block_65441528463ff40ab478942_00038446',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_167987713963ff40ab47caa2_79385037',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_207717228363ff40ab47cf87_26554265',
  ),
  'page_content' => 
  array (
    0 => 'Block_47269503863ff40ab47d6d7_70052629',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_45156172663ff40ab47e152_93218925',
  ),
  'page_footer' => 
  array (
    0 => 'Block_109261168563ff40ab47e5c0_78560883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89876027063ff40ab478300_93332817', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167987713963ff40ab47caa2_79385037', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45156172663ff40ab47e152_93218925', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
