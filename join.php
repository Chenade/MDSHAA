
 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	<script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
	<script type="text/javascript" src="slidemenu.js"></script>
	<title>明道中學校友會</title>
	
		<style>
		.option{
			margin-right:25px;
			line-height:35px;
			white-space:nowrap;
		}
		
		td{
			border-bottom:solid black 1px;
		}
		
		
	</style>
	
</head>
 
<body><div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		<div><h3 class="title">加 入 校 友 會</h3></div>
		<div><p class="subtitle">校友聯絡 </p></div>
	</div>
	
	<div class="content">
		
		<div class = "form" align="center">
			
			<form action="join_exe.php" method="post">
			
			<table cellpadding="15">
					
				<tr>
					<td style="white-space:nowrap;">校友資料</td>
					<td>
						<span class="option">姓名*： <input type="text" name="name" required></span>
						<span class="option">性別： 
							<select name="sex">
								<option value="female">女</option>
								<option value="male">男</option>
							</select>
						</span><br>
						<span class="option">身分證字號*： <input type="text" name="ID" required></span>
						<span class="option">生日： <input type="date" name="birthday"></span><br>
						<span class="option">最高學歷： <input type="text" name="education" style="width:80%;"></span><br>
					</td>
				</tr>
				
					
				<tr>
					<td>畢業國中</td>
					<td>
						<span class="option">校名： <input type="text" name="grad_junior"></span>
						<span class="option">畢業年度： <input type="number" name="year_junior"></span><br>
						<span class="option">學號： <input type="text" name="id_junior"></span>
						<span class="option">導師： <input type="text" name="teacher_junior"></span><br>
						<span class="option">座號： <input type="number" name="no_junior"></span>
						<span class="option">班級： <input type="text" name="class_junior"></span>
						
						
					</td>
				</tr>
				
				<tr>
					<td>畢業高中</td>
					<td>
                        <span class="option">校名： <input type="text" name="grad_senior"></span><br>
						<span class="option">畢業年度： <input type="number" name="year_senior"  style="width: 6.5vw;"></span>
						<span class="option">部（科）別： <input type="text" name="department_senior"></span><br>
						<span class="option">學號： <input type="text" name="id_senior"></span>
						<span class="option">導師： <input type="text" name="teacher_senior"></span><br>
						<span class="option">班級： <input type="text" name="class_senior"></span>
						<span class="option">座號： <input type="number" name="no_senior"></span>
						
						
						
					</td>
				</tr>
				
				<tr>
					<td>大學資訊</td>
					<td>
						<span class="option">校名： <input type="text" name="grad_undergrad"></span>
						<span class="option">科系： <input type="text" name="department_undergrad"></span><br>
					
					</td>
				</tr>
				
				<tr>
					<td>碩士班資訊</td>
					<td>
						<span class="option">校名： <input type="text" name="grad_Master"></span>
						<span class="option">科系： <input type="text" name="department_Master"></span><br>

					</td>
				</tr>
				
				<tr>
					<td>博士班資訊</td>
					<td>
						<span class="option">校名： <input type="text" name="grad_doctor"></span>
						<span class="option">科系： <input type="text" name="department_doctor"></span><br>
					
					</td>
				</tr>
				
				<tr>
					<td>聯絡資訊</td>
					<td>
						<span class="option">永久電話*： <input type="tel" name="tel"  requiredstyle="width:80%;"></span><br>
						<span class="option">電子信箱*： <input type="email" name="email" required style="width:80%;"></span><br>
						<span class="option">通訊地址： <input type="text" name="address" style="width:80%;"></span><br>
					
					</td>
				</tr>
				
			</table>
			
			<br><br>
				
			<p><input type="submit">  <input type="reset"></p>
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