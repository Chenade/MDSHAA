 <!doctype HTML5>
 
<html>
 
<head>
	<link rel="stylesheet" href="main.css">
	<link rel="icon" href="./img/logo-icon.png" />
<!--	<script type="text/javascript" src="slidemenu.js"></script>-->
	<script src="./js/jquery-3.4.1.min.js"></script>
	<script src="./js/navbar.js"></script>
	<link rel="stylesheet" href="./main.css">
	<title>明道中學校友會</title>
	<style>
	
	.new{
		background: #58a;
		background: linear-gradient(-45deg, transparent 40vw, #58a 0);
		height:99vh;
		width:80vw;
	}

	.new2{
		background: #58c;
		background: linear-gradient(135deg, transparent 40vw, #58a 0);
		height:99vh;
		width:80vw;
		position:absolute;
		left:20vw;
	}
	
	</style>
</head>
 
<body><div w3-include-html="./layout/navbar.php"></div>

	<div class="sec1">
		<a id="top"></a>
		<iframe src="./split-screen-slideshow/dist/index.html" style="width:100vw; height:100vh; margin:0px; padding:0px;">	</iframe>
	</div>
	
	
	<div class="sec1" style="padding:2vh">
		<div align="center"><img src="./img/sub_news.gif"/><div>
		<div class="pr">
			<?php
			
				include('./connect.php');
				
				$sql = 'SELECT * FROM `news` ORDER BY `id` DESC';
				$run = mysqli_query($con,$sql);
				$now = 0;
				while($row = mysqli_fetch_assoc($run)){
					if ($now == 3) break;
					echo 
						'
						<div  class="p1">
							<div class="p1-1" align="center">
								<img src="https://drive.google.com/uc?id='.$row['img'].'" style="height:200px;"/>
							</div>
							<div class="p1-2">
								<h3 align="center">'.$row['title'].'</h3>
								<p style="font-size:medium;">'.mb_substr($row['content'],1,40,"UTF-8").'</p>
								<p align="center">'.$row['date'].'</p>
							</div>
						</div>
						';
					$now ++;
				}
			
			?>
			    </div>
			</div>
		</div>
	</div>
	
	<div class="sec1" style="padding:0; flex-direction:row;">
        <div>
            <img src="./img/sub_alumni.gif" style="width:10vw;  " alt="校園回憶錄"/>
        </div>
        <div>
            <iframe src="./parallax-slideshow/dist/index.html" scrolling='no'  style="width:70vw; height:40vw; margin:20px;" ></iframe>
        </div>
	</div>


    <div class="sec1" style="padding:0; flex-direction:row-reverse;">
        <div><img src="./img/sub_service.gif" style="width:10vw;" alt="傑出校友"/></div>
        <div><iframe src="./slide.php" style="width:70vw; height:40vw; margin:20px;"> </iframe></div>
    </div>

    <div class="blank1"></div>
    <div class="sec2">
        <div align="center"><img src="./img/sub_alumni2.gif"  style="padding-bottom: 15px;"/></div>
        <div class="pr">
            <div><button id = "help"  class = "service"	onclick=location.href="help.php" />	</div>
            <div><button id = "home"  class = "service"	onclick=location.href="home.php" />	</div>
            <div><button id = "goods"  class = "service"	onclick=location.href="goods.php" />	</div>
        </div>
    </div>

	<div class="blank1"></div>
	
	<div w3-include-html="./layout/footer.html"></div>
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>