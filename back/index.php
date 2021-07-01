<?php
    session_start();

    if($_SESSION['user'] != 'admin')
        header('location:login.php');
?>

<!doctype HTML5>

<html>
	
	<head>
		<link rel="stylesheet" href="../css/back.css">
	<style>
		button{
			margin:15px;
		}
	</style>
	
	</head>
	
	<body align="center" style="padding: 5vw;">
		
		<div>
		
			<h1>明道校友會 控制台</h1><br><br>
			
			<div class="content" style="padding-left: 10vw; padding-right: 10vw;">
			
				<button class="but" class="but" onclick=location.href="director_edit.php">理事長的話</button><br>
				<button class="but" onclick=location.href="member.php">理監事團隊 </button><br>
				<button class="but" onclick=location.href="store.php">優惠店家 </button><br>
				<button class="but" onclick=location.href="past.php">歷屆理事長 </button><br>
				<button class="but" onclick=location.href="team.php">服務團隊 </button><br>
				<button class="but" onclick=location.href="alumni.php">傑出校友 </button><br>
				<button class="but" onclick=location.href="souvenir.php">紀念品 </button><br>
				<button class="but" onclick=location.href="album.php">活動花絮<br>相簿 </button><br>
				<button class="but" onclick=location.href="news.php">最新消息 </button><br>
				<button class="but" onclick=location.href="info.php">會務訊息 </button><br>
				<button class="but" onclick=location.href="oversea.php">海內外聯絡 </button><br>
				<button class="but" onclick=location.href="map.php">明道人地圖 </button><br>
				<button class="but" onclick=location.href="notion.php">明道人動態 </button><br>
				<button class="but" onclick=location.href="donate.php">捐款芳名錄 </button><br>

			</div>

<hr>
            <button class="button" onclick=location.href="login.php?logout=logout">登出 </button><br>
		</div>
	</body>
	
</html>