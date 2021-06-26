<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增留言</title>
    <link rel="stylesheet" href="stylenew.css">
</head>
<body>
    <h1>新增訪客留言</h1>
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
        date_default_timezone_set('Asia/Taipei');
        $today = date("Y年m月d日 星期w h:i:s a");

        $msg = "<div class=\"card\">\n";
        $msg .= "<b>留言時間：</b>" . $today . "<br/>" . "\n";
        $msg .= "<b>姓名：</b>" . $_POST["Name"] . "<br/>" . "\n";
        $msg .= "<b>電子郵件：</b>" . $email . "<br/>" . "\n";
        $msg .= "<b>留言：</b>" . $message . "<br/>" . "\n";
        $msg .= "</div>\n\n";

        fputs($fp, $msg);
        fclose($fp);
        echo $msg;
    ?>

    <div class = "home">
        <a href="index.php">新增留言</a>
        <a href="showmessage.php">顯示留言</a>
    </div>
</body>
</html>