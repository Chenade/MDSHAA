 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	<script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
	<script type="text/javascript" src="slidemenu.js"></script>
	<title>明道中學校友會</title>
	<style></style>
</head>
 
<body><div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		
		<div>
			<h3 class="title">活 動 花 絮</h3>
		</div>
		
		<div>
			<p class="subtitle">最新消息 > 活動花絮</p>
		</div>
		
	</div>	
	
	
	<div class="content">	
		
		<?php
			include('./connect.php');
			
			$sql = 'SELECT * FROM `album`';
			$run = mysqli_query($con,$sql);
			
			while( $row = mysqli_fetch_assoc($run) ){
				
				echo '
					
					<div class="album">
						
						<p>'.$row['name'].'</p>
						<a href="'.$row['link'].'" target="_blank"><div><img src="https://drive.google.com/uc?id='.$row['cover'].'" class="album_cover"></div></a>
						<p>'.$row['date'].'</p>
						
						
						
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