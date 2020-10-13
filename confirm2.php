<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>送信確認フォーム</title>
    <!-- PHP -->
    <?php
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        if(empty($_POST['name']))
        {
            $_SESSION['name'] = "記入無し";
        }
        else
        {
            $_SESSION['name'] = $_POST['name'];
        }
        if(empty($_POST['office']))
        {
            $_SESSION['office'] = "記入無し";
        }
        else
        {
            $_SESSION['office'] = $_POST['office'];
        }
        if(empty($_POST['position']))
        {
            $_SESSION['position'] = "記入無し";
        }
        else
        {
            $_SESSION['position'] = $_POST['position'];
        }
        if(empty($_POST['division']))
        {
            $_SESSION['division'] = "記入無し";
        }
        else
        {
            $_SESSION['division'] = $_POST['division'];
        }    
    ?>
</head>
<body>
    <div id="style"></div>
    <div class="container">
        <div class="row">
            <div class="conrtainer left">            
                <div class="col-xs-10 col-xs-offset-1" style="margin-top:30px; margin-bottom:30px;">
                    お問い合わせありがとうございます。<br>
                    この内容で送信いたします。<br>
                    <table class="table" style="table-layout:fixed;">
                        <thead><th style="width:200px;"></th><th></th></thead>
                        <tbody>
                            <tr>
                                <td>[メールアドレス]:</td>
                                <td>
                                    <?php echo $_SESSION['email']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[パスワード]:</td>
                                <td>
                                    <?php echo $_SESSION['password']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[ユーザー名]:</td>
                                <td>
                                    <?php echo $_SESSION['name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[会社名]:</td>
                                <td>
                                    <?php echo $_SESSION['office']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[部署・役職名]:</td>
                                <td>
                                    <?php echo $_SESSION['position']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[課]:</td>
                                <td>
                                    <?php echo $_SESSION['division']; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="sendMail2.php" method="Post">
                        <button type="submit" class="btn btn-success btn-lg btn-block"　onclick="location.href='./form_contact2.html'">送信</button>
                    </form>
                    <br>
                    <form action="edit2.php" method="Post">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">編集</button>
                    </form>
                </div>  
            </div>
    </div>
</body>
</html>