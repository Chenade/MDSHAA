<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){

    $sql = 'SELECT * FROM `album`';
    $run = mysqli_query($con,$sql);

    echo '<h1>活動花絮 相簿清單<span></h1>';
    echo '<button onclick=location.href="./album.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';

    echo '
				<tr>
					<th>活動名稱</th>
					<th>活動日期</th>
					<th>簡介</th>
					<th>封面圖片</th>
					<th>相簿連結</th>
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['date'].'</td>
					<td style="max-width:40vw;word-break:break-all;">'.mb_substr($row['intro'],1,115,"UTF-8").'...</td>
					<td><a href="https://drive.google.com/uc?id='.$row['cover'].'" target="_blank">查看</a></td>
					<td><a href="'.$row['link'].'" target="_blank">查看相簿</a></td>
					
					<td>
					
					<a href="album.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="album.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增活動花絮</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="album_exe.php" method="POST" enctype="multipart/form-data">

                                    <table cellpadding="8">
                        
                                        <tr>
                                            <td>活動名稱：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>活動日期：</td><td><input type="date" name="date" alt="NAME" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>活動簡介：</td><td><textarea name="intro" style="width:20vw;height:10vh;"></textarea></td>
                                        </tr>
                        
                                        <tr>
                                            <td>封面圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID"></td>
                                        </tr>
                        
                                        <tr>
                                            <td>GOOGLE相簿連結：</td><td><input type="url" name="link" alt="NAME" required></td>
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

            $sql = 'SELECT * FROM `album` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯活動花絮相簿</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="album_exe.php" method="POST" enctype="multipart/form-data">
								
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>活動名稱：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>日期：</td><td><input type="text" name="date" value="'.$row['date'].'"  alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>封面圖片：</td><td><input type="text" name="photo"  value="'.$row['cover'].'"   id="photo"  placeholder="google drive img ID" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡介：</td><td><textarea name="intro" style="width:25vw;height:20vh;">'.$row['intro'].'</textarea></td>
                                        </tr>
                                        <tr>
                                            <td>GOOGLE相簿連結：</td><td><input type="url" value="'.$row['link'].'" name="link" alt="NAME" required></td>
                                        </tr>
                                
                                    <table>
                                        <input type="hidden" name="action" value="edit" class="button"> &emsp;
                                        <input type="submit" class="button">
                                       <button onclick=location.href="./album.php" class="button">回上頁</button>
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `album` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除活動花絮</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="album_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>活動名稱：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>日期：</td><td><input type="text" name="date" value="'.$row['date'].'"  alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>封面圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['cover'].'" style="width:250px;"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡介：</td><td><textarea name="intro" style="width:25vw;height:20vh;">'.$row['intro'].'</textarea></td>
                                        </tr>
                                        
                                
                                    <table>
                                        <input type="hidden" name="action" value="delete" class="button"> &emsp;
                                        <input type="submit" class="button">
                                       <button onclick=location.href="./album.php" class="button">回上頁</button>
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
