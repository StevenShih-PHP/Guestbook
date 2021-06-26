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
        if(!file_exists($file)){            /*如果guestbook.txt不存在，以寫入模式創建*/
            $fp = fopen($file, "w");
            fclose($fp);
        }

        $email = $_POST["Email"];           //變數email = 表單中name為Email的項目
        $email = "<a href=mailto:" . $email . ">" . $email . "</a>";

        $message = nl2br($_POST["Message"]);    //n12br:在enter換行時插入<br>紀錄換行
        $fp = fopen($file, "a");
        date_default_timezone_set('Asia/Taipei');   //設定時區
        $today = date("Y年m月d日 星期w h:i:s a");   //PHP的data函數，可透過字符去顯示現在時間

        $msg = "<div class=\"card\">\n";            //將所有要呈現的HTML標籤和資料記錄在msg變數
        $msg .= "<b>留言時間：</b>" . $today . "<br/>" . "\n";
        $msg .= "<b>姓名：</b>" . $_POST["Name"] . "<br/>" . "\n";
        $msg .= "<b>電子郵件：</b>" . $email . "<br/>" . "\n";
        $msg .= "<b>留言：</b>" . $message . "<br/>" . "\n";
        $msg .= "</div>\n\n";

        fputs($fp, $msg);               //將msg寫入fp
        fclose($fp);                    //關閉msg
        echo $msg;                      //將msg呈現在網頁上
    ?>

    <div class = "home">
        <a href="index.php">新增留言</a>
        <a href="showmessage.php">顯示留言</a>
    </div>
</body>
</html>