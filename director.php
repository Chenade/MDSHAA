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
		
		<div>
			<h3 class="title">理 事 長 的 話</h3>
		</div>
		
		<div>
			<p class="subtitle">關於校友會 > 校友會成員</p>
		</div>
		
	</div>
	
	<?php
		include('connect.php');
		
		$sql = 'SELECT * FROM `director`';
		$run = mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($run);
	?>
	
	<div class="content" style="flex-direction:column; flex-warp:wrap;">
		<div>
			<img src="https://drive.google.com/uc?id=<?php echo $row['img'];?>" style="width:60vw;">
		</div>
		
		<div class="badge_intro">
			<h2><?php echo $row['name'];?></h2>
			<br>
			<p>
				<?php echo $row['word'];?>
			</p>
		</div>		
	</div>
	
	
	
	<div w3-include-html="./layout/footer.html"></div>

</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>