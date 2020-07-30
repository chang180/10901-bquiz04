<h2 class="ct">修改管理員帳號</h2>
<form action="api/add_admin.php" method="post">
    <table class="all">
        <?php
// include_once "../base.php";
$row=$Admin->find(['id'=>$_GET['id']]);
$apr=unserialize($row['pr']);
        ?>
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp"><input type="text" name="acc" value="<?=$row['acc'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp"><input type="password" name="pw" value="<?=$row['pw'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">權限</td>
            <td class="pp">
                <div><input type="checkbox" name="pr[]" value="1" <?=@in_array("1",$apr)?"checked":"";?>>商品分類與管理</div>
                <div><input type="checkbox" name="pr[]" value="2" <?=@in_array("2",$apr)?"checked":"";?>>訂單管理</div>
                <div><input type="checkbox" name="pr[]" value="3" <?=@in_array("3",$apr)?"checked":"";?>>會員管理</div>
                <div><input type="checkbox" name="pr[]" value="4" <?=@in_array("4",$apr)?"checked":"";?>>頁尾版權區管理</div>
                <div><input type="checkbox" name="pr[]" value="5" <?=@in_array("5",$apr)?"checked":"";?>>最新消息管理</div>
            </td>
        </tr>
        <input type="hidden" name="id" value="<?=$row['id'];?>">
    </table>
    <div class="ct">
        <input type="submit" value="修改"><input type="reset" value="重置">
    </div>
</form>