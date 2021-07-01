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
			<h3 class="title">尋 人 啟 事</h3>
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

		$body  .= '<hr><h4>尋人啟事內容</h4>';

		$body .= '暱稱：'. $_POST['from_name'].'<br>';
		$body .= '尋找對象：'. $_POST['to_name'].'<br>';
		$body .= '留言：'. $_POST['comment'].'<br>';
		$body .= '欲公開聯絡方式：'. $_POST['contact'].'<br>';

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
		$mail->Subject = "[尋人啟事申請]".$_POST['name'];
		$mail->Body = '<h2>尋人啟事申請</h2><hr>'.$body;
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
					<h1 align="center">尋人啟事申請</h1>
					<div align="center" style="">
						<div style="width: 60vw;border: solid gray 1px; margin: 1vw;padding: 1vw;">'.$body.'</div>
					</div>';
	?>


	<div align="center" style="margin-bottom: 1vw;">
		<button class="button" onclick=location.href="./find.php">回上頁</button>
	</div>

	<div w3-include-html="./layout/footer.html"></div>

</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>