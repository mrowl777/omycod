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
    $arr = json_decode($_POST['arr'], true);
    $get = UNI::get('SELECT `id`, `name`, `date` FROM `table`'); // Предположим есть таблица "table". Впишите сюда MySQL запрос чтобы получить колонки (id, name и date)
    //$arr['table'] = $get;
    $arr['table'] = array('id' => 1, 'name' => 'new', 'date' => '2022.05.16'); // Т.к. таблица предполагаемая, то симулируем.
    echo json_encode($arr); // в echo отдайте $arr в json формате
}
