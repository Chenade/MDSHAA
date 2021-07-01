 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	 <meta charset="utf-8">
	<script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
	<script type="text/javascript" src="slidemenu.js"></script>
	<title>明道中學校友會</title>
	<style></style>
</head>
 
<body>

	<div align="center" class="banner">
		<a id="top"></a>
		
		<div>
			<h3 class="title">傑 出 校 友</h3>
		</div>
		
		<div>
			<p class="subtitle">關於校友會 > 傑出校友</p>
		</div>
		
	</div>
	
	
	<div class="content1">
	<?php
		
	
		
		include('./connect.php');
		
		$sql = 'SELECT * FROM `alumni` WHERE `id` = '.$_GET['id'].'';
		$run = mysqli_query($con,$sql);
		

		while($row = mysqli_fetch_assoc($run)){
			
			echo '
				<div class="alumni_content" ">	
					
					<div style="width:60vw;">
						<p><span style=" margin-right:30px;font-size:xx-large;"><strong>'.$row['name'].'</strong></span><span>'.$row['year'].'</span></p>
						<hr>
					</div>
					
					<div class="store_photo" style="margin:50px;">
						<img src="https://drive.google.com/uc?id='.$row['img'].'" style="max-width:40vw; max-height: 40vh;width: auto;height: auto;">
					</div>
					
					<div class="news">
						
						
						<p style="word-break:break-all;">'.$row['honor'].' &nbsp; 
						
						</p>
						
					</div>
				</div>
			';
			
			
			
		}
	
	?>
	

	
	</div>

    <div align="center" style="margin-bottom: 1vw;">
        <button class="button" onclick=location.href="./alumni.php">回上頁</button>
    </div>
	
	<div w3-include-html="./layout/footer.html"></div>

</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>