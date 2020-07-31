<?php
$g = $Goods->find($_GET['id']);

?>
<h2 class="ct"><?= $g['name']; ?></h2>
<div style="display:flex;width:80%">
    <div style="width:40%"><a href="?do=detail?id=<?$g['id'];?>"><img src="img/<?= $g['img']; ?>" style="width:80%"></a></div>
    <div style="width:60%">
        <div>分類：<?= $Type->find($g['big'])['name'].">".$Type->find($g['mid'])['name']; ?></div>
        <div>編號：<?= $g['no']; ?></div>
        <div>價格：<?= $g['price']; ?>
            <div>詳細說明：<?= nl2br($g['intro']); ?></div>
            <div>庫量量：<?= $g['stock']; ?></div>
        </div>

    </div>
</div>
<div class="ct">
    <input type="number" name="qt" id="qt" style="width:30px;" value="1"><a href="javascript:buy()"><img src="img/0402.jpg"></a>
    <input type="hidden" name="id" id="id" value="<?=$g['id'];?>">
</div>
<div class="ct">
    <button onclick="location.href='index.php?type=0'">返回</button>
</div>
<script>
    function buy(){
        let id = $("#id").val();
        let qt=$("#qt").val();
        location.href=`?do=buycart&id=${id}&qt=${qt}`;
    }
</script>