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
		
		<div>
			<h3 class="title">傑 出 校 友</h3>
		</div>
		
		<div>
			<p class="subtitle">關於校友會 > 傑出校友</p>
		</div>
		
	</div>
	
	<div class="store_detail">
	<?php
		
	
		
		include('./connect.php');
		
		$sql = 'SELECT * FROM `alumni` ORDER BY `id` DESC';
		$run = mysqli_query($con,$sql);
		

		while($row = mysqli_fetch_assoc($run)){
			
			echo '
				<div class="alumni_content">	
					
					<div class="store_photo">
						<img src="https://drive.google.com/uc?id='.$row['img'].'" class="store">
					</div>
					
					<div class="alumni_intro">
						<p><span style=" margin-right:30px;font-size:xx-large;"><strong>'.$row['name'].'</strong></span><span>'.$row['year'].'</span></p>
						<hr>
						
						<p style="word-break:break-all;">'.mb_substr($row['honor'],1,115,"UTF-8").' &nbsp; 
						<a href="alumni_single.php?id='.$row['id'].'">...more</a>
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