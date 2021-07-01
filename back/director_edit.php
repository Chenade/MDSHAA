<!doctype HTML5>

<html>

<head>
	<link rel="stylesheet" href="../css/back.css">
</head>


<body align="center" class="bodY">

<div class="box">

    <div class="title">
        <h1 style="color: white">理事長的話</h1>
    </div>

    <?php

    include('../connect.php');

    $sql = 'SELECT * FROM `director`';
    $run = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($run);

    ?>

    <div align="center" style="margin: 5vh;">

        <form action="director_edit2.php" method="POST" enctype="multipart/form-data">

            <table cellpadding="8">

                <tr>
                    <td>姓名：</td><td><input type="text" name="name" alt="NAME" value="<?php echo $row['name'];?>" required></td>
                </tr>

                <tr>
                    <td>上傳圖片：</td><td><input type="text" name="photo" id="photo"  value="<?php echo $row['img'];?>"></td>

                </tr>
                <tr>
                    <td></td><td><a href="https://drive.google.com/uc?id=<?php echo $row['img'];?>">查看</a></td>
                </tr>

                <tr>
                    <td>理事長的話：</td><td><textarea name="word" style="width:30vw;height:30vh;"> <?php echo $row['word'];?></textarea></td>
                </tr>


                <table>
                    *換行請打&lt;br&gt; <Br><br>
                    <input type="submit" class="button"> &emsp;
                    <input type="reset" class="button">

        </form>

    </div>
</div>
</body>

</html>