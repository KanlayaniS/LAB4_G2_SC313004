<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:33
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\customer\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fd974577_02534686',
=======
  'unifunc' => 'content_65cb99a17e7070_70622268',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '294e7257982f2e8fd2c21e536f3a0f33a6dc4e79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\customer\\_partials\\customer-form.tpl',
<<<<<<< HEAD
      1 => 1707837723,
=======
      1 => 1707828464,
>>>>>>> master2
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94fd974577_02534686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34297177565cb94fd96b3e0_73530671', 'customer_form');
=======
function content_65cb99a17e7070_70622268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135306719265cb99a17d9925_86949396', 'customer_form');
>>>>>>> master2
?>

<?php }
/* {block 'customer_form_errors'} */
<<<<<<< HEAD
class Block_94167978265cb94fd96baa6_29118877 extends Smarty_Internal_Block
=======
class Block_4512869365cb99a17da459_92918235 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
<<<<<<< HEAD
class Block_170605551265cb94fd96ceb5_97319292 extends Smarty_Internal_Block
=======
class Block_142020982865cb99a17dc7c9_20739633 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
<<<<<<< HEAD
class Block_31201032165cb94fd96eb40_58297206 extends Smarty_Internal_Block
=======
class Block_213412301065cb99a17df6f5_48040739 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === "password") {?>
            <div class="field-password-policy">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

            </div>
          <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php }?>
        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
<<<<<<< HEAD
class Block_118487781165cb94fd96dbb7_18135847 extends Smarty_Internal_Block
=======
class Block_83745568965cb99a17dde93_79285201 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31201032165cb94fd96eb40_58297206', "form_field", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213412301065cb99a17df6f5_48040739', "form_field", $this->tplIndex);
>>>>>>> master2
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
<<<<<<< HEAD
class Block_67019872065cb94fd972e96_72959449 extends Smarty_Internal_Block
=======
class Block_87608223265cb99a17e5602_25352131 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
<<<<<<< HEAD
class Block_37136306765cb94fd972775_34268916 extends Smarty_Internal_Block
=======
class Block_50572786065cb99a17e4bf5_70214297 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67019872065cb94fd972e96_72959449', "form_buttons", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87608223265cb99a17e5602_25352131', "form_buttons", $this->tplIndex);
>>>>>>> master2
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
<<<<<<< HEAD
class Block_34297177565cb94fd96b3e0_73530671 extends Smarty_Internal_Block
=======
class Block_135306719265cb99a17d9925_86949396 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'customer_form' => 
  array (
<<<<<<< HEAD
    0 => 'Block_34297177565cb94fd96b3e0_73530671',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_94167978265cb94fd96baa6_29118877',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_170605551265cb94fd96ceb5_97319292',
  ),
  'form_fields' => 
  array (
    0 => 'Block_118487781165cb94fd96dbb7_18135847',
  ),
  'form_field' => 
  array (
    0 => 'Block_31201032165cb94fd96eb40_58297206',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_37136306765cb94fd972775_34268916',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_67019872065cb94fd972e96_72959449',
=======
    0 => 'Block_135306719265cb99a17d9925_86949396',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_4512869365cb99a17da459_92918235',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_142020982865cb99a17dc7c9_20739633',
  ),
  'form_fields' => 
  array (
    0 => 'Block_83745568965cb99a17dde93_79285201',
  ),
  'form_field' => 
  array (
    0 => 'Block_213412301065cb99a17df6f5_48040739',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_50572786065cb99a17e4bf5_70214297',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_87608223265cb99a17e5602_25352131',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94167978265cb94fd96baa6_29118877', 'customer_form_errors', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4512869365cb99a17da459_92918235', 'customer_form_errors', $this->tplIndex);
>>>>>>> master2
?>


<form action="<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170605551265cb94fd96ceb5_97319292', 'customer_form_actionurl', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142020982865cb99a17dc7c9_20739633', 'customer_form_actionurl', $this->tplIndex);
>>>>>>> master2
?>
" id="customer-form" class="js-customer-form" method="post">
  <div>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118487781165cb94fd96dbb7_18135847', "form_fields", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83745568965cb99a17dde93_79285201', "form_fields", $this->tplIndex);
>>>>>>> master2
?>

  </div>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37136306765cb94fd972775_34268916', 'customer_form_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50572786065cb99a17e4bf5_70214297', 'customer_form_footer', $this->tplIndex);
>>>>>>> master2
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
