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
		<div><h3 class="title">最 新 會 訊</h3></div>
		<div><p class="subtitle">明道人會訊 > 最新會訊</p></div>
	</div>
	
	<div class="content">	
	
		<?php
		
			include('./connect.php');
			
			$sql = 'SELECT * FROM `info`';
			$run = mysqli_query($con,$sql);
			
			while($row = mysqli_fetch_assoc($run)){
				echo '
					
						
						<div style="width:70vw;">
							
							<div class="info">
								<a href="'.$row['link'].'" target="_blank">	
									<img   class="info"  src="https://drive.google.com/uc?id='.$row['img'].'" style="width:65vw;">
								</a>
							</div>
							
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