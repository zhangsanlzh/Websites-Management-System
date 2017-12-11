
<!-- 将文件写入数据库 -->

<?php


if ($_FILES["file_upload"]["error"] > 0)
  {
  	switch ($_FILES["file_upload"]["error"]) {
  			case 1:
  				echo "文件超出了服务器规定的大小（<150M）";
  				break;

			case 2:
				echo "上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值";
				break;

			case 3:
				echo "文件只有部分被上传";
				break;

			case 4:
				echo "没有文件被上传";
				break;

			case 6:
				echo "找不到临时文件夹";
				break;

			case 7:
				echo "文件写入失败";
				break;
  		
  			default:
  				echo "发生了未知的错误，请联系系统维护人员";
  				break;
  	}

  	header('refresh:3;url=../teacherManagement/index.php?id=upload');
 }
else
  {
	  echo "文件名： " . $_FILES["file_upload"]["name"] . "<br />";
	  echo "文件类型： " . $_FILES["file_upload"]["type"] . "<br />";
	  echo "文件大小：" . ($_FILES["file_upload"]["size"] / 1024) . " Kb<br />";
	  echo "临时存储位置" . $_FILES["file_upload"]["tmp_name"]."<br />";
	  echo $_POST["webName"]."xg.hactcm.edu.cn"."</br>";
	  echo "今天是 " . date("Ymdh") . "</br>";
	  echo $_POST['section']."</br>";

	  try
	{
		$db=new PDO("mysql:host=localhost;dbname=web","root","");
	}
	catch(PDOException $e)
	{
		echo "登录异常！";
	}

	 $blob = fopen($_FILES["file_upload"]["tmp_name"], 'rb');

	//插入资源
	$sql1 = $db->prepare("insert into coursesinformation values('".$_POST['webName']."', :file, '".$_POST['section']."', '2014181062', ' ".$_FILES["file_upload"]["name"]." ' ,'".date("Ymdh") ."')");

	$sql1->bindParam(':file', $blob, PDO::PARAM_LOB);

	$sql1->execute();
	// $db->query($sql1);




  	header('refresh:5;url=../teacherManagement/index.php?id=upload');
	
  }

echo <<<html

	<!DOCTYPE html>
	<html>
	<head>
		<title>上传提示</title>
	</head>
	<body>
	
	</body>
	</html>

html;


echo<<<css
	<style>
		body{
			background:#E3E8C9;
		}
	</style>
css;

?>




<?php 

// 网站名
echo $_POST['webName'];

// 资源名
echo $_FILES["file_upload"]["name"]." ";

// 资源类型
echo $_POST['section'];


 ?>
