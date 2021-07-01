<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){

    $sql = 'SELECT * FROM `info`';
    $run = mysqli_query($con,$sql);

    echo '<h1>明道人會訊 清單<span></h1>';
    echo '<button onclick=location.href="./info.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';


    echo '
				<tr>
					<th>標題</th>
					<th>連結</th>
					<th>上傳時間</th>
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['title'].'</td>
					
					<td><a href="'.$row['link'].'" target="_blank">查看連結</a></td>
					<td>'.$row['date'].'</td>
					<td>
					
					<a href="info.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="info.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增會務訊息</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="info_exe.php" method="POST" enctype="multipart/form-data">
                                    
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>標題：</td><td><input type="text" name="title" alt="NAME" required></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>連結：</td><td><input type="url" name="link" alt="NAME" required></td>
                                        </tr>
                                        
                                        
                                
                                    <table>
                                        <input type="hidden" name="action" value="add">
                                        <input type="submit" class="button"> &emsp;
                                        <input type="reset" class="button">
                                </form>
                        
                            </div>
                        </div>
                    </div>';
            break;

        case 'edit':

            $sql = 'SELECT * FROM `info` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯明道人會訊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="info_exe.php" method="POST" enctype="multipart/form-data">

                                    <table cellpadding="8">
                        
                                        <tr>
                                            <td>標題：</td><td><input type="text" name="title" value="'.$row['title'].'" alt="NAME" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>圖片：</td><td><input type="text" name="photo" id="photo" value="'.$row['img'].'" placeholder="google drive img ID"></td>
                                        </tr>
                        
                                        <tr>
                                            <td>連結：</td><td><input type="url" name="link" alt="NAME" value="'.$row['link'].'" required></td>
                                        </tr>
                        
                        
                                        <table>
                                            <input type="hidden" name="id" value="'.$row['id'].'">
                                            <input type="hidden" name="action" value="edit">
                                            <input type="submit" class="button"> &emsp;
                                            <input type="reset" class="button">
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `info` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除明道人會訊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                 <form action="info_exe.php" method="POST" enctype="multipart/form-data">
                            
                                        <table cellpadding="8">
                            
                                            <tr>
                                                <td>標題：</td><td>'.$row['title'].'</td>
                                            </tr>
                            
                            
                                            <tr>
                                                <td>封面圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['img'].'" style="width:250px;"></td>
                                            </tr>
                            
                                            <tr>
                                                <td>連結：</td><td>'.$row['link'].'</td>
                                            </tr>
                            
                            
                                            <table>
                                                <input type="hidden" name="id" value="'.$row['id'].'">
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