<?php
session_start();
if(@$_POST['action'] == 'login'){
    if($_POST['acc'] == 'mdshaa.web@gmail.com' && $_POST['pwd'] == '35056341'){
        $_SESSION['user'] = 'admin';
        header('location:index.php');
    }elseif($_POST['acc'] == 'alumni@ms.mingdao.edu.tw' && $_POST['pwd'] == '35056341'){
        $_SESSION['user'] = 'admin';
        header('location:index.php');
    }
}elseif(@$_GET['logout'] == 'logout'){
    session_start();
    $_SESSION['user'] = '';
    header('location:login.php');
}


?>

<!doctype HTML5>

<html>

<head>
    <link rel="stylesheet" href="../css/back.css">
    <style>
        button{
            margin:15px;
        }
    </style>

</head>

<body align="center" class="bodY">

<div class="box" style="width: 30vw;">

    <div class="title" style="width: 30vw;">
        <h1 style="color: white">明道校友會 控制台</h1>
    </div>


    <div align="center" style="margin: 5vh;">

        <form action="login.php" method="post">
        <table cellpadding="10">

            <tr>
                <td style="font-size: x-large">帳號：</td>
                <td><input type="email" name="acc" placeholder="Email" style="font-size: x-large; min-width: 150px;" autocomplete="off"></td>
            </tr>

            <tr>
                <td style="font-size: x-large">密碼：</td>
                <td><input type="password" name="pwd" placeholder="password" style="font-size: x-large; min-width: 150px;"></td>
            </tr>

            <tr>
                <td style="font-size: x-large"></td>
                <td><input type="hidden" name="action" value="login"></td>
            </tr>

            <tr>
                <td style="font-size: x-large" colspan="2" align="center">
                    <input type="submit" class="button">
                </td>
            </tr>

        </table>
        </form>

    </div>
</div>
</body>

</html>