<?php /* Smarty version Smarty-3.1.19, created on 2016-02-17 08:22:28
         compiled from "/Users/adrey/Sites/www/test/administrator/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138867055756c40394dcb7d0-60475333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00eb3ad5d8c31855724b786ade546adad21a1b1' => 
    array (
      0 => '/Users/adrey/Sites/www/test/administrator/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138867055756c40394dcb7d0-60475333',
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
  'unifunc' => 'content_56c40394e0dd59_97206681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c40394e0dd59_97206681')) {function content_56c40394e0dd59_97206681($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
