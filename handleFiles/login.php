<?php
	
	if(isset($_POST['login']))
	{
		$userid=$_POST['userid'];
		$pwd=$_POST['pwd'];
		$sql="select * from admin where id='$userid'";
		$result=$db->query($sql);
		if(list($id,$name,$password)=$result->fetch(PDO::FETCH_NUM))
		{
			if($password==$pwd)
			{
				session_start();
				$SESSION['userid']=$userid;
				header("location:index.php");
			}
			else
				echo "<script>alert('�������');</script>";
		}
		else
			echo "<script>alert('�û��������ڣ�');</script>";
	}
?>