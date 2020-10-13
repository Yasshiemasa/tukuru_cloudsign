<?php

session_start();

require('dbconnect.php');
// 画面を表示した時、POSTに値が存在する場合、セッションにPOSTの値を保存し、画面を移動させる
if(!empty($_POST)) {
    $_SESSION['query'] = $_POST;
    header('Location: 【入力内容確認画面のURL】');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>new_contact</title>
        
    </head>
    <body>
       <h2>新規登録画面</h2>
       <form action="confirm.php" method="post" name="Form1">
        <div class="form-group">
            <label>メールアドレス</label>
            <input type="text" class="form-control" placeholder="" name="email" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>パスワード</label>
            <input type="email" class="form-control" placeholder="" name="password" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label>ユーザー名</label>
            <input type="text" class="form-control" placeholder="" name="name">
        </div>
        <div class="form-group">
            <label>会社名</label>
            <input type="text" class="form-control" placeholder="" name="office">
        </div>
        <div class="form-group">
            <label>会社住所</label>
            <input type="text" class="form-control" placeholder="" name="office_address">
        </div>
        <div class="form-group">
            <label>郵便番号</label>
            <input type="text" class="form-control" placeholder="" name="phone">
        </div>
        <div class="form-group">
            <label>会社ロゴ(任意)</label>
            <input type="text" class="form-control" placeholder="" name="logo">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-warning btn-lg btn-block" onclick="location.href='./form_contact.html'">申請する</button>
    </form>
   
<!-- 件名その他を押したときだけテキストボックスをONにする -->
<script type="text/javascript">
    function changeDisabled() {
        if ( document.Form1["subjectR"][2].checked ) {
            document . Form1["subject"] . disabled = false;
        } else {
            document . Form1["subject"] . disabled = true;
        }
    }
    window.onload = changeDisabled;
</script>
    </body>
</html>