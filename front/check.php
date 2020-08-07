<h2 class="ct">填寫資料</h2>
<form>
<table class="all">
    <tr class="">
        <td class="ct tt">登入帳號</td>
        <td class="pp"><?=$_SESSION['member'];?></td>
    </tr>
    <tr>
        <td class="ct tt">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="ct tt">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
    <tr>
        <td class="ct tt">聯絡地址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="ct tt">聯絡電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
</table>
<table class="all">
    <tr class="tt">
        <td>商品名稱</td>
        <td>編號</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
    <tr class="pp">
        <td class="ct"></td>
        <td class="ct"></td>
        <td class="ct"></td>
        <td class="ct"></td>
        <td class="ct"></td>
    </tr>
    <tr class="tt">
        <td class="ct" colspan="5">總價：</td>
    </tr>
</table>
<button onclick="buy()">確定送出</button><button onclick="location.href='?do=buycart'">返回修改</button>
</form>
<script>
function buy(){
    let data={
        'name':$("#name").vaol(),
        'email':$("#email").vaol(),
        'tel':$("#tel").vaol(),
        'addr':$("#addr").vaol()
    };
    $.post("api/buy.php",data,function(){
        alert("訂購成功\n感謝您的選購");
        location.href="index.php";
    })
}
</script>
