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
		<div><h3 class="title">最 新 消 息</h3></div>
		<div><p class="subtitle">最新消息 > 會務訊息</p></div>
	</div>
	
	<div class="content">
	<?php
		
	
		
		include('./connect.php');
		
		$sql = 'SELECT * FROM `news` WHERE `id` = '.$_GET['id'].'';
		$run = mysqli_query($con,$sql);
		

		while($row = mysqli_fetch_assoc($run)){
			
			echo '
				<div class="alumni_content" ">	
					
					<div style="width:60vw;">
						<p><span style=" margin-right:30px;font-size:xx-large;"><strong>'.$row['title'].'</strong></span></p>
						<hr>
					</div>
					
					<div class="store_photo" style="margin:50px;">
						<img src="https://drive.google.com/uc?id='.$row['img'].'" class="news">
					</div>
					
					<div class="news">
						
						
						<p style="word-break:break-all;">'.$row['content'].' </p>
						<H2 style="" align="center"><a href="'.$row['link'].'" target="_blank">查看連結</a></H2>
						
					</div>
				</div>
			';
			
			
			
		}
	
	?>
	
	<div>
		<button 
			onclick=location.href="news.php"
			style=" border:none; background-image:url(./img/back.png); background-size:100% 100%	; width:25vw; min-width:350px;min-height:100px;">
			</button>
		</div>
	
	</div>
	
	<div w3-include-html="./layout/footer.html"></div>
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>