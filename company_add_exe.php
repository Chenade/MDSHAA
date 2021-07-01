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
			<h3 class="title">企 業 登 入 申 請</h3>
		</div>

		<div>
			<p class="subtitle">校友服務 > 明道人幫明道人 </p>
		</div>

	</div>


	<?php

		$body  = '<h4>校友資訊</h4>';

		$body .= '姓名：'. $_POST['name'].'<br>';
		$body .= '學號：'. $_POST['ID'].'<br>';
		$body .= '畢業年分：'. $_POST['grad_year'].'<br>';
		$body .= '科系：'. $_POST['dept'].'<br>';
		$body .= '班級：'. $_POST['class'].'<br>';
		$body .= 'Email：'. $_POST['email'].'<br>';
		$body .= '連絡電話：'. $_POST['tel'].'<br>';

		$body  .= '<hr><h4>公司資訊</h4>';

		$body .= '公司名稱：'. $_POST['co_name'].'<br>';
		$body .= '聯絡人姓名：'. $_POST['contact'].'<br>';
		$body .= '聯絡人電話：'. $_POST['contact_tel'].'<br>';
		$body .= '公司電話：'. $_POST['co_tel'].'<br>';
		$body .= '公司網址：'. $_POST['co_address'].'<br>';
		$body .= '公司介紹：'. $_POST['co_intro'].'<br>';

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
		$mail->Subject = "[企業登入申請]".$_POST['co_name'];
		$mail->Body = '<h2>企業登入申請</h2><hr>'.$body;
		$mail->IsHTML(true);
		$mail->AddAddress("alumni@ms.mingdao.edu.tw", "MDSHAA");
		$mail->AddAddress($_POST['email'], $_POST['name']);

		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "
				<div class='content1'>
					<h2>已收到您的表單</h2>
					<h3>請靜待審核，通過後會另行通知</h3>
				</div>";
		}


		echo '<hr>
				<h1 align="center">企業登入申請</h1>
				<div align="center" style="">
					<div style="width: 60vw;border: solid gray 1px; margin: 1vw;padding: 1vw;">'.$body.'</div>
				</div>';
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