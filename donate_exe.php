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
			<p class="subtitle">愛校捐款 > 線上回報表單 </p>
		</div>

	</div>

	<?php

		$body  = '<h4>捐款人基本資料</h4>';

		$body .= '捐款人：'. $_POST['name'].'<br>';
		$body .= '身分證字號 / 統一編號：'. $_POST['ID'].'<br>';
		$body .= '連絡電話：'. $_POST['tel'].'<br>';
		$body .= '電子信箱：'. $_POST['email'].'<br>';
		$body .= '通訊地址：'. $_POST['address'].'<br>';


		if($_POST['character'] == 'alumni') {
			$body .= '身分別：校友，';
			$body .= '民國&emsp;' . @$_POST['char_year'] . '&emsp;年';
			if($_POST['char_grad'] == 'graduated')  $body .= '畢業';
			else $body .= '肄業';
			$body .= '<br>';
		}
		if($_POST['character'] == 'teacher') $body .= '身分別：教職員<br>';
		if($_POST['character'] == 'social') $body .= '身分別：社會人士<br>';
		if($_POST['character'] == 'parent') $body .= '身分別：學生家長<br>';
		if($_POST['character'] == 'company') $body .= '身分別：企業界<br>';
		if($_POST['character'] == 'other') $body .= '身分別：'.$_POST['other_char'].'<br>';

		$body .= '貴子弟資訊：' . @$_POST['child_class'] . '&emsp;&emsp;' . @$_POST['child_name'] . '<br>';


		$body  .= '<hr><h4>捐款收據與徵信調查</h4>';

		$body  .= '捐款人姓名：';
		if($_POST['receipt'] == 'company') $body .= '以公司為抬頭： '.@$_POST['company_name'].'，統一編號：'.@$_POST['company_name'].'<br>';
		if($_POST['receipt'] == 'self') $body .= '以個人名義開立收據（可作扣抵所得稅之用）<br>';
		if($_POST['receipt'] == 'none') $body .= '不寄送收據<br>';

		$body  .= '請問是否同意本會將貴端姓名、捐款金額及用途刊登於相關網站或刊物上？：';
		if($_POST['public'] == 'public_true') $body .= '是<br>';
		if($_POST['public'] == 'public_false') $body .= '否<br>';

		$body  .= ' 請問是否同意提供身份證字號予社團法人明道中學校友會作為個人年度綜合所得稅扣除額上傳申報？：';
		if($_POST['public_ID'] == 'ID_true') $body .= '是<br>';
		if($_POST['public_ID'] == 'ID_false') $body .= '否<br>';


		$body  .= '<hr><h4>捐款用途與捐款金額</h4>';

		$body  .= '捐款用途：';
		if($_POST['use'] == 'join') $body .= '入會費<br>';
		if($_POST['use'] == 'regular') $body .= '常年會費 <br>';
		if($_POST['use'] == 'mdshaa') $body .= '校友會推動基金<br>';
		if($_POST['use'] == 'other') $body .= '其他：'.@$_POST['use_other'].'<br>';

		$body  .= '捐款金額：'.$_POST['amount'] . '<br>';

		$body  .= '<hr><h4>捐款方式</h4>';

		$body  .= '捐款方式：';
		if($_POST['method'] == 'cash') $body .= '現金<br>';
		if($_POST['method'] == 'bank') $body .= '銀行轉帳 <br>';
		if($_POST['method'] == 'check') $body .= '支票<br>';
		if($_POST['method'] == 'transfer') $body .= '電匯或ATM轉帳<br>';



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
				$mail->Subject = "[愛校捐款 回報]".$_POST['name'];
				$mail->Body = '<h2>愛校捐款</h2><hr>'.$body;
				$mail->IsHTML(true);
				$mail->AddAddress("alumni@ms.mingdao.edu.tw", "MDSHAA");
				$mail->AddAddress($_POST['email'], "t");

				if(!$mail->Send()) {
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "
					<div class='content1'>
						<h2>已收到您的表單</h2>
						<h3>明道校友會感謝您的支持</h3>
					</div>";
				}


		echo '<hr>
					<h1 align="center">愛校捐款 回報</h1>
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