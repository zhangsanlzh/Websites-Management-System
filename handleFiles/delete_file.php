<?php 

	try
	{
		$db=new PDO("mysql:host=localhost;dbname=web","root","");
	}
	catch(PDOException $e)
	{
		echo "登录异常！";
	}

	//获得符合条件的总行数
	$sql1 = $db->prepare("delete from coursesinformation where resourceType=
		'".$_POST["section_delete"]."' and webName='".$_POST["webName_delete"]."' ");
	$sql1->execute();
	



echo<<<css
		<style>
			.messageBox{
			margin:0 auto;
			width:280px;
			height:200px;
			border:1px solid #B4E5A0;
			box-shadow: 10px 10px 5px #888888;
			border-radius:25px;

		}
		
		.notice{
			height:80%;
			textalignment:


		}
		
		.return{
			position:relative;
			bottom:40px;
		}
		
		.return button{
			width:80px;
		}
		.notice div{
			position:relative;
			top:40px;
		}

		body{
			background:#E8E8E8;
		}

		.messageBox{
			background:#F5FCCC;
		}

		.notice{
			background:#BEE7AC;

		}
		</style>
css;



	echo <<<html
	
	<!DOCTYPE html>
		<html>
		<head>
			<title>更新提示</title>
			<meta charset="utf-8"/>
		</head>
		<body>
			

			<div class="messageBox">
				<center>	
					<div class="notice">
						<div>资源删除成功</div>
					</div>
					
					<div class="return">
						<button onClick="location.href='../teacherManagement/index.php?id=upload'">返回</button>
					</div>
				</center>

			</div>


		</body>
		</html>
html;

	


	header('refresh:2;url=../teacherManagement/index.php?id=upload');


 ?>