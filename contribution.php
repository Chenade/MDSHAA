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

	<div class="content">

		<div class = "form" align="center" style="width:60vw;">


			<form action="contribution_exe.php" method="post"align="left">

				<h2>會訊投稿</h2>
				<div style="margin-left:5vw;">
					<span class="option">標題*： <input type="text" name="title" required></span><br>
					<span class="option">作者*： <input type="text" name="author" required></span><br>
					<span class="option">文章*： <textarea name="article" style="width: 80vw; max-width: 800px; height: 30vh; max-height: 200px;" required></textarea></span><br>
					<span class="option">電子信箱*： <input type="email" name="email" required></span><br>
				</div>

				<br><br>
				<p align="center"><input type="submit"></p>
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