<?php /* Smarty version Smarty-3.1.19, created on 2016-02-16 21:32:42
         compiled from "/Users/adrey/Sites/www/test/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201181086356c3957a0760e1-10963473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309f4a805c1a26c42aaa0ab7fe12f59a258219e9' => 
    array (
      0 => '/Users/adrey/Sites/www/test/admin/themes/default/template/content.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201181086356c3957a0760e1-10963473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c3957a0a9d00_28350330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c3957a0a9d00_28350330')) {function content_56c3957a0a9d00_28350330($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
