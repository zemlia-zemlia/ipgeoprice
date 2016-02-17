<?php /* Smarty version Smarty-3.1.19, created on 2016-02-16 21:32:43
         compiled from "/Users/adrey/Sites/www/test/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113421692056c3957b4a1b72-51375560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '873af65a604dde6a04f247c52608c58ad7d09bb8' => 
    array (
      0 => '/Users/adrey/Sites/www/test/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113421692056c3957b4a1b72-51375560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c3957b4a6ea5_21498989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c3957b4a6ea5_21498989')) {function content_56c3957b4a6ea5_21498989($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
