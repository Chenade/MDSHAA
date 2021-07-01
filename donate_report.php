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
 
<body>
	
	<div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		
		<div>
			<h3 class="title">線 上 回 報 表 單</h3>
		</div>
		
		<div>
			<p class="subtitle">愛校捐款 </p>
		</div>
		
	</div>
	
	<div class="content">
		
		<div class = "form" align="center" style="width:60vw;">
		
			
			<form action="donate_exe.php" method="post" align="left">
			
					<h2>基本資料</h2>
					<div style="margin-left:5vw;">
						<span class="option">捐款人姓名： <input type="text" name="name"></span>
						<span class="option">身分證字號 / 統一編號： <input type="text" name="ID"></span><br>
						<span class="option">連絡電話： <input type="tel" name="tel"></span>
						<span class="option">電子郵件： <input type="email" name="email" style="width:50vw;max-width:300px;"></span><br>
						<span class="option">通訊地址： <input type="text" name="address" style="width:50vw;max-width:585px;"></span><br>
						
						<div style="display:flex; flex-direction:row;	">
							
							<div><span class="option">身分別： </span></div>
							
							<div>
									<input type="radio" name="character" value="alumni" checked>校友，
									<span class="option">
										民國 <input type="number" name="char_year" style="width:80px;">年 
										<input type="radio" name="char_grad" value="graduated" checked>畢業
										<input type="radio" name="char_grad" value="non_graduate">肄業
									</span>
								<br>
								
									<span class="option"><input type="radio" name="character" value="teacher">教職員</span>
									<span class="option"><input type="radio" name="character" value="social">社會人士</span>
									<span class="option"><input type="radio" name="character" value="parent">學生家長</span>
									<span class="option"><input type="radio" name="character" value="company">企業界</span>
									
									<span class="option"><input type="radio" name="character" value="other">其他：<input type="text" name="other_char" style="width:50%;"></span>
							</div>
						</div>
						
						
						<br>
						<span class="option">貴子弟班級： <input type="text" name="child_class"></span>
						<span class="option">貴子弟姓名： <input type="text" name="child_name"></span><br>
					</div>
					
					
					<br><hr>
					<h2>捐款收據與徵信調查</h2>
					<div style="margin-left:5vw;">
						
						
							
							<div><span class="option">捐款人姓名： </span></div>
							
							<div style="margin-left:5vw;">
								<span class="option"><input type="radio" name="receipt" value="self" checked>以個人名義開立收據（可作扣抵所得稅之用）</span><br>
								<span style="line-height:35px;">
									<input type="radio" name="receipt" value="company">以公司為抬頭：
									<input type="text" name="company_name" >，
									統一編號：<input type="text" name="company_ID">
								</span><br>
								<span class="option"><input type="radio" name="receipt" value="none">不寄送收據</span>
										
							</div>
						
						
						<hr>
						<p>請問是否同意本會將貴端姓名、捐款金額及用途刊登於相關網站或刊物上？
						
						<input type="radio" name="public" value="public_true" checked>是
						<input type="radio" name="public" value="public_false">否
						
						</p>
						<hr>
						<p> 請問是否同意提供身份證字號予社團法人明道中學校友會作為個人年度綜合所得稅扣除額上傳申報？ <BR>
						
						<input type="radio" name="public_ID" value="ID_true" checked>是
						<input type="radio" name="public_ID" value="ID_false">否（請以紙本收據寄送。 ）
						
						</p>
						
					</div>
					
					<br><hr>
					<h2>捐款用途與捐款金額</h2>
					
					<div style="margin-left:5vw;">
						<div style="display:flex; flex-direction:row;	">
							
							<div><span class="option">捐款用途： </span></div>
							
							<div>
								<span class="option"><input type="radio" name="use" value="join" checked>入會費</span>
								<span class="option"><input type="radio" name="use" value="regular">常年會費</span>
								<span class="option"><input type="radio" name="use" value="mdshaa">校友會推動基金</span>
									
								<span class="option"><input type="radio" name="use" value="other">其他：<input type="text" name="use_other" style="width:50%;"></span>
							</div>
						</div>
						<br>
						<div style="display:flex; flex-direction:row;	">
							
							<div><span class="option">捐款金額： </span></div>
							
							<div>
								<span class="">一次捐款，新台幣
								<input type="number" name="amount" style="width:100px;">
								元整</span>
							</div>
						</div>
						
					
						
					</div>
					
					<br><hr>
					<h2>捐款方式</h2>
					<div style="margin-left:5vw;">	
						
						<span class="option"><input type="radio" name="method" value="cash">現金</span>
						<span class="option"><input type="radio" name="method" value="bank">銀行轉帳</span>
						<span class="option"><input type="radio" name="method" value="check">支票</span>
						<span class="option"><input type="radio" name="method" value="transfer">電匯或ATM轉帳</span>
								
						
							
					</div>
				
				<br><br>
				<p align="center"><input class="button" type="submit"></p>
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