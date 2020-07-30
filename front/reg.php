<h2 class="ct">會員註冊</h2>
<table class="all">
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"> <button type="button" onclick="chkAcc()">檢測帳號</button></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
        <td class="tt ct">住址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
</table>
<div class="ct all">
    <button onclick="reg()">註冊</button><button type="reset" onclick="reset()">重置</button>
</div>
<script>
    function chkAcc() {
        let acc = $("#acc").val();
        $.get("api/chk_acc.php", {
            acc
        }, function(res) {
            if (res == 1 || acc == 'admin') {
                alert("該帳號已被註冊，請使用其他帳號註冊");
            } else {
                alert("此帳號可使用");
            }
        })
    }

    function reset() {
        $("input[type='text'],input[type='password']").val("");
    }

    function reg() {
        // console.log(123)
        let acc = $("#acc").val();
        let pw = $("#pw").val();
        let name = $("#name").val();
        let email = $("#email").val();
        let tel = $("#tel").val();
        let addr = $("#addr").val();

        $.get("api/chk_acc.php", {
            acc
        }, function(res) {
            if (res == 1 || acc == 'admin') {
                alert("該帳號已被註冊，請使用其他帳號註冊");
            } else {
                $.post("api/reg.php", {
                    acc,
                    name,
                    pw,
                    tel,
                    addr,
                    email
                }, function() {
                    location.href = '?do=login';
                })
            }
        })
    }
</script>