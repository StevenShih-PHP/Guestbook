<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訪客留言簿</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>訪客留言簿</h1>
    <div class="form">
        <form action="guestbook.php" method="post">
            <table>
            <tr>
                <td>姓名：</td>
                <td><input type="text" size="30" name="Name"/></td>
            </tr>

            <tr>
                <td>電子郵件：</td>
                <td><input type="text" size="30" name="Email"/></td>
            </tr>     

            <tr>
                <td>留言：</td>
                <td><textarea name="Message" cols="30" rows="4"></textarea></td>
            </tr>          
            </table>

            <div class = "control">
                <input type="submit" name="Send" value="送出留言"/>
                <input type="reset" name="Reset" value="重設欄位"/>
            </div>
            
        </form>
    </div>
    
    <div class = "home">
        <a href="index.php">新增留言</a>
        <a href="showmessage.php">顯示留言</a>
    </div>
    

</body>
</html>