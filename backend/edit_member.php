<h2 class="ct">編輯會員資料</h2>
<form action="api/save_mem.php" method="post">
    <table class="all">
        <?php
// include_once "../base.php";
$row=$Member->find(['id'=>$_GET['id']]);
        ?>
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp"><input type="text" name="acc" value="<?=$row['acc'];?>" readonly></td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp"><input type="password" name="pw" value="<?=$row['pw'];?>" readonly></td>
        </tr>
        <tr>
            <td class="tt ct">姓名</td>
            <td class="pp"><input type="text" name="name" value="<?=$row['name'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">電子信箱</td>
            <td class="pp"><input type="text" name="email" value="<?=$row['email'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">地址</td>
            <td class="pp"><input type="text" name="addr" value="<?=$row['addr'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">電話</td>
            <td class="pp"><input type="text" name="tel" value="<?=$row['tel'];?>"></td>
        </tr>
        <input type="hidden" name="id" value="<?=$row['id'];?>">
    </table>
    <div class="ct">
        <input type="submit" value="修改"><input type="reset" value="重置"><input type="button" value="取消" onclick="location.href='?do=mem'">
    </div>
</form>