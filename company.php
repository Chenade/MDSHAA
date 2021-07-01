 <!doctype HTML5>
 
<html>
 
<head><link rel="icon" href="./img/logo-icon.png" />
	<script src="./js/jquery-3.4.1.min.js"></script><script src="./js/navbar.js"></script><link rel="stylesheet" href="./main.css">
<!--	<script type="text/javascript" src="slidemenu.js"></script>-->
	<title>明道中學校友會</title>
	<style></style>
</head>
 
<body><div w3-include-html="./layout/navbar.php"></div>

	<div align="center" class="banner">
		<a id="top"></a>
		
		<div>
			<h3 class="title">校  友  徵  才</h3>
		</div>
		
		<div>
			<p class="subtitle">明道人幫明道人 </p>
		</div>
		
	</div>
	
	
    <div align="center" style="margin-bottom: 1vw;">
        <button class="button" onclick=location.href="./company_apply.php">企業徵才申請</button>
    </div>

    <div class="flex_table">

        <div class="flex_tr"  style="width: 60vw; border-bottom: solid black 2px;" >

            <div class="flex_td" align="left" style="width:10vw; max-width:150px;"><b>公司名稱</b></div>
            <div class="flex_td" style="width:10vw; max-width:120px;"><b>職位名稱</b></div>
            <div class="flex_td" style="width:20vw; max-width:120px;"><b>科系要求</b></div>
            <div class="flex_td" style="width:20vw; max-width:150px;"><b>聯絡人</b></div>
            <div class="flex_td" style="width:20vw; max-width:150px;"><b>聯絡電話</b></div>

        </div>

        <?php

        include('./connect.php');

        $sql = 'SELECT * FROM `company request`';
        $run = mysqli_query($con,$sql);


        while($row = mysqli_fetch_assoc($run)){

            $sql_co = 'SELECT * FROM `company` WHERE `id` like "'.$row['company'].'"';
            $run_co = mysqli_query($con,$sql_co);
            $row_co = mysqli_fetch_assoc($run_co);

            echo '
				<div class="flex_tr company"  style="width: 60vw;"  data-id="'.$row['id'].'">	
					
					<div class="flex_td" align="left" style="width:10vw; max-width:150px;">'.$row_co['name'].'</div>
					<div class="flex_td" style="width:10vw; max-width:120px;">'.$row['job'].'</div>
					<div class="flex_td" style="width:20vw; max-width:120px;">'.$row['department'].'</div>
					<div class="flex_td" style="width:20vw; max-width:150px;">'.$row_co['person'].'</div>
					<div class="flex_td" style="width:20vw; max-width:150px;">'.$row_co['tel'].'</div>
					
				</div>
			';

        }

        ?>
    </div>

	
	<div w3-include-html="./layout/footer.html"></div>

</body>
</html>


 <script src="./js/w3.js"></script>
 <script src="js/jquery-3.4.1.min.js"></script>
 <script>

     $(".company").on('click',function () {
        window.location.href = 'company_single.php?id=' + $(this).data('id');
     });
	 w3.includeHTML();


 </script>
