<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:39
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fde15de6_27741831',
=======
  'unifunc' => 'content_65cb99a7ecee89_97986781',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf61b3db0185e49a92923a71b6351e3c3d4a1574' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
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
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94fde15de6_27741831 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99a7ecee89_97986781 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-checkout-modal" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="js-modal-content"></div>
    </div>
  </div>
</div>

<div class="text-sm-center">
  <?php if ($_smarty_tpl->tpl_vars['tos_cms']->value != false) {?>
    <span class="d-block js-terms"><?php echo $_smarty_tpl->tpl_vars['tos_cms']->value;?>
</span>
  <?php }?>
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158108645165cb94fde12c68_46373220', 'copyright_link');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162876491965cb99a7ecc8b3_07260372', 'copyright_link');
>>>>>>> master2
?>

</div>
<?php }
/* {block 'copyright_link'} */
<<<<<<< HEAD
class Block_158108645165cb94fde12c68_46373220 extends Smarty_Internal_Block
=======
class Block_162876491965cb99a7ecc8b3_07260372 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'copyright_link' => 
  array (
<<<<<<< HEAD
    0 => 'Block_158108645165cb94fde12c68_46373220',
=======
    0 => 'Block_162876491965cb99a7ecc8b3_07260372',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'copyright_link'} */
}
