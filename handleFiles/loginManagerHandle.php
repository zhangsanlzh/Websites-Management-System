<?php
	
	try
	{
		$db=new PDO("mysql:host=localhost;dbname=web","root","");
	}
	catch(PDOException $e)
	{
		echo "数据库连接失败：".$e->getMesage();
	}


	if(isset($_POST['login'])){
	
		$userid=$_POST['userid'];
		$pwd=$_POST['pwd'];
		$sql="select * from manager where account='$userid'";
		$result=$db->query($sql);

		if(list($name,$account,$password)=$result->fetch(PDO::FETCH_NUM)){
			
			if($password==$pwd){
			
				session_start();
				$SESSION['userid']=$userid;
				header('location:../managerManagement/index.php');
			}
			else{
				
				echo "密码错误！页面将于3秒后返回。";

				header('refresh:3;url=../managerLogin.php');	
			
			}
			
		}
		else{
		
			echo "用户名不存在！页面将于3秒后返回。";

// 			echo <<<label
// 			<input type="label" content="立刻返回！" />;
// label;			
			header('refresh:3;url=../managerLogin.php');

		}

	}
?>