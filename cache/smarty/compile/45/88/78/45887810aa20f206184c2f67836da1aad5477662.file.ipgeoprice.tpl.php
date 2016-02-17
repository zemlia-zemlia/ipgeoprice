<?php /* Smarty version Smarty-3.1.19, created on 2016-02-17 08:51:01
         compiled from "/Users/adrey/Sites/www/test/modules/ipgeoprice/ipgeoprice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87474460756c40a4577bf89-09418228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45887810aa20f206184c2f67836da1aad5477662' => 
    array (
      0 => '/Users/adrey/Sites/www/test/modules/ipgeoprice/ipgeoprice.tpl',
      1 => 1455688099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87474460756c40a4577bf89-09418228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c40a457cc001_36749629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c40a457cc001_36749629')) {function content_56c40a457cc001_36749629($_smarty_tpl) {?>
<div id="support_block">
    <div class="container">
        <ul class="row">
            <li class="col-xs-12 col-sm-4">
                <div class="out-sup"><em class="icon-support-service"><img src="http://magprofoto.ru/img/cms/Верхушка гео/1.jpg" width="50" height="50" /></em>
                    <div class="type-text">
                        <h4><?php echo $_smarty_tpl->tpl_vars['contact_info']->value['city'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact_info']->value['tel'];?>
</h4>
                        <p><a id="select_city" href="#" onclick="selectSity();"><span style="text-decoration: underline;">Выбрать ваш город</span></a></p>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-4">
                <div class="out-sup"><em class="icon-support-service"><img src="http://magprofoto.ru/img/cms/Верхушка гео/2.jpg" width="50" height="50" /></em>
                    <div class="type-text">
                        <h4><?php echo $_smarty_tpl->tpl_vars['contact_info']->value['adres'];?>
</h4><?php echo $_smarty_tpl->tpl_vars['contact_info']->value['map'];?>
</div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-4">
                <div class="out-sup"><em class="icon-support-service"><img src="http://magprofoto.ru/img/cms/Верхушка гео/3.jpg" width="50" height="50" /></em>
                    <div class="type-text"> <h4>Время работы</h4><p><?php echo $_smarty_tpl->tpl_vars['contact_info']->value['time'];?>
</p></div>
                </div>
            </li>
        </ul>
    </div>

</div>
<div id="city1"></div>
<input type="hidden" id="poddomen" value="<?php echo $_smarty_tpl->tpl_vars['contact_info']->value['poddomen'];?>
">











<?php }} ?>
