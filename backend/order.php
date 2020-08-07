<h2 class="ct">訂單管理</h2>
<table class="all">
    <tr class="tt">
        <td>訂單編號</td>
        <td>金額</td>
        <td>會員帳號</td>
        <td>姓名</td>
        <td>下單時間</td>
        <td>操作</td>
    </tr>
    <?php
    $ords=$Ord->all();
foreach($ords as $ord){
    ?>
    <tr class="pp">
        <td><a href="?do=result&id=<?=$ord['id'];?>"><?=$ord['no'];?></a></td>
        <td><?=$ord['total'];?></td>
        <td><?=$ord['acc'];?></td>
        <td><?=$ord['name'];?></td>
        <td><?=$ord['date']*$qt;?></td>
        <td>
            </td>
    </tr>
<?php 
$sum+=($g['price']*$qt);
} ?>
    <tr class="tt">
        <td class="ct" colspan="5">總價：<?=$sum;?></td>
    </tr>
</table>
<button onclick="buy()">確定送出</button><button onclick="location.href='?do=buycart'">返回修改</button>
