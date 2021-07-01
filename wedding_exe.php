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
		<div><h3 class="title">明  道 人 婚 紗 申 請</h3></div>
		<div><p class="subtitle">校友服務 > 明道人回娘家 </p></div>
	</div>


	<?php

		$body  = '<h4>申請人資訊</h4>';

		$body .= '申請人：'. $_POST['name'].'<br>';
		$body .= '連絡電話：'. $_POST['mobile'].'<br>';
		$body .= '備用電話：'. $_POST['tel'].'<br>';
		$body .= '電子郵件：'. $_POST['email'].'<br>';

		$body  .= '<hr><h4>申請內容</h4>';
		$body .= '欲申請時間：' . $_POST['date'] .'&emsp;&emsp;'. @$_POST['time'] . '<br><br>';

		$place = '';
		if(@$_POST['venue_11']) $place .= '校園景觀：' . $_POST['school'].'，';
		if(@$_POST['venue_1']) $place .= "圖書館，";
		if(@$_POST['venue_2']) $place .= "國學講壇，";
		if(@$_POST['venue_3']) $place .= "教室，";
		if(@$_POST['venue_4']) $place .= "晦光堂，";
		if(@$_POST['venue_5']) $place .= "福來廳，";
		if(@$_POST['venue_6']) $place .= "鐵梅廳，";
		if(@$_POST['venue_7']) $place .= "明志廳，";
		if(@$_POST['venue_8']) $place .= "童軍營地，";
		if(@$_POST['venue_9']) $place .= "烤肉區，";
		if(@$_POST['venue_10']) $place .= $_POST['venue_other'];

		$equipment = '';
		if(@$_POST['equipment_1']) $equipment .= "音響，";
		if(@$_POST['equipment_2']) $equipment .= "電腦，";
		if(@$_POST['equipment_3']) $equipment .= "投影機，";
		if(@$_POST['equipment_4']) $equipment .= "麥克風，";
		if(@$_POST['equipment_5']) $equipment .= "空調，";
		if(@$_POST['equipment_6']) $equipment .= "燈光，";
		if(@$_POST['equipment_7']) $equipment .= "舞台，";
		if(@$_POST['equipment_8']) $equipment .= "桌子，";
		if(@$_POST['equipment_9']) $equipment .= "椅子，";
		if(@$_POST['equipment_10']) $equipment .= "垃圾袋，";
		if(@$_POST['venue_10']) $equipment .= $_POST['venue_other'];

		$body .= '場地申請：' . $place . '<br>';
		$body .= '設備申請：' . $equipment . '<br>';

		$helper = '不需派員協助';
		if($_POST['help'] == 'need')
			$helper = '需校友會派職員'.$_POST['helper'].'人，工友'.$_POST['worker'].'人';

		$body .= '人力支援：' . $helper . '<br>';

		$body  .= '<hr><h4>明道中學校友返校拍攝婚紗小故事</h4>';
		$body .= '男方畢業資料：'.@$_POST['graduate_m'].@$_POST['year_m'].'年畢業 &emsp; '. @$_POST['department_m']. @$_POST['class_m']. ' <br>';
		$body .= '女方畢業資料：'.@$_POST['graduate_f'].@$_POST['year_f'].'年畢業 &emsp; '. @$_POST['department_f']. @$_POST['class_f']. ' <br>';
		$body .= '小故事分享：<br>';
		$body .= $_POST['story'];

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require './phpmailer/src/PHPMailer.php';
		require './phpmailer/src/SMTP.php';
		require './phpmailer/src/Exception.php';

		$mail= new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->CharSet = "utf-8";
		$mail->Username = "mdshaa.web@gmail.com";
		$mail->Password = "35056341";
		$mail->From = "mdshaa.web@gmail.com";
		$mail->FromName = "MDSHAA";
		$mail->Subject = "[明道人拍婚紗申請]".$_POST['date'];
		$mail->Body = '<h2>明道人拍婚紗</h2><hr>'.$body;
		$mail->IsHTML(true);
		$mail->AddAddress("alumni@ms.mingdao.edu.tw", "MDSHAA");
		$mail->AddAddress($_POST['email'], $_POST['name']);

		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "
			<div class='content1'>
				<h2>已收到您的表單</h2>
				<h3>請靜待聯繫</h3>
			</div>";
		}


		echo '<hr>
			<h1 align="center">明道人拍婚紗</h1>
			<div align="center" style="">
				<div style="width: 60vw;border: solid gray 1px; margin: 1vw;padding: 1vw;">'.$body.'</div>
			</div>';
	?>

	<div w3-include-html="./layout/footer.html"></div>
	
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>