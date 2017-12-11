<?php 
	
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
	$sql1 = $db->prepare("select COUNT(*) from application where status='1'");
	$sql1->execute();
	$result = $sql1->fetch(PDO::FETCH_NUM);
	$rows=$result[0];//行数
	$cols = 7; //列数

	if($result[0]!=0){
		// 定义表格宽度
		$td_width = floor(100 / $cols)."%";

		// 记录表格
		$tab_str = "<table >\n";
		$tab_str.="<tr>
				<th>所用模版</th>
				<th>网站名</th>
				<th>申请人</th>
				<th>申请人所在院系</th>
			</tr>";

		// 从数据库中读出符合条件的行
		$sql2 = $db->prepare("select * from application where status='1'");
		$sql2->execute();

		//循环记录数据库中符合条件的数据
		while($row= $sql2->fetch(PDO::FETCH_NUM))
		{
			    $tab_str.="<tr>\n";
			    for ($k = 0; $k < $cols; $k++)
			    {
			    	switch ($k) {

			    		case 3:
			    			$tab_str.= "<td width=\"$td_width\">$row[3]</td>\n";	    			
			    		break;
			    		
			    		case 2:
			    			$tab_str.= "<td width=\"$td_width\">$row[2]</td>\n";
			    			
			    		break;

			    		case 1:
			    			$tab_str.= "<td width=\"$td_width\">$row[1]</td>\n";
			    			
			    		break;

			    		case 0:
			    			$tab_str.= "<td width=\"$td_width\">$row[0]</td>\n";
			    			
			    		break;

			    	}

			    }
			    $tab_str.="</tr>\n";
		}

		$tab_str.="</table>\n";
		// 至此完成表格的记录

		// 输出表格的样式
		echo <<<css
			<style>		
				table{

					border-collapse:collapse;
				}
				
				table,th, td
				  {
				 	 border: 1px solid black;
				  }

				  td
				  {
				  	height:30px;
				  	text-align:center;
				  }

				  tr:hover{
				  	background-color:#F5FCCC;
				  }
			</style>
css;


		echo <<<js
			<script>
				function yes()
				{
					// alert("hello");

					var xmlhttp;
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }


					  
				}


				function no()
				{
					alert("no");	
				}
			</script>		


js;

		// 将数组返回到展示界面
		echo $tab_str;

}else{
	echo "没有部署网站！";
}


 ?>