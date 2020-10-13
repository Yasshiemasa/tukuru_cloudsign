<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0; URL=new_contact.html"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>

    <body>
        <div class="mailform">
            <?php
                session_start();
                require_once ( 'php/PHPMailerAutoload.php' );
                $subject = "お問い合わせ";
                $body = '[メールアドレス]'."\n".$_SESSION['email']."\n"
                        .'[パスワード]'."\n".$_SESSION['password']."\n"
                        .'[ユーザー名]'."\n".$_SESSION['name']."\n"
                        .'[会社名]'."\n".$_SESSION['office']."\n"
                        .'[会社住所]'."\n".$_SESSION['office_address']."\n"
                        .'[郵便番号]'."\n".$_SESSION['phone']."\n"
                        .'[会社ロゴ]'."\n".$_SESSION['logo']."\n";
                $fromname = "メーラーに表示したい名前";
                $fromaddress = "送り元のアドレス";
                $smtp_user = "SMTPサーバーのユーザー名";
                $smtp_password = "SMTPサーバーのパスワード";
                $to = "送り先";

                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                $mail->SMTPAuth = true;
                $mail->CharSet = 'utf-8';
                $mail->SMTPSecure = 'ssl';
                $mail->Host = "SMTPサーバー";
                $mail->Port = 465;
                $mail->IsHTML(false);
                $mail->Username = $smtp_user;
                $mail->Password = $smtp_password; 
                $mail->SetFrom($smtp_user);
                $mail->From     = $fromaddress;
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($to);

                if( !$mail -> Send() ){
                    $message  = "Message was not sent<br/ >";
                    $message .= "Mailer Error: " . $mailer->ErrorInfo;
                } else {
                    $message  = "Message has been sent";
                }

                echo $message;

                ?>
            <br>
            <input type="button" class="btn btn-success" value="自動的に戻らない場合は押してください。" onClick="location.href='new_contact.html'">
        </div>
    </body>
</html>