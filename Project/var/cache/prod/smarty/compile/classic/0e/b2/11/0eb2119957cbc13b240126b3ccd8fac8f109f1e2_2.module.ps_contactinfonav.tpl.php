<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:20
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:56
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'module:ps_contactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc84206f3013_57492619',
=======
  'unifunc' => 'content_65dc7940e51e65_72956612',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfonav.tpl',
<<<<<<< HEAD
      1 => 1708932914,
=======
      1 => 1708932072,
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65dc84206f3013_57492619 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc7940e51e65_72956612 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\se_project\\Project\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div id="_desktop_contact_link">
  <div id="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['contact_infos']->value['phone'],' ',''), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>"<a href='tel:".$_prefixVariable1."'>",'[/1]'=>'</a>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
    <?php }?>
  </div>
</div>
<?php }
}
