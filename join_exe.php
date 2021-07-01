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
		<div><h3 class="title">明  道 人 婚 紗 申 請</h3></div>
		<div><p class="subtitle">校友服務 > 明道人回娘家 </p></div>
	</div>

	<?php

		$body  = '<h4>校友基本資料</h4>';

		$body .= '申請人：'. $_POST['name'].'<br>';
		$body .= '性別：'. $_POST['sex'].'<br>';
		$body .= '身分證字號：'. $_POST['ID'].'<br>';
		$body .= '生日：'. $_POST['birthday'].'<br>';
		$body .= '最高學歷：'. $_POST['education'].'<br>';

		$body  .= '<hr><h4>聯絡資訊</h4>';
		$body .= '永久電話：'. $_POST['tel'].'<br>';
		$body .= '電子信箱：'. $_POST['email'].'<br>';
		$body .= '通訊地址：'. $_POST['address'].'<br>';

		$body  .= '<hr><h4>學歷資料</h4>';

		$body .= '<h5><畢業國中></h5>';

		$body .= '校名：'. @$_POST['grad_junior'].'<br>';
		$body .= '畢業年度：'. @$_POST['year_junior'].'<br>';
		$body .= '學號：'. @$_POST['id_junior'].'<br>';
		$body .= '導師：'. @$_POST['teacher_junior'].'<br>';
		$body .= '班級：'. @$_POST['class_junior'].'<br>';
		$body .= '座號：'. @$_POST['no_junior'].'<br>';


		$body .= '<h5><畢業高中></h5>';

		$body .= '校名：'. @$_POST['grad_senior'].'<br>';
		$body .= '部（科）別：'. @$_POST['department_senior'].'<br>';
		$body .= '畢業年度：'. @$_POST['year_senior'].'<br>';
		$body .= '學號：'. @$_POST['id_senior'].'<br>';
		$body .= '導師：'. @$_POST['teacher_senior'].'<br>';
		$body .= '班級：'. @$_POST['class_senior'].'<br>';
		$body .= '座號：'. @$_POST['no_senior'].'<br>';


		$body .= '<H5><大學資訊></H5>';
		$body .= '校名：'. @$_POST['grad_undergrad'].'<br>';
		$body .= '科系：'. @$_POST['department_undergrad'].'<br>';

		$body .= '<h5><碩士班資訊></h5>';
		$body .= '校名：'. @$_POST['grad_Master'].'<br>';
		$body .= '科系：'. @$_POST['department_Master'].'<br>';

		$body .= '<h5><博士班資訊></h5>';
		$body .= '校名：'. @$_POST['grad_doctor'].'<br>';
		$body .= '科系：'. @$_POST['department_doctor'].'<br>';


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
		$mail->Subject = "[加入校友會申請]".$_POST['name'];
		$mail->Body = '<h2>加入校友會</h2><hr>'.$body;
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
				<h1 align="center">加入校友會</h1>
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