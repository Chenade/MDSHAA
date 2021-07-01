<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){


    $sql = 'SELECT * FROM `team`';
    $run = mysqli_query($con,$sql);

    echo '<h1>服務團隊清單<span></h1>';
    echo '<button onclick=location.href="./team.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';

    echo '
				<tr>
					<th>姓名</th>
					<th>職位</th>
					<th>電子信箱</th>
					<th>連絡電話</th>
					
					
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['job'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['tel'].'</td>
					
										
					<td>
					
					<a href="team.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="team.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增服務團隊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="team_exe.php" method="POST" enctype="multipart/form-data">
                                    <table cellpadding="8">
                                        <tr>
                                            <td>姓名：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                    
                                        <tr>
                                            <td>職稱：</td><td><input type="text" name="job" alt="job" required></td>
                                        </tr>
                    
                                        <tr>
                                            <td>電子信箱：</td><td><input type="email" name="email" alt="email" required></td>
                                        </tr>
                    
                                        <tr>
                                            <td>電話：</td><td><input type="tel" name="tel" alt="TEL" required></td>
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

            $sql ='SELECT * FROM `team` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯服務團隊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="team_exe.php" method="POST" enctype="multipart/form-data">
                                    <table cellpadding="8">
                                        <tr>
                                            <td>姓名：</td><td>
                                            <input type="hidden" name="id" alt="NAME" value="'.$row['id'].'">
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>職稱：</td><td><input type="text" name="job" alt="job" value="'.$row['job'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電子信箱：</td><td><input type="text" name="email" alt="email" value="'.$row['email'].'" required></td>
                                        </tr>
                    
                                        <tr>
                                            <td>連絡電話：</td><td><input type="text" name="tel" alt="tel" value="'.$row['tel'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>圖片：</td><td><input type="text" name="photo" id="photo" value="'.$row['img'].'" placeholder="google drive img ID" required></td>
                                        </tr>
                                    <table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./team.php" class="button">回上頁</button>
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `team` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除服務團隊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="team_exe.php" method="POST" enctype="multipart/form-data">
				                    <table cellpadding="8">
                                        <tr>
                                            <td>姓名：</td><td>
                                            <input type="hidden" name="id" alt="NAME" value="'.$row['id'].'">
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>職稱：</td><td><input type="text" name="job" alt="job" value="'.$row['job'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電子信箱：</td><td><input type="text" name="email" alt="job" value="'.$row['email'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['img'].'" style="width:250px;"></td>
                                        </tr>
                                    <table>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./team.php" class="button">回上頁</button>
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