<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
        <title>お問い合わせフォーム--編集</title>
    <!-- PHP -->
    <?php
        session_start();
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $name = $_SESSION['name'];
        $office = $_SESSION['office'];
        $office_address = $_SESSION['office_address'];
        $phone = $_SESSION['phone'];
        $logo = $_SESSION['logo'];
    ?>
</head>
<body>
    <div class="container">
            <div class="conrtainer left">            
                <div class="col-xs-10 col-xs-offset-1" style="margin-top:30px; margin-bottom:30px;">
                    ブラウザの[戻る]は使わないでください。<br>
            <div class="col-xs-10 col-xs-offset-1" style="margin-top:30px; margin-bottom:30px;">
                <form action="confirm.php" method="post">
                    <div class="form-group">
                        <label>メールアドレス　<span class="label label-danger">必須</span></label>
                        <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" data-required-error="名前を入れてください" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label>パスワード　<span class="label label-danger">必須</span></label>
                        <input type="password" class="form-control" value="<?php echo $password; ?>" name="password" required>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label>ユーザー名</label>
                        <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
                    </div>
                    <div class="form-group">
                        <label>会社名</label>
                        <input type="text" class="form-control" value="<?php echo $office; ?>" name="office">
                    </div>
                    <div class="form-group">
                        <label>会社住所</label>
                        <input type="text" class="form-control" value="<?php echo $office_address; ?>" name="office_address">
                    </div>
                    <div class="form-group">
                        <label>郵便番号</label>
                        <input type="text" class="form-control" value="<?php echo $phone; ?>" name="phone">
                    </div>
                    <div class="form-group">
                        <label>会社ロゴ</label>
                        <input type="text" class="form-control" value="<?php echo $logo; ?>" name="logo">
                    </div>
                    <button type="submit" class="btn btn-warning btn-lg btn-block">確認</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
