<?php
/* Smarty version 4.3.1, created on 2024-02-13 13:43:27
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb0f8f2b73b7_23055211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b86a97e13da9172dce579d2d424197ac2469fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\page.tpl',
      1 => 1707644417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb0f8f2b73b7_23055211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186849127665cb0f8f2ae6a8_85704053', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_171607028265cb0f8f2af3f1_07215751 extends Smarty_Internal_Block
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
class Block_543669065cb0f8f2aec74_30895396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171607028265cb0f8f2af3f1_07215751', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_47513955165cb0f8f2b3da2_53898605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_121283007565cb0f8f2b4805_06645726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_195684725565cb0f8f2b36e7_04645438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47513955165cb0f8f2b3da2_53898605', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121283007565cb0f8f2b4805_06645726', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_161258925165cb0f8f2b5e58_72017848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_162273377265cb0f8f2b58c3_05516577 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161258925165cb0f8f2b5e58_72017848', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_186849127665cb0f8f2ae6a8_85704053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_186849127665cb0f8f2ae6a8_85704053',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_543669065cb0f8f2aec74_30895396',
  ),
  'page_title' => 
  array (
    0 => 'Block_171607028265cb0f8f2af3f1_07215751',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_195684725565cb0f8f2b36e7_04645438',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_47513955165cb0f8f2b3da2_53898605',
  ),
  'page_content' => 
  array (
    0 => 'Block_121283007565cb0f8f2b4805_06645726',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_162273377265cb0f8f2b58c3_05516577',
  ),
  'page_footer' => 
  array (
    0 => 'Block_161258925165cb0f8f2b5e58_72017848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543669065cb0f8f2aec74_30895396', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195684725565cb0f8f2b36e7_04645438', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162273377265cb0f8f2b58c3_05516577', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
