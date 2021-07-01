 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	<script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
	<script type="text/javascript" src="slidemenu.js"></script>
	<title>明道中學校友會</title>
	<style></style>
</head>
 
<body>

	<div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		<div><h3 class="title">海 內 外 聯 絡 處</h3></div>
		<div><p class="subtitle">校友連結 > 海內外聯絡處</p></div>
	</div>
	
	<div class="flex_table" style="">

        <div class="flex_tr"  style="border-bottom: solid black 2px; width: 90vw;" >

            <div class="flex_td" style="width:10vw; max-width:100px;"><b>地區</b></div>
            <div class="flex_td" style="width:15vw; max-width:180px;"><b>聯絡窗口</b></div>
            <div class="flex_td" style="width:20vw; max-width:120px;"><b>電話</b></div>
            <div class="flex_td" style="margin-left: 2vw;width:25vw;  min-width:150px; max-width:300px;"><b>社群連結</b></div>
            <div class="flex_td" style="width:30vw; min-width:400px; max-width:600px;"><b>地址</b></div>


        </div>
	<?php
		
		include('./connect.php');
		
		$sql = 'SELECT * FROM `oversea`';
		$run = mysqli_query($con,$sql);
		
		
		while($row = mysqli_fetch_assoc($run)){

			echo '
				<div class="flex_tr" style="width: 90vw;">	
					
					<div class="flex_td" style="width:10vw; max-width:100px;">'.$row['place'].'</div>
					<div class="flex_td" style="width:10vw; max-width:120px;">'.$row['name'].'</div>
					<div class="flex_td" style="width:20vw; max-width:120px;">'.$row['tel'].'</div>
					<div class="flex_td" style="margin-left: 2vw;width:25vw; min-width:150px; max-width:300px;">'.$row['link'].'</div>
					<div class="flex_td" style="width:30vw;  min-width:400px; max-width:600px;">'.$row['address'].'</div>
					
					
					
				</div>
			';
			
		}
	
	?>
	</div>
	
	<div w3-include-html="./layout/footer.html"></div>
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>