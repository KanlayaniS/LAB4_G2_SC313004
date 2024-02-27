<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:20
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:56
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc84205b4fd1_76957710',
=======
  'unifunc' => 'content_65dc7940d0b7b1_64303949',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61e5267292686545d663a079517528ba97fe86a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\_partials\\header.tpl',
<<<<<<< HEAD
      1 => 1708932914,
=======
      1 => 1708932072,
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65dc84205b4fd1_76957710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54161436665dc84205afd26_18093375', 'header_banner');
=======
function content_65dc7940d0b7b1_64303949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209619177165dc7940d04e11_34673670', 'header_banner');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45501539665dc84205b08c4_36173203', 'header_nav');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147484118265dc7940d05d32_14764715', 'header_nav');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59431588165dc84205b1495_84615399', 'header_top');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110607825965dc7940d069a3_52622203', 'header_top');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

<?php }
/* {block 'header_banner'} */
<<<<<<< HEAD
class Block_54161436665dc84205afd26_18093375 extends Smarty_Internal_Block
=======
class Block_209619177165dc7940d04e11_34673670 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'header_banner' => 
  array (
<<<<<<< HEAD
    0 => 'Block_54161436665dc84205afd26_18093375',
=======
    0 => 'Block_209619177165dc7940d04e11_34673670',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
<<<<<<< HEAD
class Block_45501539665dc84205b08c4_36173203 extends Smarty_Internal_Block
=======
class Block_147484118265dc7940d05d32_14764715 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'header_nav' => 
  array (
<<<<<<< HEAD
    0 => 'Block_45501539665dc84205b08c4_36173203',
=======
    0 => 'Block_147484118265dc7940d05d32_14764715',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>
          <div class="col-md-7 right-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
<<<<<<< HEAD
class Block_59431588165dc84205b1495_84615399 extends Smarty_Internal_Block
=======
class Block_110607825965dc7940d069a3_52622203 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'header_top' => 
  array (
<<<<<<< HEAD
    0 => 'Block_59431588165dc84205b1495_84615399',
=======
    0 => 'Block_110607825965dc7940d069a3_52622203',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
        <div class="header-top-right col-md-10 col-sm-12 position-static">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
