<?php include_once "../base.php";
//修改時會有id，可直接使用本函式

$_POST['pr']=serialize($_POST['pr']);

$Admin->save($_POST);

to("../admin.php?do=admin");