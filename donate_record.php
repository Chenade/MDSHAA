<!doctype HTML5>

<html>

<head><link rel="icon" href="./img/logo-icon.png" />
    <script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
    <!--	<script type="text/javascript" src="slidemenu.js"></script>-->
    <title>明道中學校友會</title>
    <style></style>
</head>

<body>

	<div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>

		<div>
			<h3 class="title">捐 款 芳 名 錄</h3>
		</div>

		<div>
			<p class="subtitle">愛校捐款 > 捐款芳名錄 </p>
		</div>

	</div>

	<div class="flex_table">

		<div class="flex_tr"  style="width: 60vw; border-bottom: solid black 2px;" >

			<div class="flex_td" align="left" style="width:20vw; max-width:200px;"><b>捐款人</b></div>
			<div class="flex_td" style="width:20vw; max-width:200px;"><b>捐款金額</b></div>
			<div class="flex_td" style="width:20vw; max-width:200px;"><b>捐款用途</b></div>
			<div class="flex_td" style="width:20vw; max-width:200px;"><b>捐款方式</b></div>

		</div>

		<?php

		include('./connect.php');

		$sql = 'SELECT * FROM `donate`';
		$run = mysqli_query($con,$sql);


		while($row = mysqli_fetch_assoc($run)){
			echo '
					<div class="flex_tr"  style="width: 60vw;"  data-id="'.$row['id'].'">	
						
						<div class="flex_td" style="width:20vw; max-width:200px;">'.$row['name'].'</div>
						<div class="flex_td" style="width:20vw; max-width:200px;">'.$row['amount'].'</div>
						<div class="flex_td" style="width:20vw; max-width:200px;">'.$row['target'].'</div>
						<div class="flex_td" style="width:20vw; max-width:200px;">'.$row['mehtod'].'</div>
						
					</div>
				';

		}

		?>


	</div>


	<div align="center" style="margin-bottom: 1vw;">
		<button class="button" onclick=location.href="./donate.php">如何捐款</button>
	</div>


	<div w3-include-html="./layout/footer.html"></div>

</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>