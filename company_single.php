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
			<h3 class="title">校  友  徵  才</h3>
		</div>

		<div>
			<p class="subtitle">明道人幫明道人 </p>
		</div>

	</div>

	<div class="flex_table" style="margin-bottom: 0;">

		<div class="flex_tr"  style="width: 60vw; border-bottom: solid black 2px;" >

			<div class="flex_td" align="left" style="width:10vw; max-width:150px;"><b>公司名稱</b></div>
			<div class="flex_td" style="width:10vw; max-width:120px;"><b>職位名稱</b></div>
			<div class="flex_td" style="width:20vw; max-width:120px;"><b>科系要求</b></div>
			<div class="flex_td" style="width:20vw; max-width:150px;"><b>聯絡人</b></div>
			<div class="flex_td" style="width:20vw; max-width:150px;"><b>聯絡電話</b></div>

		</div>

		<?php

		include('./connect.php');

		$sql = 'SELECT * FROM `company request` WHERE `id` like "'.$_GET['id'].'"';
		$run = mysqli_query($con,$sql);


		while($row = mysqli_fetch_assoc($run)){

			$sql_co = 'SELECT * FROM `company` WHERE `id` like "'.$row['company'].'"';
			$run_co = mysqli_query($con,$sql_co);
			$row_co = mysqli_fetch_assoc($run_co);

			echo '
					<div class="flex_tr"  style="width: 60vw;" class="company" data-id="'.$row['id'].'">	
						
						<div class="flex_td" align="left" style="width:10vw; max-width:150px;">'.$row_co['name'].'</div>
						<div class="flex_td" style="width:10vw; max-width:120px;">'.$row['job'].'</div>
						<div class="flex_td" style="width:20vw; max-width:120px;">'.$row['department'].'</div>
						<div class="flex_td" style="width:20vw; max-width:150px;">'.$row_co['person'].'</div>
						<div class="flex_td" style="width:20vw; max-width:150px;">'.$row_co['tel'].'</div>
						
					</div>
				';



			echo '</div>';


			echo '<div class="flex_table" style="margin-bottom: 0; ">';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:50vw; max-width:150px; font-size: x-large;"><b>條件要求</b></div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">學歷要求</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row['education'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">工作經驗</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row['experience'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">語言能力</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row['language'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">擅長工具</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row['tools'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">工作技能</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row['skills'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">其他條件</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row['other'].'</div>';
				echo '</div>';

			echo '</div>';
		echo '<hr style="width: 60vw;">';
			echo '<div class="flex_table" style="margin-bottom: 2vw; ">';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:50vw; max-width:150px; font-size: x-large;"><b>公司簡介</b></div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">公司介紹</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row_co['intro'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">公司電話</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row_co['co_tel'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">公司地址</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row_co['address'].'</div>';
				echo '</div>';

				echo '<div class="flex_tr"  style="width: 60vw;border: none;" >';
					echo '<div class="flex_td" style="width:8vw; max-width:150px; ">公司網址</div>';
					echo '<div class="flex_td" style="width:42vw; max-width:500px; justify-content: flex-start;">'.$row_co['link'].'</div>';
				echo '</div>';

			echo '</div>';
		}
	?>



	<div align="center" style="margin-bottom: 1vw;">
		<button class="button" onclick=location.href="./company.php">回上頁</button>
	</div>


	<div w3-include-html="./layout/footer.html"></div>

</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>