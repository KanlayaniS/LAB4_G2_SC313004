<?php
/* Smarty version 4.3.4, created on 2024-02-19 11:42:53
  from 'module:ps_socialfollowps_socialfollow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d330ad89b2b5_30145347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollowps_socialfollow.tpl',
      1 => 1708076413,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d330ad89b2b5_30145347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /var/www/html/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106018361965d330ad8917b2_24241319', 'block_social');
?>

<!-- end /var/www/html/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }
/* {block 'block_social'} */
class Block_106018361965d330ad8917b2_24241319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_106018361965d330ad8917b2_24241319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
        <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
