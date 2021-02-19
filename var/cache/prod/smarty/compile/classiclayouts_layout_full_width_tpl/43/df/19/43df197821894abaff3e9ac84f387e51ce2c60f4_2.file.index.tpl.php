<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-18 12:46:46
  from '/home1/lamppp/htdocs/new_prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602e145e272bc5_75595879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43df197821894abaff3e9ac84f387e51ce2c60f4' => 
    array (
      0 => '/home1/lamppp/htdocs/new_prestashop/themes/classic/templates/index.tpl',
      1 => 1613631631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602e145e272bc5_75595879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436817099602e145e270495_65322976', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1301781632602e145e270ac3_44320817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1669831669602e145e271858_55325700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_291138007602e145e271357_10433550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1669831669602e145e271858_55325700', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1436817099602e145e270495_65322976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1436817099602e145e270495_65322976',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1301781632602e145e270ac3_44320817',
  ),
  'page_content' => 
  array (
    0 => 'Block_291138007602e145e271357_10433550',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1669831669602e145e271858_55325700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1301781632602e145e270ac3_44320817', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291138007602e145e271357_10433550', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
