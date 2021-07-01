<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){

    $sql = 'SELECT * FROM `alumni`';
    $run = mysqli_query($con,$sql);

    echo '<h1>傑出校友清單<span></h1>';
    echo '<button onclick=location.href="./alumni.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';

    echo '
				<tr>
					<th>姓名</th>
					<th>屆別</th>
					<th>簡歷</th>
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['year'].'</td>
					<td style="max-width:50vw;word-break:break-all;">'.$row['honor'].'</td>
					<td>
					
					<a href="alumni.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="alumni.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增傑出校友</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="alumni_exe.php" method="POST" enctype="multipart/form-data">
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>姓名：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>屆別：</td><td><input type="text" name="year" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>校友圖片：</td><td><input type="text" name="photo" id="photo"  placeholder="google drive img ID"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡歷：</td><td><textarea name="honor" style="width:20vw;height:10vh;"></textarea></td>
                                        </tr>
                                        
                                
                                    <table>
                                        <input type="hidden" name="action" value="add">
                                    <input type="submit" class="button"> &emsp;;
                                     <input type="reset" class="button">
                                </form>                               
                        
                            </div>
                        </div>
                    </div>';
            break;

        case 'edit':

            $sql = 'SELECT * FROM `alumni` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯傑出校友</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="alumni_exe.php" method="POST" enctype="multipart/form-data">
                                    <table cellpadding="8">
                                        <tr>
                                            <td>姓名：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required>
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>畢業年屆：</td><td><input type="text" name="year" value="'.$row['year'].'"  alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>校友圖片：</td><td><input type="text" name="photo" id="photo"  value="'.$row['img'].'" required  placeholder="google drive img ID"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡歷：</td><td><textarea name="honor" style="width:25vw;height:40vh;"> '.$row['honor'].'</textarea></td>
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

            $sql = 'SELECT * FROM `alumni` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除傑出校友</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="alumni_exe.php" method="POST" enctype="multipart/form-data">
				                    <table cellpadding="8">
                                        <tr>
                                            <td>姓名：</td>
                                            <td><input type="hidden" name="id" alt="ID" value="'.$row['id'].'" >
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" ></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>畢業年屆：</td><td><input type="text" name="year" value="'.$row['year'].'"  alt="NAME" ></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>校友圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['img'].'" style="width:20vw;"></td>
                                        </tr>
                                        
                                         <tr>
                                             <td>簡歷：</td><td><textarea name="honor" style="width:25vw;height:40vh;"> '.$row['honor'].'</textarea></td>
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

</body>
</html>
