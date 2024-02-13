<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:40
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:18
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\customer\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94f8c40961_52621336',
=======
  'unifunc' => 'content_65cb9992cfc3a1_86470129',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4078c68818930a33d1aeefe14b09fba82081ff1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\customer\\_partials\\address-form.tpl',
<<<<<<< HEAD
      1 => 1707837723,
=======
      1 => 1707824457,
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
function content_65cb94f8c40961_52621336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75440309365cb94f8c378d1_67659961', "address_form");
=======
function content_65cb9992cfc3a1_86470129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38099013365cb9992cf4d04_01768925', "address_form");
>>>>>>> master2
?>

<?php }
/* {block "address_form_url"} */
<<<<<<< HEAD
class Block_56146614665cb94f8c38c73_98885861 extends Smarty_Internal_Block
=======
class Block_16862163065cb9992cf5f78_44211155 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
    <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_field'} */
<<<<<<< HEAD
class Block_173896522065cb94f8c3c739_75614249 extends Smarty_Internal_Block
=======
class Block_124236107965cb9992cf9514_24966392 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
<<<<<<< HEAD
class Block_130743197165cb94f8c3b901_06925685 extends Smarty_Internal_Block
=======
class Block_158328315165cb9992cf8775_10820876 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173896522065cb94f8c3c739_75614249', 'form_field', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124236107965cb9992cf9514_24966392', 'form_field', $this->tplIndex);
>>>>>>> master2
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block "address_form_fields"} */
<<<<<<< HEAD
class Block_207470618765cb94f8c3b3c4_92573586 extends Smarty_Internal_Block
=======
class Block_90733489165cb9992cf82d6_79213025 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130743197165cb94f8c3b901_06925685', 'form_fields', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158328315165cb9992cf8775_10820876', 'form_fields', $this->tplIndex);
>>>>>>> master2
?>

        </section>
      <?php
}
}
/* {/block "address_form_fields"} */
/* {block 'form_buttons'} */
<<<<<<< HEAD
class Block_115009085265cb94f8c3f179_78907903 extends Smarty_Internal_Block
=======
class Block_13408795065cb9992cfb0b6_25147432 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button class="btn btn-primary form-control-submit float-xs-right" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block "address_form_footer"} */
<<<<<<< HEAD
class Block_142774724265cb94f8c3ea49_70263877 extends Smarty_Internal_Block
=======
class Block_191635469565cb9992cfac18_52705891 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115009085265cb94f8c3f179_78907903', 'form_buttons', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13408795065cb9992cfb0b6_25147432', 'form_buttons', $this->tplIndex);
>>>>>>> master2
?>

      </footer>
      <?php
}
}
/* {/block "address_form_footer"} */
/* {block "address_form"} */
<<<<<<< HEAD
class Block_75440309365cb94f8c378d1_67659961 extends Smarty_Internal_Block
=======
class Block_38099013365cb9992cf4d04_01768925 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'address_form' => 
  array (
<<<<<<< HEAD
    0 => 'Block_75440309365cb94f8c378d1_67659961',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_56146614665cb94f8c38c73_98885861',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_207470618765cb94f8c3b3c4_92573586',
  ),
  'form_fields' => 
  array (
    0 => 'Block_130743197165cb94f8c3b901_06925685',
  ),
  'form_field' => 
  array (
    0 => 'Block_173896522065cb94f8c3c739_75614249',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_142774724265cb94f8c3ea49_70263877',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_115009085265cb94f8c3f179_78907903',
=======
    0 => 'Block_38099013365cb9992cf4d04_01768925',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_16862163065cb9992cf5f78_44211155',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_90733489165cb9992cf82d6_79213025',
  ),
  'form_fields' => 
  array (
    0 => 'Block_158328315165cb9992cf8775_10820876',
  ),
  'form_field' => 
  array (
    0 => 'Block_124236107965cb9992cf9514_24966392',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_191635469565cb9992cfac18_52705891',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_13408795065cb9992cfb0b6_25147432',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56146614665cb94f8c38c73_98885861', "address_form_url", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16862163065cb9992cf5f78_44211155', "address_form_url", $this->tplIndex);
>>>>>>> master2
?>


      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207470618765cb94f8c3b3c4_92573586', "address_form_fields", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90733489165cb9992cf82d6_79213025', "address_form_fields", $this->tplIndex);
>>>>>>> master2
?>


      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142774724265cb94f8c3ea49_70263877', "address_form_footer", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191635469565cb9992cfac18_52705891', "address_form_footer", $this->tplIndex);
>>>>>>> master2
?>


    </form>
  </div>
<?php
}
}
/* {/block "address_form"} */
}
