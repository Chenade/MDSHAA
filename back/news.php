<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){

    $sql = 'SELECT * FROM `news`';
    $run = mysqli_query($con,$sql);

    echo '<h1>最新消息 清單<span></h1>';
    echo '<button onclick=location.href="./news.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';


    echo '
				<tr>
					<th>標題</th>
					<th>內文</th>
					<th>日期</th>
					<th>連結</th>
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['title'].'</td>
					<td style="max-width:45vw;word-break:break-all;">'.$row['content'].'</td>
					<td><a href="'.$row['link'].'" target="_blank">查看連結</a></td>
					<td>'.$row['date'].'</td>
					<td>
					
					<a href="news.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="news.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增最新消息</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="news_exe.php" method="POST" enctype="multipart/form-data">
                                
                                <table cellpadding="8">
                                
                                    <tr>
                                        <td>標題：</td><td><input type="text" name="title" alt="NAME" required></td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td>內文：</td><td><textarea name="content" style="width:20vw;height:10vh;"></textarea></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>圖片：</td><td><input type="text" name="photo" id="photo"  placeholder="google drive img ID"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>全文連結：</td><td><input type="url" name="link" alt="NAME" required></td>
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

            $sql = 'SELECT * FROM `news` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯最新消息</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="news_exe.php" method="POST" enctype="multipart/form-data">
                                	
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>標題：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                            <input type="text" name="title" alt="NAME" value="'.$row['title'].'" required></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID" value="'.$row['img'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>內文：</td><td><textarea name="content" style="width:25vw;height:20vh;">'.$row['content'].'</textarea></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>全文連結：</td><td><input type="text" name="link" value="'.$row['link'].'"  alt="NAME" required>
                                            <a href="'.$row['link'].'" target="_blank">查看</a>
                                            </td>
                                        </tr>
                                
                                    <table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./news.php" class="button">回上頁</button>
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `news` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除最新消息</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="news_exe.php" method="POST" enctype="multipart/form-data">
				
                                <table cellpadding="8">
                                
                                    <tr>
                                        <td>標題：</td>
                                        <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                        <input type="text" name="title" alt="NAME" value="'.$row['title'].'" required></td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td>圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['img'].'" style="height:20vh;"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>內文：</td><td><textarea name="content" style="width:25vw;height:20vh;">'.$row['content'].'</textarea></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>全文連結：</td><td><input type="text" name="link" value="'.$row['link'].'"  alt="NAME" required>
                                        <a href="'.$row['link'].'" target="_blank">查看</a>
                                        </td>
                                    </tr>
                            
                                <table>
                                    <input type="hidden" name="action" value="delete">
                                    <input type="submit" class="button"> &emsp;
                                    <button onclick=location.href="./news.php" class="button">回上頁</button>
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
