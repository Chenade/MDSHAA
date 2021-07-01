<!doctype HTML5>

<html>


<head>
    <link rel="stylesheet" href="../css/back.css">

</head>

<body align="center">
<?php
include('../connect.php');

if(@!$_GET['action']){

    if(@$_GET['category'])
        $sql = 'SELECT * FROM `map` WHERE `category` like "'.$_GET['category'].'"';
    else
        $sql = 'SELECT * FROM `map` ORDER BY `category` DESC';


    $run = mysqli_query($con,$sql);

    echo '<h1>明道人地圖清單<span></h1>';
    echo '<button onclick=location.href="./map.php?action=add" class="button_xs">新增</button> &emsp;';
    echo '<button onclick=location.href="./" class="button_xs">回選單</button><hr>';

    echo '<select id="category">';
    echo '<option value="">ALL</option>';

    if($_GET['category'] == 'food') echo '<option value="food" selected>food</option>';
    else echo '<option value="food">food</option>';

    if($_GET['category'] == 'entertainment') echo '<option value="entertainment" selected>entertainment</option>';
    else echo '<option value="entertainment">entertainment</option>';

    echo '</select>&emsp;';
    echo '<button id="output">匯出.csv 檔案</button>';

    echo '<table id="map" align="center" cellpadding="10">';

    echo '
				<tr>
					<th>類別</th>
					<th>店名</th>
					<th>地址</th>
					<th>畢業校友</th>
					<th>畢業年分</th>
					<th>操作</th>
				</tr>
			';

    echo '
				<tr style="display: none;">
					<th>category</th>
					<th>name</th>
					<th>address</th>
					<th>alumni</th>
					<th>graduate</th>
					<th></th>
				</tr>
			';
    while($row = mysqli_fetch_assoc($run)){

        echo '
				<tr>	
					
					<td>'.$row['category'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['alumni'].'</td>
					<td>'.$row['graduate'].'</td>
										
					<td>
					
					<a href="map.php?action=edit&&id='.$row['id'].'">編輯 | </a>
					<a href="map.php?action=delete&&id='.$row['id'].'"> 刪除</a>
					
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
                                <h1 style="color: white">新增明道人地圖</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                        
                                <form action="map_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                        <tr>
                                            <td>類別：</td>
                                            <td>
                                                <select name="category">
                                                    <option value="food">餐廳</option>
                                                    <option value="food">餐廳</option>
                                                    <option value="food">餐廳</option>
                                                    <option value="food">餐廳</option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>店名：</td><td><input type="text" name="name" alt="NAME" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>地址：</td><td><input type="text" name="address" alt="TEL" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>畢業校友：</td><td><input type="text" name="alumni" alt="alumni" required></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>畢業年分：</td><td><input type="number" name="graduate" alt="TEL" required></td>
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

            $sql = 'SELECT * FROM `map` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);

            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">編輯歷屆董事長</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="map_exe.php" method="POST" enctype="multipart/form-data">
						
                                    <table cellpadding="8">
                                        <tr>
                                            <td>類別：<input type="hidden" name="id" alt="NAME" value="'. $row['id'].'" required></td>
                                            <td>
                                                <select name="category">
                                                    <option value="food">餐廳</option>
                                                    <option value="food">餐廳</option>
                                                    <option value="food">餐廳</option>
                                                    <option value="food">餐廳</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>店名：</td><td><input type="text" name="name" value="'. $row['name'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr>
                                            <td>地址：</td><td><input type="text" name="address" value="'. $row['address'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr>
                                            <td>畢業校友：</td><td><input type="text" name="alumni" value="'. $row['alumni'].'" alt="alumni" required></td>
                                        </tr>
                                        <tr>
                                            <td>畢業年分：</td><td><input type="number" name="graduate" value="'. $row['graduate'].'" alt="graduate" required></td>
                                        </tr>
                                    </table>
                                        <input type="hidden" name="action" value="edit">
                                        <input type="submit" class="button"> &emsp;
                                        <input type="reset" class="button">
                                </form>
                            </div>
                        </div>
                    </div>';
            break;

        case 'delete':

            $sql = 'SELECT * FROM `map` WHERE `id` = "'.$_GET['id'].'"';
            $run = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($run);


            echo '
                    <div class="bodY" style="height: 100vh;">
                        <div class="box">
                            <div class="title">
                                <h1 style="color: white">刪除明道人地圖</h1>
                            </div>
                        
                            <div align="center" style="margin: 5vh;">
                                <form action="map_exe.php" method="POST" enctype="multipart/form-data">
				
                                    <table cellpadding="8">
                                        <tr>
                                            <td>類別：<input type="hidden" name="id" alt="NAME" value="'.$row['id'].'" required></td>
                                            <td>
                                                '.$row['category'].'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>店名：</td><td><input type="text" name="name" value="'.$row['name'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr>
                                            <td>地址：</td><td><input type="text" name="address" value="'.$row['address'].'" alt="TEL" required></td>
                                        </tr>
                                        <tr>
                                            <td>畢業校友：</td><td><input type="text" name="alumni" value="'.$row['alumni'].'" alt="alumni" required></td>
                                        </tr>
                                        <tr>
                                            <td>畢業年分：</td><td><input type="number" name="graduate" value="'.$row['graduate'].'" alt="graduate" required></td>
                                        </tr>
                                    </table>
                                        <input type="hidden" name="action" value="delete">
                                        <input type="submit" class="button"> &emsp;
                                        <input type="reset" class="button">
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


<script src="../js/jquery-3.4.1.min.js"></script>
<script>

    $("#category").change(function () {
        window.location.href="map.php?category=" + $("#category").val();
    });

    function download_csv(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV FILE
        csvFile = new Blob([csv], {type: "text/csv"});
        downloadLink = document.createElement("a");
        downloadLink.download = filename;
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
        downloadLink.click();
    }

    function export_table_to_csv(html, filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");

        for (var i = 1; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll("td, th");

            for (var j = 0; j < cols.length-1; j++)
                row.push(cols[j].innerText);

            csv.push(row.join(","));
        }

        // Download CSV
        download_csv(csv.join("\n"), filename);
    }

    document.getElementById("output").addEventListener("click", function () {
        var html = document.querySelector("table").outerHTML;
        export_table_to_csv(html, "table.csv");
    });


</script>