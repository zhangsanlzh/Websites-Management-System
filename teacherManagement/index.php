<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/mainStyle.css">
	

</head>
<body>
	<!-- all elements except for white blocks are  there -->
	<div class="top">
		<!-- the logo container,containing white blocks ,at the top of elementsBox -->
		<div class="logoContainer">
			<!-- the logo container,only logo there -->
			<div class="logo">
				<img src="../images/logo.png" alt="logo">				
			</div>

		</div>
	</div>

	<!-- all elements containing white blocks are  there -->
	<div class="wholeBox">
			
		<div class="menu_box">
			<ul>
				<a href="index.php?id=home">
					<li><div id="home">首页</div></li>
				</a>

				<a href="index.php?id=create" >
					<li><div id="create">快速建站</div></li>
				</a>
				<a href="index.php?id=overlook">
					<li><div id="overlook">模版预览</div></li>
				</a>
				<a href="index.php?id=myweb">
					<li><div id="myweb">我的网站</div></li>
				</a>
				<a href="index.php?id=upload">
					<li><div id="upload">资源管理</div></li>
				</a>
				<a href="index.php?id=exit">
					<li><div id="exit">退出</div></li>
				</a>
			</ul>

		</div>
		
		<div class="green_border" />				

		<div class="contents">
			<?php 
				require("../handleFiles/handle.php");
			 ?>
			
		</div>
		

	</div>



</body>
</html>