<?php
class UNI
{
    function get($opt)
    {
        $arr = array();
        $ALLROW = @mysqli_query($GLOBALS['connect'], $opt);
        while ($row = @mysqli_fetch_array($ALLROW, MYSQLI_ASSOC)) {
            $arr[] = $row;
        }
        return $arr;
    }
}

if (isset($_POST['get'])) {
    $arr = $_POST['arr'];
    $get = UNI::get('YOU_MySQL_CODE'); // РџСЂРµРґРїРѕР»РѕР¶РёРј РµСЃС‚СЊ С‚Р°Р±Р»РёС†Р° "table". Р’РїРёС€РёС‚Рµ СЃСЋРґР° MySQL Р·Р°РїСЂРѕСЃ С‡С‚РѕР±С‹ РїРѕР»СѓС‡РёС‚СЊ РєРѕР»РѕРЅРєРё (id, name Рё date)
    //$arr['table'] = $get;
    $arr['table'] = array('id' => 1, 'name' => 'new', 'date' => '2022.05.16'); // Рў.Рє. С‚Р°Р±Р»РёС†Р° РїСЂРµРґРїРѕР»Р°РіР°РµРјР°СЏ, С‚Рѕ СЃРёРјСѓР»РёСЂСѓРµРј.
    echo true; // РІ echo РѕС‚РґР°Р№С‚Рµ $arr РІ json С„РѕСЂРјР°С‚Рµ
}
