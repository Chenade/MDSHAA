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
		<div><h3 class="title">紀 念 品 專 區</h3></div>
		<div><p class="subtitle">校友服務 > 明道人福利社</p></div>
	</div>
		
	<div class="content">	
		
		<?php
			include('./connect.php');
			
			$sql = 'SELECT * FROM `souvenir`';
			$run = mysqli_query($con,$sql);
			
			while( $row = mysqli_fetch_assoc($run) ){
				
				echo '
					<div class="album">
						<p>'.$row['name'].'</p>
						<div><img src="https://drive.google.com/uc?id='.$row['img'].'" class="album_cover"></div>
						<p style="color:red">$'.$row['price'].'<button style="margin-left:20px;">查看更多</button></p>
					</div>';
				
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