<?php
/* Smarty version 4.3.1, created on 2024-02-25 20:02:35
  from 'module:applicationformviewstemplatesfrontlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65db3a6ba52a23_61401869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cb6c41fa06b8b9a1ee22e196401f2a0597620b9' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontlogin.tpl',
      1 => 1708862373,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65db3a6ba52a23_61401869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190101743665db3a6ba40a95_69740940', 'page_title');
?>

  
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129584484165db3a6ba45af5_13744989', 'page_content');
?>

<?php }
/* {block 'page_title'} */
class Block_190101743665db3a6ba40a95_69740940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_190101743665db3a6ba40a95_69740940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <span class="sitemap-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'login page','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</span>
  <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_129584484165db3a6ba45af5_13744989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_129584484165db3a6ba45af5_13744989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h2>My test page content</h2>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['testtext']->value, ENT_QUOTES, 'UTF-8');?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teachers']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['first_name'], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'page_content'} */
}
