<?php 
	
	try
	{
		$db=new PDO("mysql:host=localhost;dbname=web","root","");
	}
	catch(PDOException $e)
	{
		echo "登录异常！";
	}

	// 查询所有网站
	$sql2 = $db->prepare("select * from application where account='2014181062'");
	$sql2->execute();

	$num=1;

	echo "<div>";
		while ($row= $sql2->fetch(PDO::FETCH_NUM)) {

			$templateName=$row[0];
			$webName=$row[1];

			$applicant=$row[2];

			$applicantDepartment=$row[3];
			$status_int=$row[5];
			$account=$row[6];


			$status_str="";
			if($status_int==0)
				$status_str="未通过";
			else
				$status_str="已通过";
		
			echo "<div class='applicationCard' onmouseover='mouseover()' onmouseout='mouseout(this.title)' title=\"$num\">";

				echo "<p>申请人账号</p>".$account."</br>";
				// echo "<p>申请人</p>".$applicant."</br>";
				echo "<p>申请人所在院系</p>".$applicantDepartment."</br>";
				echo "<p>网站名</p>".$webName."</br>";
				echo "<p>所用模版</p>".$templateName."</br>";
				echo"<p id='status'>网站状态</p>".$status_str."</br>";
			echo "</div>";
		

			$num++;
		}

	echo "</div>";
	echo<<<css
		<style>
			
			#status{
				color:#F06A21;
			}
			.applicationCard{
				width:250px;
				border:1px solid #C1C1C1;
				background:#E3E8C9;
				margin:5px 5px 5px 0px;
				display:inline-block;
				text-align :center;
			}

			p{
				border:1px solid #E8E8E8;
				font-weight:bolder;
				font-size:17px;
				font-family:微软雅黑;
				padding:10px 0px;
				background:#C4E5B7;
				margin:0;
			}

		</style>
css;


	echo<<<js
		
		<script>

			function mouseover(value)
			{
				
			}

			function mouseout()
			{
				
			}
			
			
		</script>
js;


 ?>