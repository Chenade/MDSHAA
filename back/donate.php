<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){

    $sql = 'SELECT * FROM `donate`';
    $run = mysqli_query($con,$sql);

    echo '<h1>捐款芳名錄 清單<span></h1>';
    echo '<button onclick=location.href="./donate.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';

    echo '
				<tr>
					<th>捐款人</th>
					<th>金額</th>
					<th>用途</th>
					<th>方式</th>
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['amount'].'</td>
					<td>'.$row['target'].'</td>
					<td>'.$row['mehtod'].'</td>
				
					
					<td>
					
					<a href="donate.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="donate.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
					</td>

				</tr>
			';

    }
    echo '</table>';

}else{
    switch ($_GET['action']){
        case 'add':
            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">新增捐款芳名錄</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="donate_exe.php" method="POST" enctype="multipart/form-data">

                                    <table cellpadding="8">
                        
                                        <tr>
                                            <td>捐款人：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>金額：</td><td><input type="number" name="amount" alt="NAME" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>用途：</td><td><input type="text" name="target" alt="NAME" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>方法：</td><td><input type="text" name="method" id="photo"></td>
                                        </tr>           
                                                
                                        </table>
                                            <input type="hidden" name="action" value="add">
                                            <input type="submit" class="button">
                                            <input type="reset" class="button">
                                </form>
                        
                            </div>
                        </div>
                    </div>';
            break;

        case 'edit':

            $sql = 'SELECT * FROM `donate` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯捐款芳名錄</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="donate_exe.php" method="POST" enctype="multipart/form-data">
                                    	
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>捐款人：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                                <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>金額：</td>
                                            <td><input type="text" name="amount" alt="NAME" value="'.$row['amount'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>用途：</td>
                                            <td><input type="text" name="target" alt="NAME" value="'.$row['target'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>方法：</td>
                                            <td><input type="text" name="method" alt="NAME" value="'.$row['mehtod'].'" required></td>
                                        </tr>
                                        
                                    <table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <input type="reset" class="button">
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `donate` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除捐款芳名錄</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                 <form action="donate_exe.php" method="POST" enctype="multipart/form-data">
                                    	
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>捐款人：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                                <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>金額：</td>
                                            <td><input type="text" name="amount" alt="NAME" value="'.$row['amount'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>用途：</td>
                                            <td><input type="text" name="target" alt="NAME" value="'.$row['target'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>方法：</td>
                                            <td><input type="text" name="method" alt="NAME" value="'.$row['mehtod'].'" required></td>
                                        </tr>
                                        
                                    <table>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="submit" class="button"> &emsp;
                                        <input type="reset" class="button">
                                </form>
                            </div>
                        </div>
                    </div>';
            break;
    }
}
?>


<br><br>

</body>
</html>