<?php /*%%SmartyHeaderCode:178812334656c3fe16cd1022-74844423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49617c96113526543c27c35a8178c2c9062ed773' => 
    array (
      0 => '/Users/adrey/Sites/www/test/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1452073828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178812334656c3fe16cd1022-74844423',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c3fe16d6ecd5_46328614',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c3fe16d6ecd5_46328614')) {function content_56c3fe16d6ecd5_46328614($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://test.local/index.php?controller=my-account" title="Управление моей учетной записью" rel="nofollow">Моя учетная запись</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://test.local/index.php?controller=history" title="Мои заказы" rel="nofollow">Мои заказы</a></li>
						<li><a href="http://test.local/index.php?controller=order-slip" title="Мои платёжные квитанции" rel="nofollow">Мои платёжные квитанции</a></li>
			<li><a href="http://test.local/index.php?controller=addresses" title="Мои адреса" rel="nofollow">Мои адреса</a></li>
			<li><a href="http://test.local/index.php?controller=identity" title="Управление моими персональными данными" rel="nofollow">Моя личная информация</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
