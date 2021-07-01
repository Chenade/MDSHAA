 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	<link rel="stylesheet" href="main.css">
	<title>明道中學校友會</title>
	<style>
		.contain{
			width:100vw;
			height:80vh;
			display:flex;
			justify-content:center;
			align-items:center;
			flex-direction:column;
			
		}
		.box{
			border:solid black 1px;
			width:500px;
			height:230px;
			border-radius:50px;
			padding:15px;
		}
	</style>
</head>
 
<body align="center">

	<div class="list">
		<a href="index.php"><img src="./img/logo2.png" class="logo"></a>
		<a href="index.php"><img src="./img/logo3.png" class="logo2"></a>
		<ul class="drop-down-menu">
		
		<li>
			<a href="./news.php">最新消息</a>
			<ul  style="list-style:none; padding:0px; margin:0px;">
				<li><a href="./news.php">會務訊息</a></li>
				<li><a href="./album.php">活動花絮</a></li>
			</ul>
		</li>
		
		<li>
			<a href="#">關於校友會</a>
				<ul  style="list-style:none; padding:0px; margin:0px;">
					<li>
						<a href="#">校友會介紹</a>
						<ul  style="list-style:none; padding:0px; margin:0px;">
							<li><a href="./history.php">成立緣起</a></li>
							<li><a href="./badge.php">識別標章</a></li>
						</ul>
					</li>
					<li>
						<a href="#">校友會成員</a>
						<ul  style="list-style:none; padding:0px; margin:0px;">
							<li><a href="./wish.php">老校長的嘉許</a></li><li><a href="./director.php">理事長的話</a></li>
							<li><a href="./member.php">理監事團隊</a></li>
							<li><a href="./past.php">歷屆理事長</a></li>
							<li><a href="./team.php">服務團隊</a></li>
						</ul>
					</li>
					<li>
						<a href="#">校友會組織</a>
						<ul  style="list-style:none; padding:0px; margin:0px;">
							<li><a href="./law.php">組織章程</a></li>
							<li><a href="./structure.php">組織架構</a></li>
						</ul>
					</li>
					<li>
						<a href="./alumni.php">傑出校友</a>
					</li>
				</ul>
		</li>
		
			
		<li>
			<a href="./info.php">明道人會訊</a>
			<ul  style="list-style:none; padding:0px; margin:0px;">
				<li><a href="./info.php">最新會訊</a></li>
				<li><a <li><a href="./contribution.php">投稿</a></li>
			</ul>
		</li>
		
			<li>
			<a href="#">明道人資料庫</a>
			<ul  style="list-style:none; padding:0px; margin:0px;">
				 
				<li><a href="./map.php">明道人地圖</a></li>
				<li><a href="./notion.php">明道人動態</a></li>
			</ul>
		</li>
		
		

		<li>
			<a href="#">校友服務</a>
			<ul  style="list-style:none; padding:0px; margin:0px;">
					<li>
						<a href="./help.php">明道人幫明道人</a>
						<ul  style="list-style:none; padding:0px; margin:0px;">
							<li><a href="./company.php">校友徵才</a></li>
							<!-- <li><a href="./job.php">求職資訊</a></li> -->
							<li><a href="./find.php">尋人啟事</a></li>
						</ul>
					</li>
					<li>
						<a href="./apply.php">證件申請</a>
					</li>
					<li>
						<a href="./goods.php">明道人福利社</a>
						<ul  style="list-style:none; padding:0px; margin:0px;">
							<li><a href="./souvenir.php">紀念品專區</a></li>
							<li><a href="./store.php">優惠商家</a></li>
						</ul>
					</li>
					<li>
						<a href="./home.php">明道人回娘家</a>
						<ul  style="list-style:none; padding:0px; margin:0px;">
							<li><a href="./wedding.php">明道人婚紗</a></li>
							<li><a href="./classmate.php">班級同學會</a></li>
						</ul>
					</li>
				</ul>
		</li>
		
		<li>
			<a href="#">校友連結</a>
			<ul  style="list-style:none; padding:0px; margin:0px;">
				<li><a href="./oversea.php">海內外聯絡</a></li>
				<li><a href="./connection.php">社群連結</a></li>
				<li><a href="./join.php">加入校友會</a></li>
			</ul>
		</li>
		
		<li>
			<a href="./donate.php">愛校捐款</a>
			<ul  style="list-style:none; padding:0px; margin:0px;">
				<li><a href="./donate.php">捐款方式</a></li><li><a href="./donate_record.php">捐款芳名錄</a></li>
				<li><a href="donate_report.php">線上回報表單</a></li>
			</ul>
		</li>
	
		
		</ul>
	</div>
	
	
	
	<div class="contain">
		<div><h2>校友登入</h2></div>
		<div align="center" class="box">
			<form action="login.php" method="post" style="margin:50px;">
				帳號：<input type="text" name="acc" alt="" required ><br><br>
				密碼：<input type="text" name="pwd" alt="" required ><br><br>
				
				<?php session_start();  echo '<p style="color:red;">'.@$_SESSION['msg'] . '<p>';?>
				
				<input type="submit" style="margin:15px;">
			</form>
		</div>
	</div>
	
	<div class="footer">
	
	
		<div style="width:50vw; min-width:400px">
			
			<div class="contact_detail">
				<img src="./img/mobile.png" class="icon">
				<p style="line-height:25px;">+886-4-23341341</p>
			</div>
			
			<div class="contact_detail">
				<img src="./img/email.png" class="icon">
				<p style="line-height:25px;">alumni@ms.mingdao.edu.tw</p>
			</div>
			
			<div class="contact_detail">
				<img src="./img/pin.png" class="icon">
				<p style="line-height:25px;">臺灣41401臺中市烏日區中山路一段497號 明道樓5樓</p>
			</div>
			
			<div class="contact_detail">
				<p style="line-height:25px; margin-left:100px;"></p>
				<a href="https://www.facebook.com/md1969alumni/?__tn__=%2Cd%2CP-R&eid=ARBt0LskD_dasCe_J9oMPh2MR6etsDVKsQ_bOoX8PtnVVlMHu1BwU8cnCtzoeu0mMyW1-LEv0YtKjnOT" target="_blank"><img src="./img/facebook.png" class="icon"></a>
				<a href="https://www.instagram.com/mingdao_alumni/" target="_blank"><img src="./img/instagram.png" class="icon"></a>
				<a href="https://www.youtube.com/channel/UCQp2lSLeVQb8gVxgAYjr8Qg/?guided_help_flow=5" target="_blank"><img src="./img/youtube.png" class="icon"></a>
				
			</div>
		
		</div>
		
		
		
		<div style="width:40vw;  min-width:400px">
			
			<div>
				
				<div class="contact_detail">
					<img src="./img/MDHS.png"  style="width:120px;">
					
					
					<div class="contact_detail2">
					
						
						<a href="https://play.google.com/store/apps/details?id=tw.edu.mingdao.mingdaoappv10&showAllReviews=true" target="_blank" class="download">
							<div class="contact_detail3">
							
								<img src="img/logo_google-play.png" class="icon2">
								<p style="line-height:25px;">GOOGLE PLAY 點擊下載</p><br>
								
							</div>
						</a>
						
						<a href="https://apps.apple.com/tw/app/%E6%98%8E%E9%81%93%E5%AD%B8mdhs/id1476038393" target="_blank" class="download">
							<div class="contact_detail3">
							
								<img src="./img/app.png" class="icon2">
								<p style="line-height:25px;">APP STORE 點擊下載</p><br>
								
							</div>
						</a>
						
					</div>
					
				</div>
				
			</div>
			

		</div>
		
		
		<hr style="width:90%;margin:0px;padding:0px;">
		
		<a align="center" class="copyright"> Copyright &copy; 2020  明道中學校友會(MDSHAA) All Rights Reserved &nbsp; | &nbsp; 網站設計‧  郭泱婍(YK)&nbsp; | &nbsp;美工設計‧  張婉柔</a>
		
	</div>
	
</body>
 
</html>