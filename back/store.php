<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
    include('../connect.php');

    if(@!$_GET['action']){
        $sql = 'SELECT * FROM `store`';
        $run = mysqli_query($con,$sql);

        echo '<h1>優惠店家清單<span></h1>';
        echo '<button onclick=location.href="./store.php?action=add" class="button_xs">新增</button> &emsp;';
        echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
        echo '<table align="center" cellpadding="10">';

        echo '
				<tr>
					<th>店名</th>
					<th>地址</th>
					<th>電話</th>
					<th>優惠</th>
					<th>操作</th>
				</tr>
			';
        while($row = mysqli_fetch_assoc($run)){

            echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['tel'].'</td>
					<td>'.$row['discount'].'</td>
					
					<td>
					
					<a href="store.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="store.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增優惠店家</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="store_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                        <tr>
                                            <td>店名：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                                        <tr>
                                            <td>上傳圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID"></td>
                                        </tr>
                                        <tr>
                                            <td>連絡電話：</td><td><input type="tel" name="tel" alt="TEL" required></td>
                                        </tr>
                                        <tr><td>地址：</td><td><input type="text" name="address" alt="TEL" required></td>
                                        </tr>
                                        <tr><td>獨家優惠：</td><td><input type="text" name="discount" alt="TEL" required></td>
                                        </tr>
                                        <tr>
                                            <td>網址連結：</td><td><input type="url" name="website" alt="TEL"></td>
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

                $sql = 'SELECT * FROM `store` WHERE `id` = "'.$_GET['id'].'"';
                $run = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($run);


                echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯理監事團隊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="store_exe.php" method="POST" enctype="multipart/form-data">
				                    <table cellpadding="8">
                                        <tr>
                                            <td>店名：</td><td><input type="hidden" name="id" alt="NAME" value="'.$row['id'].'" required>
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        <tr>
                                            <td>上傳圖片：</td><td><input type="text" name="photo" id="photo" value="'.$row['photo'].'"  placeholder="google drive img ID" required></td>
                                        </tr>
                                        <tr>
                                            <td>連絡電話：</td><td><input type="tel" name="tel" value="'.$row['tel'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr><td>地址：</td><td><input type="text" name="address" value="'.$row['address'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr><td>獨家優惠：</td><td><input type="text" name="discount" value="'.$row['discount'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr>
                                            <td>網址連結：</td><td><input type="url" name="website" value="'.$row['website'].'" alt="TEL"></td>
                                        </tr>
                                    <table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./store.php" class="button">回上頁</button>
                                </form>
                            </div>
                        </div>
                    </div>';
                break;

            case 'delete':

                $sql = 'SELECT * FROM `store` WHERE `id` = "'.$_GET['id'].'"';
                $run = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($run);


                echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除理監事團隊</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="store_exe.php" method="POST" enctype="multipart/form-data">
								    <table cellpadding="8">
                                        <tr>
                                            <td>店名：</td><td><input type="hidden" name="id" alt="NAME" value="'.$row['id'].'" required>
                                            <input type="text" name="name" alt="NAME" value="'.$row['name'].'" required></td>
                                        </tr>
                                        <tr>
                                            <td>上傳圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['photo'].'" style="width:20vw;"></td>
                                        </tr>
                                        <tr>
                                            <td>連絡電話：</td><td><input type="tel" name="tel" value="'.$row['tel'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr><td>地址：</td><td><input type="text" name="address" value="'.$row['address'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr><td>獨家優惠：</td><td><input type="text" name="discount" value="'.$row['discount'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr>
                                            <td>網址連結：</td><td><input type="url" name="website" value="'.$row['website'].'" alt="TEL"></td>
                                        </tr>
                                    <table>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./store.php" class="button">回上頁</button>
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