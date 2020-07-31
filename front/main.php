<?php
@$type = $_GET['type'];
if (empty($type)) {
    $goods = $Goods->all(['sh' => 1]);
    $nav = '全部商品';
} else {
    $tt = $Type->find($type);
    if ($tt['parent'] == 0) {
        $goods = $Goods->all(['sh' => 1, 'big' => $type]);
        $nav = $tt['name'];
    } else {
        $goods = $Goods->all(['sh' => 1, 'mid' => $type]);
        $nav = $Type->find($tt['parent'])['name'] . ">" . $tt['name'];
    }
}
?>
<h1><?= $nav; ?></h1>
<?php
foreach ($goods as $g) {
?>
    <div style="display:flex;width:80%">
        <div style="width:40%"><a href="?do=detail&id=<?=$g['id'];?>"><img src="img/<?= $g['img']; ?>" style="width:80%"></a></div>
        <div style="width:60%">
            <div><?= $g['name']; ?></div>
            <div>價格：<?= $g['price']; ?>
                <a href="?do=buycart"><img src="img/0402.jpg" style="float:right"></a></div>
            <div>規格：<?= $g['spec']; ?></div>
            <div>簡介<?= mb_substr($g['intro'], 0, 25, "utf8"); ?>...</div>
        </div>

    </div>
    <hr>
<?php
}

?>