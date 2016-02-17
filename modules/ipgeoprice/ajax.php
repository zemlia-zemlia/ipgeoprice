<?php
//require_once('/config/config.inc.php');
//require_once('/init.php');
//
//require_once('/modules/ipgeoprice/ip.class.php');
//       $ip = new  IpGeo;
//     echo  $ip->select2man();
//
//






class ipgeopriceajaxModuleFrontController extends ModuleFrontController
{
    public function init() {
        parent::init();
    }

    public function initContent()
    {
        parent::initContent();

        require_once(dirname(__FILE__).'/../../../ip.class.php');
        $ip = new  IpGeo;

//        p($ip->select2man());

        $this->smarty->assig(

            'city', $ip->select2man()
        );
 $this->smartyOutputContent($this->getTemplatePath() . 'ajax.tpl');
       die();


    }
}






//echo "test";
//include_once('/var/www/abris/data/www/idevshop.ru/modules/ipgeoprice/ipgeoprice.php');
//include_once('/var/www/abris/data/www/idevshop.ru/modules/ipgeoprice/ip.class.php');
//$ip = new IpGeo();
//$html = $ip->select2man();
//echo $html;
//p($html);

//if (isset($_POST['type']) AND $_POST['type'] == 'select')
//{
//    include_once(dirname(__FILE__).'/ipgeoprice.php');
//    $context = Context::getContext();
//    $blockCart = new BlockCart();
//    echo $blockCart->hookAjaxCall(array('cookie' => $context->cookie, 'cart' => $context->cart));
//
////    select2man();
//}
//
//if (isset($_POST['type']) AND $_POST['type'] =='man' AND isset($_POST['cookie']) ) {
//
//    $cookie = $_POST['cookie'];
//    // echo $cookie;
//    settype($cookie, 'integer');
//    // echo gettype($cookie);
//    // echo $cookie;
//    if ($cookie)   select2cookie($cookie);
//    else select2Ip();
//
//}


//if (isset($_POST['type']) AND $_POST['type'] == 'cityfind' AND isset($_POST['val'])){
//
//    cityfind($_POST['val']);
//
//
//}









?>