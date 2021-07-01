<!doctype HTML5>

<html>

<head><link rel="icon" href="./img/logo-icon.png" />
    <script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
    <script type="text/javascript" src="slidemenu.js"></script>
    <title>明道中學校友會</title>
    <style></style>
</head>

<body>
	
	<div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>

		<div>
			<h3 class="title">明 道 人 幫 明 道 人</h3>
		</div>

		<div>
			<p class="subtitle">首頁 > 校友服務</p>
		</div>

	</div>

	<div class="content" style="flex-direction:column;">
		<div>
			<a href="./company.php"><img src="./img/button/company.jpg" class="service_title" alt="校友徵才" /> </a>
		</div>
		<div>
			<a href="./job.php"><img src="./img/button/job.jpg" class="service_title" alt="求職資訊" /> </a>
		</div>
		<div>
			<a href="./find.php"><img src="./img/button/find.jpg" class="service_title" alt="尋人啟事" /> </a>
		</div>
	</div>

	<div w3-include-html="./layout/footer.html"></div>
	
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>