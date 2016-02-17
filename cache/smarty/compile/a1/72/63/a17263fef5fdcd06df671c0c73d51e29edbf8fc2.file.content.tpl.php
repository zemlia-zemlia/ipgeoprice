<?php /* Smarty version Smarty-3.1.19, created on 2016-02-17 08:00:10
         compiled from "/Users/adrey/Sites/www/test/administrator/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68828369556c3fe5a43ad83-81888073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17263fef5fdcd06df671c0c73d51e29edbf8fc2' => 
    array (
      0 => '/Users/adrey/Sites/www/test/administrator/themes/default/template/content.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68828369556c3fe5a43ad83-81888073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c3fe5a4446f6_93169968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c3fe5a4446f6_93169968')) {function content_56c3fe5a4446f6_93169968($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
