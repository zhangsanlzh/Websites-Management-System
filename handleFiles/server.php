<?php 

	if (isset($_POST['action']))
	{
		switch($_POST['action'])
		{
			case "yes":yes();break;
			case "no":no();break;
			
		}
	}
	
	function yes()
	{
		// 连接数据库
		try
		{
			$db=new PDO("mysql:host=localhost;dbname=web","root","");
		}
		catch(PDOException $e)
		{
			echo "数据库连接异常！";
		}


		//获得符合条件的总行数
		$sql1 = $db->prepare("update application set  status='1'");
		$sql1->execute();

		//获得符合条件的总行数
		$sql2 = $db->prepare("select * from application where status='1'");
		$sql2->execute();

		//循环记录数据库中符合条件的数据
		while($row= $sql2->fetch(PDO::FETCH_NUM))
		{
			$dir1=$row[1];

			// if (!file_exists("../websites/$dir1")) {

 		//   	 	mkdir("../websites/$dir1", 0777, true);
 		//   	}

 		  	$template=$row[0];

 		  	$src = "../templates/$template";
			$dst = "../websites/$dir1";

			recurse_copy($src,$dst);

		}

		

		

	}
	

	function no()
	{
		echo "hello 按钮2";
	}


	function recurse_copy($src,$dst) { 
			    $dir = opendir($src); 
			    @mkdir($dst); 
			    while(false !== ( $file = readdir($dir)) ) { 
			        if (( $file != '.' ) && ( $file != '..' )) { 
			            if ( is_dir($src . '/' . $file) ) { 
			                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
			            } 
			            else { 
			                copy($src . '/' . $file,$dst . '/' . $file); 
			            } 
			        } 
			    } 
			    closedir($dir); 
			} 

 ?>