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
			<h3 class="title">明 道 人 福 利 社</h3>
		</div>

		<div>
			<p class="subtitle">首頁 > 校友服務</p>
		</div>

	</div>

	<div class="content" style="flex-direction:column;">
	   <div>
		   <a href="./souvenir.php"><img src="./img/button/souvenir.jpg" class="service_title" alt="紀念品專區" /> </a>
	   </div><div>
		   <a href="./store.php"><img src="./img/button/store.jpg" class="service_title" alt="優惠商家" /> </a>
	   </div>
	</div>

	<div w3-include-html="./layout/footer.html"></div>
	
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>