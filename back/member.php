<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
    include('../connect.php');

    if(@!$_GET['action']){
        $sql = 'SELECT * FROM `board_member`';
        $run = mysqli_query($con,$sql);

        echo '<h1>理監事團隊清單<span></h1>';
        echo '<button onclick=location.href="./member.php?action=add" class="button_xs">新增</button> &emsp;';
        echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
        echo '<table align="center" cellpadding="10">';

        echo '
				<tr>
					<th>姓名</th>
					<th>畢業年屆</th>
					<th>最高學歷</th>
					<th>現任職位</th>
					<th>公司名稱</th>
					<th>操作</th>
				</tr>
			';
        while($row = mysqli_fetch_assoc($run)){

            echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['year'].'</td>
					<td>'.$row['graduate'].'</td>
					<td>'.$row['job'].'</td>
					<td>'.$row['company'].'</td>
					
					<td>
					
					<a href="member.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="member.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                            <h1 style="color: white">新增理監事團隊</h1>
                        </div>
                    
                        <div align="center" style="margin: 5vh;">
                    
                            <form action="member_exe.php" method="POST" enctype="multipart/form-data">
                    
                                <table cellpadding="8">
                                    <tr>
                                        <td>姓名：</td><td><input type="text" name="name" alt="NAME" required></td>
                                    </tr>
                    
                                    <tr>
                                        <td>職稱：</td><td><input type="text" name="job" alt="TEL" required></td>
                                    </tr>
                    
                                    <tr>
                                        <td>畢業年屆：</td><td><input type="text" name="year" alt="NAME" required></td>
                                    </tr>
                    
                                    <tr>
                                        <td>最高學歷：</td><td><input type="text" name="graduate" alt="TEL" required></td>
                                    </tr>
                    
                    
                                    <tr>
                                        <td>圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID"></td>
                                    </tr>
                    
                    
                                    <tr>
                                        <td>現任職位：</td><td><input type="text" name="company" alt="TEL" required></td>
                                    </tr>
                    
                                    <table>
                                        <input type="hidden" name="action" value="add">
                    
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./member.php" class="button">回上頁</button>
                            </form>
                    
                        </div>
                    </div>
                </div>';
                break;

            case 'edit':

                $sql = 'SELECT * FROM `board_member` WHERE `id` = "' . $_GET['id'] . '"';
                $run = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($run);


                echo '
                <div class="bodY" style="height: 100vh;">
                    <div class="box">
                        <div class="title">
                            <h1 style="color: white">編輯理監事團隊</h1>
                        </div>
                    
                        <div align="center" style="margin: 5vh;">
                            <form action="member_exe.php" method="POST" enctype="multipart/form-data">
                                <table cellpadding="8">
                                    <tr>
                                        <td>姓名：</td><td>
                                        <input type="hidden" name="id" alt="NAME" value="'. $row['id'].'">
                                        <input type="text" name="name" alt="NAME" value="'. $row['name'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>職稱：</td><td><input type="text" name="job" alt="job" value="'. $row['job'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>畢業年屆：</td><td ><input type="text" name="year"  alt="NAME" value="'. $row['year'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>最高學歷：</td><td><input type="text" name="graduate" alt="TEL" value="'. $row['graduate'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>圖片：</td><td><input type="text" name="photo" id="photo"  value="'. $row['img'].'" placeholder="google drive img ID" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>現任職位：</td><td><input type="text" name="company" alt="TEL" value="'. $row['company'].'" required></td>
                                    </tr>
                                    
                                <table>
                                    <input type="hidden" name="action" value="edit">
                                    <input type="submit" class="button"> &emsp;
                                    <button onclick=location.href="./member.php" class="button">回上頁</button>
                            </form>
                        </div>
                    </div>
                </div>';
                break;

            case 'delete':

                $sql = 'SELECT * FROM `board_member` WHERE `id` = "' . $_GET['id'] . '"';
                $run = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($run);


                echo '
                <div class="bodY" style="height: 100vh;">
                    <div class="box">
                        <div class="title">
                            <h1 style="color: white">刪除理監事團隊</h1>
                        </div>
                    
                        <div align="center" style="margin: 5vh;">
                            <form action="member_exe.php" method="POST" enctype="multipart/form-data">
                                <table cellpadding="8">
                                    <tr>
                                        <td>姓名：</td><td>
                                        <input type="hidden" name="id" alt="NAME" value="'. $row['id'].'">
                                        <input type="text" name="name" alt="NAME" value="'. $row['name'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>職稱：</td><td><input type="text" name="job" alt="job" value="'. $row['job'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>畢業年屆：</td><td ><input type="text" name="year"  alt="NAME" value="'. $row['year'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>最高學歷：</td><td><input type="text" name="graduate" alt="TEL" value="'. $row['graduate'].'" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>圖片：</td><td><img src="https://drive.google.com/uc?id='. $row['img'].'" style="width:20vw;"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>現任職位：</td><td><input type="text" name="company" alt="TEL" value="'. $row['company'].'" required></td>
                                    </tr>
                                    
                                <table>
                                    <input type="hidden" name="action" value="delete">
                                    <input type="submit" value="確認刪除" class="button"> &emsp;
                                    <button onclick=location.href="./member.php" class="button">回上頁</button>
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