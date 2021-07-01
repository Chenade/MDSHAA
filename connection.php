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
			<h3 class="title">社 群 連 結</h3>
		</div>
		
		<div>
			<p class="subtitle">校友連結 > 社群連結</p>
		</div>
		
	</div>
	
	
	<div class="flex_table">
	<?php
		
		include('connect.php');
		
		$sql = 'SELECT * FROM `connection`';
		$run = mysqli_query($con,$sql);
		
		
		while($row = mysqli_fetch_assoc($run)){
			
			echo '
				<div class="flex_tr">	
					
					<div class="flex_td">'.$row['place'].'</div>
					<div class="flex_td">'.$row['name'].'</div>
					<div class="flex_td">'.$row['tel'].'</div>
					<div class="flex_td" style="max-width:55vw;">'.$row['address'].'</div>
					<div class="flex_td"><a href="'.$row['link'].'" target="_blank"><img src="./img/instagram.png" class="flex_icon"></a></div>
					
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