<?php

include_once "../base.php";
$row = $Goods->find($_POST['id']);

switch ($_POST['type']) {
    case 1:
        $row['sh'] = 1;
        $Goods->save($row);
        break;
    case 2:
        $row['sh'] = 0;
        $Goods->save($row);
        break;
}
