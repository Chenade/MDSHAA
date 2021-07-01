<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){
    $sql = 'SELECT * FROM `notion`';
    $run = mysqli_query($con,$sql);

    echo '<h1>明道人動態 清單<span></h1>';
    echo '<button onclick=location.href="./notion.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';

    echo '
				<tr>
					<th>標題</th>
					<th>校友名稱</th>
					<th>職位</th>
					<th>內文</th>
					<th>日期</th>
					
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['title'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['job'].'</td>
					<td style="max-width:45vw;word-break:break-all;">'.$row['detail'].'</td>
				
					<td>'.$row['date'].'</td>
					<td>
					
					<a href="notion.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="notion.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增明道人動態</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="notion_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>標題：</td><td><input type="text" name="title" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>校友名稱：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>現職：</td><td><input type="text" name="job" alt="NAME" required></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>內文：</td><td><textarea name="detail" style="width:20vw;height:10vh;"></textarea></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID"></td>
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

            $sql = 'SELECT * FROM `notion` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯明道人動態</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="notion_exe.php" method="POST" enctype="multipart/form-data">
                                    	
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>標題：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                            <input type="text" name="title" alt="NAME" value="'.$row['title'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>名字：</td>
                                            <td><input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>現職：</td>
                                            <td><input type="text" name="job" alt="NAME" value="'.$row['job'].'" required></td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td>圖片：</td><td><input type="text" name="photo" id="photo"  value="'.$row['img'].'" required> </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>內文：</td><td><textarea name="detail" style="width:25vw;height:20vh;">'.$row['detail'].'</textarea></td>
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

            $sql = 'SELECT * FROM `notion` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除明道人動態</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                 <form action="notion_exe.php" method="POST" enctype="multipart/form-data">
					
                                        <table cellpadding="8">
                                        
                                            <tr>
                                                <td>標題：</td>
                                                <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                                <input type="text" name="title" alt="NAME" value="'.$row['title'].'" required></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>名字：</td>
                                                <td><input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>現職：</td>
                                                <td><input type="text" name="job" alt="NAME" value="'.$row['job'].'" required></td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['img'].'" style="width:250px;"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>內文：</td><td><textarea name="detail" style="width:25vw;height:20vh;">'.$row['detail'].'</textarea></td>
                                            </tr>
                                            
                                            
                                    
                                        <table>
                                            <input type="hidden" name="action" value="delete">
                                            <input type="submit">
                                            <input type="reset">
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
