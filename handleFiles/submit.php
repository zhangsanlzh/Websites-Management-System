<?php 
	try
	{
		$db=new PDO("mysql:host=localhost;dbname=web","root","");
	}
	catch(PDOException $e)
	{
		echo "登录异常！";
	}

	// echo "radio: ". $_POST['template']."<br/>";
	// echo "webName: ". $_POST['webName']."<br/>";
	// echo "applicant: ". $_POST['applicant']."<br/>";
	// echo "applicantDepartment: ". $_POST['applicantDepartment']."<br/>";
	// echo "reasons: ". $_POST['reasons']."<br/>";

	$sql="insert into application values('".$_POST['template'].
	"','".$_POST['webName']."','".$_POST['applicant']."','".
	$_POST['applicantDepartment']."','".$_POST['reasons'].
	"','"."0"."','"."2014181062"."')";

	$result=$db->query($sql);

	// echo  $sql;
	// echo "申请正在审核中... ...";
	// 

echo <<<css
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
			<title>审核通知</title>
			<meta charset="utf-8"/>
		</head>
		<body>
			

			<div class="messageBox">
				<center>	
					<div class="notice">
						<div>申请正在审核中... ...</div>
					</div>
					
					<div class="return">
						<button onClick="location.href='../teacherManagement/index.php?id=create'">返回</button>
					</div>
				</center>

			</div>


		</body>
		</html>
		

html;


	header('refresh:2;url=../teacherManagement/index.php?id=create');


 ?>