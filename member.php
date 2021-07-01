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
		<div><h3 class="title">理 監 事 成 員</h3></div>		
		<div><p class="subtitle">關於校友會 > 理監事團隊</p></div>
	</div>

	
	<div class="member_detail">
	<?php
		
		include('connect.php');
		
		$sql = 'SELECT * FROM `board_member`';
		$run = mysqli_query($con,$sql);
		

		while($row = mysqli_fetch_assoc($run)){
			
			echo '
				<div class="member_content">	
					
					<div align="left">
						<img src="https://drive.google.com/uc?id='.$row['img'].'" style="width:200px;">
					</div>
					
					
					
					<div class="member_intro">
						<p><span style=" margin-right:30px;font-size:xx-large;"><strong>'.$row['name'].'</strong></span><span>'.$row['job'].'</span></p>
						<hr>
						<table>
							<tr><td style="white-space:nowrap;"><p>畢業年屆：</p></td><td><p>'.$row['year'].'</p></td></tr>
							<tr><td><p>最高學歷：</p></td><td style="white-space:wrap;"><p>'.$row['graduate'].'</p></td></tr>
							<tr><td><p>現任：</p></td><td><p>'.$row['company'].'</p></td></tr>
						</table>
						
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