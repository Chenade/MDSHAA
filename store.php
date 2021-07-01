 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	<script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
	<script type="text/javascript" src="slidemenu.js"></script>
	<title>明道中學校友會</title>
	<style>
        td{
            line-height: 1.5em;
        }
    </style>
</head>
 
<body>

	<div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		<div><h3 class="title">優 惠 商 家</h3></div>
		<div><p class="subtitle">明道人福利社 > 優惠商家</p></div>
	</div>
	
	<div class="store_detail" style="flex-direction: column; padding: 0; border: none">
	<?php
		
		include('connect.php');
		
		$sql = 'SELECT * FROM `store`';
		$run = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_assoc($run)){
			
			echo '
                <div class="store_detail" style=" ">
                    <div>
                        <img src="https://drive.google.com/uc?id='.$row['photo'].'" class="store" style="margin-right: 2em">
                    </div>
                    
                    <div class="store_content" style="min-width: 500px;">
                        <table cellpadding="5" style="width: 80vw; max-width: 500px; margin:1em">
                            <tr><td colspan="2"><h3>'.$row['name'].'</h3></td></tr>
                            <tr><td>地址：</td><td align="left">'.$row['address'].'</td></tr>
                            <tr><td>電話：</td><td align="left">'.$row['tel'].'</td></tr>
                            <tr><td style="white-space: nowrap;">專屬優惠：</td><td align="left">'.$row['discount'].'</td></tr>
                            <tr><td colspan="2"><a href="'.$row['website'].'" style=" line-height: 1.5em;">查看官網</a></td></tr>
                        </table>
                    </div>
                    
                </div>
                
                
             
                
			';
			
		}
	
	?>
	</div>
	<div w3-include-html="./layout/footer.html"></div>
</body>
</html>


 <script src="./js/w3.js"></script>
 <script>
     w3.includeHTML();
 </script>