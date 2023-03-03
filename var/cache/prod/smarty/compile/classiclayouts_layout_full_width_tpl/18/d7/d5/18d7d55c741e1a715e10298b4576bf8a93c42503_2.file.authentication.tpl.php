<?php
/* Smarty version 3.1.47, created on 2023-03-01 13:07:16
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63ff4e04ca89b5_61846661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d7d55c741e1a715e10298b4576bf8a93c42503' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\customer\\authentication.tpl',
      1 => 1677667059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff4e04ca89b5_61846661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112973141763ff4e04c8e6a5_10775167', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158483812063ff4e04c95480_57621430', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_112973141763ff4e04c8e6a5_10775167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_112973141763ff4e04c8e6a5_10775167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_124065749863ff4e04c9c969_42662614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_112191908963ff4e04c967a1_98480178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <hr/>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124065749863ff4e04c9c969_42662614', 'display_after_login_form', $this->tplIndex);
?>

      <div class="no-account">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_158483812063ff4e04c95480_57621430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_158483812063ff4e04c95480_57621430',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_112191908963ff4e04c967a1_98480178',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_124065749863ff4e04c9c969_42662614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112191908963ff4e04c967a1_98480178', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
