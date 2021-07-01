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
		
		<div>
			<h3 class="title">班 級 同 學 會</h3>
		</div>
		
		<div>
			<p class="subtitle">校友服務 > 明道人回娘家 </p>
		</div>
		
	</div>
	
	<div class="content">
		
		<div class = "form" align="center">
		
			
			<form action="classmate_exe.php" method="post">
			
			<table cellpadding="15">
				<tr>
					<td >活動名稱 </td>
					<td>班級同學會</td>
				</tr>
				<tr>
					<td>活動日期*</td>
					<td>
						<input type="date" name="date" required>&nbsp;&nbsp;	<input type="time" id="time" name="time">
						<span class="option">(最晚至下午5時) </span>
					</td>
				</tr>
				<tr>
					<td>申請場地</td>
					<td style="max-width:60vw;">
						<span class="option"><input type="checkbox" name="venue_11" value="library"> 校園景觀 &nbsp;
											 <input type="text" name="school"></span>
						<br>
						
						<span class="option"><label for="hall"><input type="checkbox" name="venue_2" id="hall"> 國學講壇</label></span>
						<span class="option"><label for="classroom"><input type="checkbox" name="venue_3" id="classroom"> 教室</label></span>
						<span class="option"><label for="huagun"><input type="checkbox" name="venue_4" id="huagun"> 晦光堂</label></span>
						<span class="option"><label for="fulai"><input type="checkbox" name="venue_5" id="fulai"> 福來廳</label></span>
						<span class="option"><label for="teimei"><input type="checkbox" name="venue_6" id="teimei"> 鐵梅廳</label></span>
						<span class="option"><label for="mingzhi"><input type="checkbox" name="venue_7" id="mingzhi"> 明志廳</label></span>
						<span class="option"><label for="camp"><input type="checkbox" name="venue_8" id="camp"> 童軍營地</label></span>
						<span class="option"><label for="BBQ"><input type="checkbox" name="venue_9" id="BBQ"> 烤肉區</label></span><br>
						<span class="option"><label for="other_"><input type="checkbox" name="venue_10" id="other_"> 其他 </label>
											 <input type="text" name="venue_other"></span>
					</td>
				</tr>
				
				<tr>
					<td>使用設備</td>
					<td style="max-width:60vw;">
						<span class="option"><label for="sound"><input type="checkbox" name="equipment_1" id="sound">音響</label></span>
						<span class="option"><label for="computer"><input type="checkbox" name="equipment_2" id="computer">電腦</label></span>
						<span class="option"><label for="projector"><input type="checkbox" name="equipment_3" id="projector">投影機</label></span>
						<span class="option"><label for="microphone"><input type="checkbox" name="equipment_4" id="microphone">麥克風</label></span>
						<span class="option"><label for="aircon"><input type="checkbox" name="equipment_5" id="aircon">空調</label></span>
						<span class="option"><label for="light"><input type="checkbox" name="equipment_6" id="light">燈光</label></span>
						<span class="option"><label for="stage"><input type="checkbox" name="equipment_7" id="stage">舞台</label></span>
						<span class="option"><label for="table"><input type="checkbox" name="equipment_8" id="table">桌子</label></span>
						<span class="option"><label for="chair"><input type="checkbox" name="equipment_9" id="chair">椅子</label></span>
						<span class="option"><label for="garbage"><input type="checkbox" name="equipment_10" id="garbage">垃圾袋</label></span><br>
						<span class="option"><label for="other"><input type="checkbox" name="equipment_11" id="other">其他 </label>
											 <input type="text" name="equipment_other"></span>
					</td>
				</tr>

                <tr>
                    <td style="white-space:nowrap;">申請人資料</td>
                    <td>
                        <span class="option">姓名*： <input type="text" name="name" required></span>
                        <span class="option">手機*： <input type="tel" name="mobile" required></span><br>
                        <span class="option">備用電話： <input type="tel" name="tel" ></span>
                        <span class="option">E-mail*： <input type="email" name="email" required></span><br>
                    </td>
                </tr>
				
				<tr>
					<td style="white-space:nowrap;">畢業資料</td>
					<td>
						<span class="option">
							<select name="graduate">
								<option>--請選擇--</option>
								<option>國中</option>
								<option>高中</option>
								<option>（綜）高職</option>
								<option>（補）進校</option>
							</select>
						</span>
						<input type="number" name="year" min="50" max="120">年畢業<br>
						<span class="option"><input type="text" name="department">科</span>
						<span class="option"><input type="text" name="class">班</span>
						
					</td>
				</tr>
				
				<tr>
					<td>人力支援</td>
					<td style="max-width:60vw;">
						<span class="option"><label for="help_t"><input type="radio" name="help" id="help_t"> 需校友會派職員：</label>
							
							<input type="number" style="width:50px;">人，工友<input type="number" checked style="width:50px;">人協助
						
						
						</span><Br>
						<span class="option"><label for="help_f"> <input type="radio" name="help" checked id="help_f"> 不需派員協助</label></span>
					</td>
				</tr>
				
			</table>
			<br><br>
			<input type="checkbox" required>我已詳閱<a href="./home_rule.php" target="_blank">明道中學校友返校理活動申請辦法</a><br><br>
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