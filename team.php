 <!doctype HTML5>
 
<html>
 
<head>
    <link rel="icon" href="./img/logo-icon.png" />

    <script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
	<title>明道中學校友會</title>
	<style></style>
</head>
 
<body>

    <div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		<div><h3 class="title">服 務 團 隊 成 員</h3></div>
		<div><p class="subtitle">關於校友會 > 校友會成員</p></div>
	</div>


	<?php 
		
		include('connect.php');
		
		$sql = 'SELECT * FROM `team`';
		$run = mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($run);
		
	?>
	<div class="member_detail">
		
		<div class="member_content1"">	
					
			<div align="left">
				<img src="https://drive.google.com/uc?id=<?php echo $row['img'];?>" style="width:300px;">
			</div>

			<div class="member_intro">
				<p><span style=" margin-right:30px;font-size:xx-large;"><strong><?php echo $row['name'];?></strong></span></p>
				<hr>
				<table>
				
							
					<tr><td><p>現任：</p></td><td><p><?php echo $row['job'];?></p></td></tr>
					<tr><td><p>電子信箱：</p></td><td><p><?php echo $row['email'];?></p></td></tr>
				</table>
						
			</div>
		</div>
	
	</div>
	<br><br>
	<div class="member_detail">

	<?php

		while($row = mysqli_fetch_assoc($run)){
			if ($row['id'] == "2") {continue;}
			echo '
				<div class="member_content">	
					
					<div align="left">
						<img src="https://drive.google.com/uc?id='.$row['img'].'" style="width:200px;">
					</div>
					
					
					
					<div class="member_intro">
						<p><span style=" margin-right:30px;font-size:xx-large;"><strong>'.$row['name'].'</strong></span></p>
						<hr>
						<table>
							
							
							<tr><td><p>現任：</p></td><td><p>'.$row['job'].'</p></td></tr>
							<tr><td><p>電子信箱：</p></td><td><p>'.$row['email'].'</p></td></tr>
						</table>
						
					</div>
				</div>
			';
			
		}
	
	?>
	</div>
<br>
    <div w3-include-html="./layout/footer.html"></div>
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>