<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){
    $sql = 'SELECT * FROM `souvenir`';
    $run = mysqli_query($con,$sql);

    echo '<h1>紀念品清單<span></h1>';
    echo '<button onclick=location.href="./souvenir.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';
    echo '<table align="center" cellpadding="10">';

    echo '
				<tr>
					<th>名稱</th>
					<th>售價</th>
					<th>簡介</th>
					<th>庫存數量</th>
					<th>操作</th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['name'].'</td>
					<td>'.$row['price'].'</td>
					<td style="max-width:50vw;word-break:break-all;">'.$row['intro'].'</td>
					<td>'.$row['remain_count'].'</td>
					
					<td>
					
					<a href="souvenir.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="souvenir.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增紀念品</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="souvenir_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                
                                        <tr>
                                            <td>名稱：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡介：</td><td><textarea name="intro" style="width:20vw;height:10vh;"></textarea></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>售價：</td><td><input type="number" name="price" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>商品圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>庫存數量	：</td><td><input type="number" name="remain_count" alt="NAME" required></td>
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

            $sql = 'SELECT * FROM `souvenir` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc(($run));


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯紀念品</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="souvenir_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                        
                                        <tr>
                                            <td>名稱：</td><td><input type="text" name="name" alt="NAME" value="'.$row['name'].'" required>
                                                <input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>簡介：</td><td><textarea name="intro" style="width:20vw;height:10vh;">'.$row['intro'].'</textarea></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>售價：</td><td><input type="number" name="price" alt="NAME" value="'.$row['price'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>商品圖片：</td><td><input type="text" name="photo" id="photo" placeholder="google drive img ID" value="'.$row['img'].'" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>庫存數量	：</td><td><input type="number" name="remain_count" value="'.$row['remain_count'].'" alt="NAME" required></td>
                                        </tr>                                        
                   
                                    <table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <button onclick=location.href="./souvenir.php" class="button">回上頁</button>
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `souvenir` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc(($run));


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除紀念品</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="souvenir_exe.php" method="POST" enctype="multipart/form-data">

                                    <table cellpadding="8">
                        
                                        <tr>
                                            <td>名稱：</td><td><input type="text" name="name" alt="NAME" value="'.$row['name'].'" required>
                                                <input type="hidden" name="id" alt="ID" value="'.$row['id'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>簡介：</td><td><textarea name="intro" style="width:20vw;height:10vh;">'.$row['intro'].'</textarea></td>
                                        </tr>
                        
                                        <tr>
                                            <td>售價：</td><td><input type="number" name="price" alt="NAME" value="'.$row['price'].'" required></td>
                                        </tr>
                        
                                        <tr>
                                            <td>商品圖片：</td><td><img src="https://drive.google.com/uc?id='.$row['img'].'" style="width:15vw;"/></td>
                                        </tr>
                        
                                        <tr>
                                            <td>庫存數量	：</td><td><input type="number" name="remain_count" value="'.$row['remain_count'].'" alt="NAME" required></td>
                                        </tr>
                                        
                                        <table>
                                            <input type="hidden" name="action" value="delete">
                                            <input type="submit" class="button"> &emsp;
                                            <button onclick=location.href="./souvenir.php" class="button">回上頁</button>
                   
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
