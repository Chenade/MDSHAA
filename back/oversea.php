<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">
</head>

<body align="center" style="background: none;">
<?php
include('../connect.php');

if(@!$_GET['action']){


    $sql = 'SELECT * FROM `oversea`';
    $run = mysqli_query($con,$sql);

    echo '<h1>海內外聯絡清單<span></h1>';
    echo '<button onclick=location.href="./oversea.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';

    echo '<div class="member_detail">';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<div class="member_content">	

					<div class="oversea_detail" align="left">
						<p>
							<span style=" margin-right:30px;font-size:xx-large;"><strong>'.$row['name'].'</strong></span>
							<span style=" margin-right:30px;">'.$row['place'].'</span>
							
						</p>
						<p align="right">
							<span align="left">
								<a href="oversea.php?action=edit&&id='.$row['id'].'">編輯 | </a>
								<a href="oversea.php?action=delete&&id='.$row['id'].'"> 刪除</a>
							</span>
						</p>
						<hr>
						
							<p>'.$row['email'].'</p>
							<p>'.$row['address'].'</p>
							<p>'.$row['link'].'</p>		
						
					</div>
				</div>
			';

    }
    echo '</div>';

}else{
    switch ($_GET['action']){
        case 'add':
            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">新增海內外聯絡資料</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="oversea_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>姓名：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>地區：</td><td><input type="text" name="place" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電話：</td><td><input type="tel" name="tel" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電子信箱：</td><td><input type="email" name="email" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>地址：</td><td><input type="text" name="address" alt="NAME" required></td>
                                        </tr>
                    
                                        <tr>
                                            <td>社群連結：</td><td><input type="text" name="link" alt="NAME"  placeholder="line:test / wechat:test /" required></td>
                                        </tr>
                                        
                                        </table>
                                            
                                            <input type="hidden" name="action" value="add">
                                            <input type="submit" class="button"> &emsp;
                                            <input type="reset" class="button">
                                </form>
                        
                            </div>
                        </div>
                    </div>';
            break;

        case 'edit':

            $sql = 'SELECT * FROM `oversea` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯海內外聯絡資料</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="oversea_exe.php" method="POST" enctype="multipart/form-data">
					
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>姓名：</td><td><input type="text" name="name" alt="NAME" value="'.$row['name'].'" required>
                                                    <input type="hidden" name="id" alt="NAME" value="'.$row['id'].'" required>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>地區：</td><td><input type="text" name="place" alt="NAME" value="'.$row['place'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電話：</td><td><input type="tel" name="tel" alt="NAME" value="'.$row['tel'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電子信箱：</td><td><input type="email" name="email" alt="NAME" value="'.$row['email'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>地址：</td><td><input type="text" name="address" alt="NAME" value="'.$row['address'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>社群：</td><td><input type="text" name="link" alt="NAME" value="'.$row['link'].'" required></td>
                                        </tr>
                                        
                                
                                    <table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./oversea.php" class="button">回上頁</button>
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `oversea` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除海內外聯絡資料</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                 <form action="oversea_exe.php" method="POST" enctype="multipart/form-data">
					
                                    <table cellpadding="8">
                                    
                                        <tr>
                                            <td>姓名：</td><td><input type="text" name="name" alt="NAME" value="'.$row['name'].'" required>
                                                    <input type="hidden" name="id" alt="NAME" value="'.$row['id'].'" required>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>地區：</td><td><input type="text" name="place" alt="NAME" value="'.$row['place'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電話：</td><td><input type="tel" name="tel" alt="NAME" value="'.$row['tel'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>電子信箱：</td><td><input type="email" name="email" alt="NAME" value="'.$row['email'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>地址：</td><td><input type="text" name="address" alt="NAME" value="'.$row['address'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>社群：</td><td><input type="text" name="link" alt="NAME" value="'.$row['link'].'" required></td>
                                        </tr>
                                        
                                
                                    <table>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./oversea.php" class="button">回上頁</button>
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
