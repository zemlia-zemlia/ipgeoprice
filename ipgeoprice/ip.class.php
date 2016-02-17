<?php

/**
 * undocumented class
 *
 * @package default
 * @author
 **/
class  IpGeo
{


    private function get_city_info($id, $query = false) // получаем город по айди ipgeobase
    {


        if (!$query) $query = "SELECT * FROM `adress` WHERE  id=" . $id;

        $cityfull = Db::getInstance()->getRow($query);

        if (!$cityfull) $cityfull = Db::getInstance()->getRow("SELECT * FROM `adress` WHERE  id= 49");

        $map = "";
        if (isset($cityfull['maps']) AND $cityfull['maps'] != "") $map = '<p><a href="' . $cityfull['maps'] . '"><span style="text-decoration: underline;">Схема проезда</span></a></p>';
        if (!isset($cityfull['poddomen']) || $cityfull['poddomen'] == "") $cityfull['poddomen'] = "moskva";

        $contact_info = array(
            'city' => $cityfull['city'],
            'tel' => $cityfull['tel'],
            'adres' => $cityfull['adres'],
            'map' => $map,
            'time' => $cityfull['time'],
            'id' => $cityfull['id'],
            'poddomen' => $cityfull['poddomen']


        );


        return $contact_info;
    }


    private function getRealRemoteIP() // получаем айпи клиента
    {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        elseif (isset($_SERVER['HTTP_X_REAL_IP']) && !empty($_SERVER['HTTP_X_REAL_IP']))
            return $_SERVER['HTTP_X_REAL_IP'];
        elseif (isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']))
            return $_SERVER['REMOTE_ADDR'];
        elseif (isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
        else
            return '0.0.0.0';


    }


    public function select2Ip()
    {
//получаем из базы название страны и города
        $ip = $this->getRealRemoteIP();


        $iplong = sprintf("%u", ip2long($ip));

        $cond = "'" . $iplong . "'>=`ipfrom` AND '" . $iplong . "'<=`ipto`";

        $query = "SELECT * FROM `adress` WHERE city = (SELECT name FROM `ips_cities` WHERE id = (SELECT citycode FROM `ips` WHERE " . $cond . "))";


        return $this->get_city_info(0, $query);


    }


    public function select2man()
    {
        function cmp($a, $b)
        {
            return strcmp($a['city'], $b['city']);
        }

        $query = "SELECT * FROM  `adress`";

        $res = Db::getInstance()->ExecuteS($query);

        if ($res) {
            $arr = $res;
//
            usort($arr, "cmp");// sort town by alphbet
            $letter = '';
            mb_internal_encoding("UTF-8");
            $html = "";
            foreach ($arr as $towns) {
                $nowletter = mb_substr($towns['city'], 0, 1);
                if ($nowletter != $letter) {
                    if ($letter != '') {
                        $html .= '<br />';
                    }
                    if ($letter != '') $html .= '<p class="boldletter">' . $nowletter . '</p>'; else $html .= '<p class="boldletter first">' . $nowletter . '</p>';
                    $letter = $nowletter;
                }
                $html .= '<a href="?ipgeopriceselect2man=' . $towns['id'] . '" data-adres="' . $towns['adres'] . '" data-maps="' . $towns['maps'] . '" data-time="' . $towns['time'] . '" data-tel="' . $towns['tel'] . '" data-url="' . $towns['poddomen'] . '" class="citysel';
                if (isset($towns['marker'])) {
                    if ($towns['marker'] == 1) $html .= ' marker';
                }
                $html .= '" id="' . $towns['id'] . '">' . $towns['city'] . '</p>';
            }
        }
        return $html;


    }

    public function select2cookie($cookie)
    {


        return $this->get_city_info($cookie);


    }




} // END class


?>