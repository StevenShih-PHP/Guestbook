<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增留言</title>
</head>
<body>
    <h1>新增訪客留言</h1>
    <hr>
    <?php
        $file = "guestbook.txt";
        if(!file_exists($file)){
            $fp = fopen($file, "w");
            fclose($fp);
        }

        $email = $_POST["Email"];
        $email = "<a href=mailto:" . $email . ">" . $email . "</a>";

        $message = nl2br($_POST["Message"]);
        $fp = fopen($file, "a");
        $today = date("Y年m月d日 星期w h:i:s a");

        $msg = "<b>留言時間：</b>" . $today . "<br/>" . "\n";
        $msg .= "<b>姓名：</b>" . $_POST["Name"] . "<br/>" . "\n";
        $msg .= "<b>電子郵件：</b>" . $email . "<br/>" . "\n";
        $msg .= "<b>留言：</b>" . $message . "<br/><hr/>" . "\n\n";

        fputs($fp, $msg);
        fclose($fp);
        echo $msg;
    ?>

    <hr>
    <a href="index.php">新增留言</a>
    <a href="showmessage.php">顯示留言</a>
</body>
</html>