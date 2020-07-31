<?php
include_once "../base.php";

$bigs=$Type->all(['parent'=>$_GET['bigId']]);
foreach($bigs as $b){ //變數名稱就別改了，免得出錯
    echo "<option value='".$b['id']."'>".$b['name']."</option>";
}