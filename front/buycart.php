<style>

</style>
<?php
if(!empty($_GET['id'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}else if(empty($_SESSION['cart'])){
    echo "請選擇商品";
}

if(empty($_SESSION['member'])) to("?do=login");

echo "<h2 class='ct'>".$_SESSION['member']."的購物車</h2>";
?>
<table style="width:90%">
    <tr class="tt">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
        <td>庫存量</td>
        <td>單價</td>
        <td>小計</td>
        <td>刪除</td>
    </tr>
<?php
foreach($_SESSION['cart'] as $id=>$qt){
    $goods=$Goods->find($id);
// echo "商品=".$id."數量".$qt."<br>";

?>

    <tr class="pp">
        <td><?=$goods['no'];?></td>
        <td><?=$goods['name'];?></td>
        <td><?=$qt;?></td>
        <td><?=$goods['stock'];?></td>
        <td><?=$goods['price'];?></td>
        <td><?=$goods['price'];?></td>
        <td>
            <a href="javascript:delCart(<?=$goods['id'];?>)">
                <img src="img/0415.jpg" alt="">
            </a>
        </td>
    </tr>
<?php } ?>
</table>
<script>
    function delCart(id){
        $.post("api/del_cart.php",{id},function(){
            location.reload();
        })
    }
</script>

