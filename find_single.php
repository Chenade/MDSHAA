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
			<h3 class="title">尋  人  啟  事</h3>
		</div>

		<div>
			<p class="subtitle">明道人幫明道人 </p>
		</div>

	</div>

	<div align="center" style="margin-bottom: 1vw;">
		<button class="button" onclick=location.href="./find.php">回上頁</button>
	</div>

	<div class="flex_table">



		<?php

		include('./connect.php');

		$sql = 'SELECT * FROM `find` WHERE `id` like "'.$_GET['id'].'"';
		$run = mysqli_query($con,$sql);


		while($row = mysqli_fetch_assoc($run)){
			echo '<div class="flex_tr"  style="width: 60vw; border-bottom: solid black 2px; font-size: x-large" ><div class="flex_td"><b>尋人啟事 #'.$row['id'].' </b></div></div>';
			echo '
					<div class="flex_tr find_"  style="width: 60vw;"  data-id="'.$row['id'].'">	
						<div class="flex_td" style="width:10vw; max-width:150px;"><b>申請人</b></div>
						<div class="flex_td" style="width:50vw; max-width:750px; justify-content: flex-start">'.$row['from_name'].'</div>
					</div>
					
					<div class="flex_tr find_"  style="width: 60vw;"  data-id="'.$row['id'].'">	
						<div class="flex_td" style="width:10vw; max-width:150px;"><b>尋找對象</b></div>
						<div class="flex_td" style="width:50vw; max-width:750px; justify-content: flex-start">'.$row['to_name'].'</div>
					</div>
					
					<div class="flex_tr find_"  style="width: 60vw;"  data-id="'.$row['id'].'">	
						<div class="flex_td" style="width:10vw; max-width:150px;"><b>留言</b></div>
						<div class="flex_td" style="width:50vw; max-width:750px; justify-content: flex-start; word-break: break-all">'.$row['comment'].'</div>
					</div>
					
					
					<div class="flex_tr find_"  style="width: 60vw;"  data-id="'.$row['id'].'">	
						<div class="flex_td" style="width:10vw; max-width:150px;"><b>聯絡方式</b></div>
						<div class="flex_td" style="width:50vw; max-width:750px; justify-content: flex-start">'.$row['contact'].'</div>
					</div>
					
					<div class="flex_tr find_"  style="width: 60vw;"  data-id="'.$row['id'].'">	
						<div class="flex_td" style="width:10vw; max-width:150px;"><b>張貼時間</b></div>
						<div class="flex_td" style="width:50vw; max-width:750px; justify-content: flex-start">'.$row['time'].'</div>
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