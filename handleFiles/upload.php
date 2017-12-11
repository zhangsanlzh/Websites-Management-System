

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
	$sql1 = $db->prepare("select * from application where status='1' and account='2014181062'");
	$sql1->execute();
	$db->query($sql);

echo"
	<div class='uploadBox'>

		<p style='color:green; margin-top:10px;'>上传资源</p>

		<form action='../handleFiles/upload_file.php' method='post' enctype='multipart/form-data'>

			<div class='lineBox'>
				<p style='height:17px;'></p>
				<input type='file' name='file_upload' id='file' /> 
			</div>";
	// 要更新的网站
	echo"<div class='lineBox'>";

			echo"<p>请选择要更新的网站：</p>";

		echo "<select class='webName' name='webName'>";

			$str="";

			while ($row= $sql1->fetch(PDO::FETCH_NUM)) {

				$str.= "<option value=\"$row[1]\">$row[1].xg.hactcm.edu.cn</option>";

				// $num++;

			}

				echo "$str";

		echo "</select>

		</div>";

	// 要更新的资源栏目
		echo"<div class='lineBox'>";

			echo"<p>请选择要更新的栏目：</p>";

		echo "<select class='webName' name='section'>";
		echo<<<html
			<option value="instruction" >实验指导</option>
			<option value="ppt" selected>课件</option>
			<option value="notice">教学通知</option>
			<option value="lessonPlans">教案</option>
			<option value="calendar">教学周历</option>

html;
		echo "</select>

		</div>";
			
		echo "
			<div class='lineBox update'>
				<input type='submit' name='submit' value='更新' />
			</div>
		</form>
	</div>";



	//获得符合条件的总行数
	$sql1 = $db->prepare("select * from application where status='1' and account='2014181062'");
	$sql1->execute();
	// $db->query($sql);

echo"
	<div class='uploadBox'>

		<p style='color:green; margin-top:10px;'>删除资源</p>
		
	";

			// 要更新的网站
	echo"<div class='lineBox'>";

			echo"<p>请选择要更新的网站：</p>";

		echo "<form action='../handleFiles/delete_file.php' method='post'>";

		echo "<select class='webName' name='webName_delete'>";

			$str="";

			while ($row= $sql1->fetch(PDO::FETCH_NUM)) {

				$str.= "<option value=\"$row[1]\">$row[1].xg.hactcm.edu.cn</option>";

				// $num++;

			}

				echo "$str";

		echo "</select>

		</div>";

	// 要更新的资源栏目
		echo"<div class='lineBox'>";

			echo"<p>请选择要更新的栏目：</p>";

		echo<<<html

		
		
			<select class="webName" name="section_delete">
				<option value="instruction" >实验指导</option>
				<option value="ppt" selected>课件</option>
				<option value="notice">教学通知</option>
				<option value="lessonPlans">教案</option>
				<option value="calendar">教学周历</option>
			</select>

html;
		echo "</div>";

	echo "<div class='enlargeHeight'>资源删除后请重新发布该类型的资源</div>";
			
		echo <<<html
			<div class='lineBox update'>
			
				<button  onmousedown="click()">更新</button>
				
				
			</div>
		</form>

	</div>";
html;


echo <<<css

	<style>
		
		.enlargeHeight{
			height:45px;
			font-size:12px;
			color:#B21A0D;
			letter-spacing:1px;
			// border:1px solid red;
		}

		

		.webName{
			width:200px;
		}

		.lineBox{
			margin-bottom:5px;
			margin-top:10px
		}
		
		.update{
			margin-top:40px;
		}
		.uploadBox{
			margin-top:10px;
			margin-right:20px;
			border:1px solid #888888;
			// width:200px;
			border-radius:5px;
			padding:10px;
			box-shadow: 10px 10px 5px #888888;
			display:inline-block;
		}

		.lineBox p{
			// border:1px solid red;
			margin:0px;
			font-size:15px;
			color:#3EB20A;
		}

	</style>


css;



echo<<<js
	<script>
		function click()
		{	

			// var resourceType=document.getElementById('section_delete').value;

			// var xmlhttp;

			// if (window.XMLHttpRequest)
			//   {// code for IE7+, Firefox, Chrome, Opera, Safari
			//   xmlhttp=new XMLHttpRequest();
			//   }
			// else
			//   {// code for IE6, IE5
			//   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			//   }
			
			// createXMLHttpRequest();  

			// xmlhttp.open("GET","delete_file.php?id=resourceType",true);
			// xmlhttp.send("action=",resourceType);

			// alert("已更新！");

		}
	</script>

js;



 ?>