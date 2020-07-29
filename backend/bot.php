<?php
if (!empty($_POST['bottom'])) {
    $bot = $Bottom->find(1);
    $bot['bottom'] = $_POST['bottom'];
    $Bottom->save($bot);
    unset($_POST['bottom']);
}

?>

<form action="?do=bot" method="post" class="all ct">
    <h2 class="ct">編輯頁尾版權區</h2>
    <label for="text">頁尾宣告內容<input type="text" name="bottom" value="<?= $Bottom->find(1)['bottom']; ?>" id="cl"></label><br>
    <button>編輯</button><button type="button" id="clr">重置</button>
</form>
<script>
    $("#clr").on("click",function(){
        $("#cl").val("");
    })
</script>