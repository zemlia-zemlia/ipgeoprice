<?php /* Smarty version Smarty-3.1.19, created on 2016-02-16 21:32:43
         compiled from "/Users/adrey/Sites/www/test/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164391971056c3957bd37de4-72097110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdaae2cd2c5be47f18fc227e33f35e3c54eae390' => 
    array (
      0 => '/Users/adrey/Sites/www/test/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164391971056c3957bd37de4-72097110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c3957bd3e2e0_77184403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c3957bd3e2e0_77184403')) {function content_56c3957bd3e2e0_77184403($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
