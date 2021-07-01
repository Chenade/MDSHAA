<!doctype HTML5>

<html>

<head><link rel="icon" href="./img/logo-icon.png" />
    <script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
<!--   //<script type="text/javascript" src="slidemenu.js"></script>-->
    <title>明道中學校友會</title>

    <style>

        .input{
            font-size: large;
            width: 30vw;
            background: transparent;
            padding: 5px;
            border: solid lightslategray 1px;
        }


        td{
            border-bottom:solid black 1px;
        }


    </style>

</head>

<body><div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>

		<div>
			<h3 class="title">校 友 徵 才 申 請</h3>
		</div>

		<div>
			<p class="subtitle">校友服務 > 明道人幫明道人 </p>
		</div>

	</div>



	<div class="content">

		<div class = "form" align="center">


			<form action="company_exe.php" method="post">

				<table cellpadding="15">

					<tr>
						<td align="center" colspan="2" ><h2>校友徵才申請 </h2></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large; " >公司名稱</td>
						<td align="left" >
							<select id="company" class="input" name="company" style="width: 20vw;">
						<?php

							include ('./connect.php');

							$sql = 'SELECT * FROM `company`';
							$run = mysqli_query($con,$sql);
							while ($row = mysqli_fetch_assoc($run)){
								echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
							}

						?>
							</select>
							<p>若清單內沒有貴公司，請至「<a href="company_add.php">企業登入</a>」申請</p>
						</td>
					</tr>

					<tr>
						<td align="left" colspan="2" style="font-size: x-large; background: whitesmoke"><b>職位資訊</b></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >職位名稱</td>
						<td align="left" ><input type="text" class="input"  name="job"></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >學歷要求</td>
						<td align="left" ><input type="text" class="input"  name="education"></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >工作經歷</td>
						<td align="left" ><input type="text" class="input"  name="experience"></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >要求科系</td>
						<td align="left" ><input type="text" class="input"  name="department"></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >語言能力</td>
						<td align="left" ><input type="text" class="input"  name="language"></td>
					</tr>

					<tr>
						<td style="font-size: large">專業技能</td>
						<td>
							<textarea name="skills" style="width:35vw;height:6vh;"></textarea>
						</td>
					</tr>

					<tr>
						<td style="font-size: large">擅長工具</td>
						<td>
							<textarea name="tools" style="width:35vw;height:6vh;"></textarea>
						</td>
					</tr>

					<tr>
						<td style="font-size: large">其他條件</td>
						<td>
							<textarea name="tools" style="width:35vw;height:6vh;"></textarea>
						</td>
					</tr>
				</table>

				<br><br>

				<p><input type="submit" class="button">  <input type="reset" class="button"></p>
			</form>

		</div>

	</div>

	<div w3-include-html="./layout/footer.html"></div>

</body>
</html>


<script src="./js/w3.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script>
    $("#company_add").on('click', function () {
        window.location.href = 'company_add.php';
    });
	w3.includeHTML();
</script>