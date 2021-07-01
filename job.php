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
		<div><h3 class="title">求  職  資  訊</h3></div>		
		<div><p class="subtitle">明道人幫明道人 </p></div>
	</div>

	<div class="content">
		
		<div class = "form" align="center">
		
			<form action="job_exe.php" method="post">
			
			<p><span>姓名： <span><input type="text" name="name"></p>
			<p><span>姓名： <span><input type="text" name="name"></p>
			
			
			<p><input type="submit">  <input type="reset"></p>
			</form>
			
		</div>
		
	</div>
	
	
	<div w3-include-html="./layout/footer.html"></div>
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>
