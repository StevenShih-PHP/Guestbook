<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>顯示留言</title>
    <link rel="stylesheet" href="stylenew.css">
</head>
<body>
    <h1>顯示訪客留言</h1>
    <?php
        $file = "guestbook.txt";
        if(!file_exists($file) or filesize($file) == 0){
            echo "<h2>目前沒有任何留言！</h2><hr/>";
        }
        else{
            readfile($file);
        }
    ?>

    <div class = "home">
        <a href="index.php">新增留言</a>
    </div>

</body>
</html>