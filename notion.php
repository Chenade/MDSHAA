 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	 <meta charset="utf-8">
	<script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
	<script type="text/javascript" src="slidemenu.js"></script>
	<title>明道中學校友會</title>
	<style></style>
</head>
 
<body><div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		<div><h3 class="title">明 道 人 動 態</h3></div>
		<div><p class="subtitle">明道人資料庫 > 明道人動態</p></div>
	</div>

	<div class="store_detail">
	<?php	
		
		include('./connect.php');
		
		$sql = 'SELECT * FROM `notion` ORDER BY `id` DESC';
		$run = mysqli_query($con,$sql);
		

		while($row = mysqli_fetch_assoc($run)){
			
			echo '
				<div class="alumni_content">	
					
					<div class="store_photo">
						<img src="https://drive.google.com/uc?id='.$row['img'].'" class="store">
					</div>
					
					<div class="alumni_intro">
						<p><span style=" margin-right:30px;font-size:xx-large;"><strong>'.$row['title'].'</strong></span></p>
						<hr>
						
						<p><span style=" margin-right:30px;font-size:x-large;"><strong>'.$row['name'].'</strong></span><span>'.$row['job'].'</span></p>
						
						<p style="word-break:break-all;">'.$row['detail'].'
						</p>
						
					</div>
				</div>
			';
			
			//echo '<hr>';
			
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