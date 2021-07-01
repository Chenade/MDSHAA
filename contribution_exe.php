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
			<h3 class="title">會 訊 投 稿</h3>
		</div>

		<div>
			<p class="subtitle">最新會訊 > 投稿 </p>
		</div>

	</div>

	<?php

		$body .= '標題：'. $_POST['title'].'<br>';
		$body .= '作者：'. $_POST['author'].'<br>';
		$body .= '文章：<br>'. $_POST['article'].'<br>';
		$body .= '電子信箱：'. $_POST['email'].'<br>';



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
		$mail->Subject = "[會訊投稿]".$_POST['author'];
		$mail->Body = '<h2>會訊投稿</h2><hr>'.$body;
		$mail->IsHTML(true);
		$mail->AddAddress("alumni@ms.mingdao.edu.tw", "MDSHAA");
		$mail->AddAddress($_POST['email'], $_POST['author']);

		if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "
						<div class='content1'>
							<h2>已收到您的投稿</h2>
							<h3>若需提供照片，請將照片寄至alumni@ms.mingdao.edu.tw</h3>
						</div>";
		}


		echo '<hr>
						<h1 align="center">會訊投稿</h1>
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