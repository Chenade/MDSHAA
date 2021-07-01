
<!DOCTYPE html>
<html>
<head><link rel="icon" href="./img/logo-icon.png" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>skew test</title>
<style type="text/css">
html,body,div,img{
	margin:0;
	padding:0;
}
img{
	border:0 none;
	height:100vh;
}
.pic1{
	width:70vw;
	height:100vh;
	
	float:left;
	transform:skew(-50deg,0deg);
	-ms-transform:skew(-50deg,0deg); /* IE 9 */
	-moz-transform:skew(-50deg,0deg); /* Firefox */
	-webkit-transform:skew(-50deg,0deg); /* Safari and Chrome */
	-o-transform:skew(-50deg,0deg); /* Opera */
	overflow:hidden;
}
.pic1 img{
	transform:skew(50deg,0deg);
	-ms-transform:skew(50deg,0deg); /* IE 9 */
	-moz-transform:skew(50deg,0deg); /* Firefox */
	-webkit-transform:skew(50deg,0deg); /* Safari and Chrome */
	-o-transform:skew(50deg,0deg); /* Opera */
}
.pic2{
	width:70vw;
	height:100vh;
	float:left;
	margin-left:02vw;
	transform:skew(-50deg,0deg);
	-ms-transform:skew(-50deg,0deg); /* IE 9 */
	-moz-transform:skew(-50deg,0deg); /* Firefox */
	-webkit-transform:skew(-50deg,0deg); /* Safari and Chrome */
	-o-transform:skew(-50deg,0deg); /* Opera */
	overflow:hidden;
}
.pic2 img{
	margin-left:-180px;
	transform:skew(50deg,0deg);
	-ms-transform:skew(50deg,0deg); /* IE 9 */
	-moz-transform:skew(50deg,0deg); /* Firefox */
	-webkit-transform:skew(50deg,0deg); /* Safari and Chrome */
	-o-transform:skew(50deg,0deg); /* Opera */
	
}

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

.price {
    position: absolute;
    
    display: block;
    
    height: 100vw;
    width: 70vw;
    line-height: 72px;
    padding-left: 5px;
    border-width: 0px 72px 72px 0px;
    border-style: none solid solid;
    border-color: transparent transparent #3a20ad;
    text-align: center;
    border-radius: 5px 0 0 0;
}

</style>
</head>
<body>


<div style="display:flex; flex-wrap:no-wrap;">
	<div class="new">导航</div>
	<div class="new2">导航</div>
</div>
</body>
