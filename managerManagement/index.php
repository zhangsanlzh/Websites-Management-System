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

				<a href="index.php?id=application" >
					<li><div id="application">申请列表</div></li>
				</a>
				<a href="index.php?id=releasedWebsite">
					<li><div id="releasedWebsite">已部署网站</div></li>
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