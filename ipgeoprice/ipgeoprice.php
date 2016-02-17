<?php
/**
 *
 */

if (!defined('_PS_VERSION_'))
    exit;

class IpGeoPrice extends Module
{
    public function __construct()
    {
        $this->name = 'ipgeoprice'; //задаём имя нашего модуля
        $this->tab = 'others'; //задаём категорию модуля, в которой он будет отображаться в админке
        // например, 'front_office_features' - поместит модуль в раздел 'Модули для фронт-офиса'
        $this->version = '1.0.00'; //версия модуля, например "2.0b", "3.04 beta 5" или "0.67 (для разработчика)"
        $this->author = 'Andrey'; //имя автора
        $this->need_instance = 0; //открыть страницу настроек модуля сразу после установки или нет
        // если установить параметр = 1, то установка модуля может выполняться дольше
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); //совместимость модуля с версией cms
        $this->bootstrap = true; //использовать инструмент bootstrap для построения элементов модуля, рекомендую установить true

        parent::__construct();

        $this->displayName = $this->l('Геотаргетинг'); //отображаемое имя модуля
        $this->description = $this->l('Определяет по айпи местоположение посетителя и выводит цены соответственно'); //отображаемое описание модуля

        $this->confirmUninstall = $this->l('Вы действительно хотите удалить модуль?'); //сообщение, при удалении модуля

        if (!Configuration::get('IPGEOPRICE'))
            $this->warning = $this->l('Упс, произошла какая-то ошибка!'); //проверка на ошибки во время установки
    }

    public function install()
    {

        $query = file_get_contents('ipgeoprice.sql');

        if (Shop::isFeatureActive()) //если несколько магазинов, то включаем модуль для всех
            Shop::setContext(Shop::CONTEXT_ALL);

//установка модуля и привязка его к необходимым хукам, в которых он будет использован, создание конфигурации для модуля в базе данных
        if (!parent::install() || //установлен ли родительский класс
            !$this->registerHook('displayBanner') || //модуль прикрепился к хуку 'displayBanner'
            !$this->registerHook('header') ||

             


            !Configuration::updateValue('IPGEOPRICE', 'my value') //создаём конфигурацию 'IPGEOPRICE' со значением 'my value'
        )
            return false;

        return true;
    }

//удаление модуля
    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('IPGEOPRICE')
        )
            return false;

        return true;
    }

    public function hookHeader()
    {
        $this->context->controller->addCSS(($this->_path) . 'ipgeoprice.css', 'all');
        $this->context->controller->addJS(($this->_path) . 'ipgeoprice.js');
    }

    /**
     * @throws Тут мы проверим, если это аякс запрос, то выведем только список городов, если это
     * без аякса, то выведем город по айпи или выбраннгый город
     */
    public function hookDisplayBanner()
    {
        require_once 'ip.class.php';

        $ip = new  IpGeo;

        $city2cookie = $this->context->cookie->ipgeoprice;// получаем из куки айди города
        $select2man = Tools::getValue('ipgeopriceselect2man'); // смотрим, нет ли get параметра
        if ($select2man && !is_numeric($select2man)) {$id_adress= Db::getInstance()->getRow("SELECT id FROM `adress` WHERE poddomen ='".$select2man."'");
        $select2man = $id_adress['id'];}


        if ($select2man && $select2man != ""){
            $this->context->cookie->__set('ipgeoprice', $select2man); // то пишем в куки город
            $contact_info = $ip->select2cookie($select2man);
        }
        elseif ($city2cookie && $city2cookie != 0) {
            $contact_info = $ip->select2cookie($city2cookie);
        }
        else  {$contact_info = $ip->select2Ip();
            $this->context->cookie->__set('ipgeoprice', $contact_info['id']);
        }






        $this->smarty->assign( // назначаем переменную смарти
            'contact_info', $contact_info
        );

        return $this->display(__FILE__, 'ipgeoprice.tpl'); // подгружаем файл шаблона.


    }


}

?>