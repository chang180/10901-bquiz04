<h1>全部商品</h1>
<?php
$goods=$Goods->all(['sh'=>1]);

foreach($goods as $g){
    ?>
<div style="display:flex;width:80%">
<div style="width:40%"><img src="img/<?=$g['img'];?>" style="width:80%"></div>
<div style="width:60%">
<div><?=$g['name'];?></div>
<div>價格：<?=$g['price'];?>
<a href="?do=login"><img src="img/0402.jpg" style="float:right"></a></div>
<div>規格：<?=$g['spec'];?></div>
<div>簡介<?=mb_substr($g['intro'],0,25,"utf8");?>...</div>
</div>

</div>
<hr>
    <?php
}

?>