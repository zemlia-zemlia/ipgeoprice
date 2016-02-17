<?php

/**
 * Class ipgeopriceajaxModuleFrontController
 * формируем список городов и отдаем его по аякс
 *
 */
class ipgeopriceajaxModuleFrontController extends ModuleFrontController
{
    public function init() {
        parent::init();
    }

    public function initContent()
    {
//        parent::initContent();

        require_once(_PS_ROOT_DIR_.'/modules/ipgeoprice/ip.class.php');
        $ip = new  IpGeo;

        echo $ip->select2man();

       die();


    }
}


?>