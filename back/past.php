<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){

    $sql = 'SELECT * FROM `past_board`';
    $run = mysqli_query($con,$sql);

    echo '<h1>歷屆理事長清單<span></h1>';
    echo '<button onclick=location.href="./past.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';

    echo '
				<tr>
					<th>姓名</th>
					<th>畢業年屆</th>
					<th>簡歷</th>
					<th>圖片路徑</th>
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['year'].'</td>
					<td style="max-width:50vw;word-break:break-all;">'.$row['resume'].'</td>
					<td style="max-width:15vw;word-break:break-all;">'.$row['img'].'</td>
					
					<td>
						<a href="past.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					    <a href="past.php?action=delete&&id='.$row['id'].'"> 刪除</a>
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
                                <h1 style="color: white">新增歷屆董事長</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="past_exe.php" method="POST" enctype="multipart/form-data">
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>姓名：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>年屆：</td><td><input type="text" name="year" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>理事長圖片：</td><td><input type="text" name="photo" id="photo"  placeholder="google drive img ID"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡歷：</td><td><textarea name="resume" style="width:20vw;height:10vh;"></textarea></td>
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

            $sql = 'SELECT * FROM `past_board` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯歷屆董事長</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="past_exe.php" method="POST" enctype="multipart/form-data">
				                    <table cellpadding="8">
                                        <tr>
                                            <td>姓名：</td><td><input type="hidden" name="id" alt="NAME" value='.$row['id'].'" required>
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>年屆：</td><td><input type="text" name="year" alt="NAME" value="'.$row['year'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>理事長圖片：</td><td><input type="text" name="photo" id="photo" value="'.$row['img'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡歷：</td><td><textarea name="resume" style="width:20vw;height:10vh;">'.$row['resume'].'</textarea></td>
                                        </tr>
                                    <table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./past.php" class="button">回上頁</button>
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `past_board` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除理監事團隊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="past_exe.php" method="POST" enctype="multipart/form-data">
				                    <table cellpadding="8">
                                        <tr>
                                            <td>姓名：</td><td><input type="hidden" name="id" alt="NAME" value='.$row['id'].'" required>
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>年屆：</td><td><input type="text" name="year" alt="NAME" value="'.$row['year'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>理事長圖片：</td><td><input type="text" name="photo" id="photo" value="'.$row['img'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡歷：</td><td><textarea name="resume" style="width:20vw;height:10vh;">'.$row['resume'].'</textarea></td>
                                        </tr>
                                    <table>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./past.php" class="button">回上頁</button>
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
