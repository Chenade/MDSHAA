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

<body>

	<div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>

		<div>
			<h3 class="title">尋 人 啟 事</h3>
		</div>

		<div>
			<p class="subtitle">校友服務 > 明道人幫明道人 </p>
		</div>

	</div>

	<div class="content">

		<div class = "form" align="center">


			<form action="find_exe.php" method="post">

				<table cellpadding="15">

					<tr>
						<td align="center" colspan="2" ><h2>尋人啟事申請</h2></td>
					</tr>

					<tr>
						<td align="left" colspan="2" style="font-size: x-large; background: whitesmoke"><b>校友資訊</b></td>
					</tr>


					<tr>
						<td align="left" style="font-size: large" >姓名*</td>
						<td align="left" ><input type="text" class="input"  name="name" required></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >學號*</td>
						<td align="left" ><input type="text" class="input"  name="ID" required></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >畢業年分*</td>
						<td align="left" ><input type="text" class="input"  name="grad_year" required></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >科系</td>
						<td align="left" ><input type="text" class="input"  name="dept"></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >班級</td>
						<td align="left" ><input type="text" class="input"  name="class"></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >Email*</td>
						<td align="left" ><input type="text" class="input"  name="email" required></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >連絡電話</td>
						<td align="left" ><input type="text" class="input"  name="tel"></td>
					</tr>


					<tr>
						<td align="left" colspan="2" style="font-size: x-large; background: whitesmoke"><b>尋人啟事內容</b></td>
					</tr>


					<tr>
						<td align="left" style="font-size: large" >暱稱*</td>
						<td align="left" ><input type="text" class="input"  name="from_name" required></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >搜尋對象*</td>
						<td align="left" ><input type="text" class="input"  name="to_name" required></td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >留言*</td>
						<td>
							<textarea name="comment" style="width:35vw;height:6vh;"></textarea>
						</td>
					</tr>

					<tr>
						<td align="left" style="font-size: large" >欲公開聯絡方式*</td>
						<td>
							<textarea name="contact" style="width:35vw;height:6vh;"></textarea>
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
 <script>
     w3.includeHTML();
 </script>