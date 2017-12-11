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
	$sql1 = $db->prepare("select COUNT(*) from application where status='0'");
	$sql1->execute();
	$result = $sql1->fetch(PDO::FETCH_NUM);
	$rows=$result[0];//行数
	$cols = 7; //列数

	if($result[0]!=0)
	{
		// 定义表格宽度
		$td_width = floor(100 / $cols)."%";

		// 记录表格
		$tab_str = "<table >\n";
		$tab_str.="<tr>
				<th>所用模版</th>
				<th>网站名</th>
				<th>申请人</th>
				<th>申请人所在院系</th>
				<th>申请理由</th>
				<th colspan='2'>是否通过</th>
			</tr>";

		// 从数据库中读出符合条件的行
		$sql2 = $db->prepare("select * from application where status='0'");
		$sql2->execute();

		//循环记录数据库中符合条件的数据
		while($row= $sql2->fetch(PDO::FETCH_NUM))
		{		
			    $tab_str.="<tr>\n";
			    for ($k = 0; $k < $cols; $k++)
			    {
			    	switch ($k) {

			    		case 6:
			    			$tab_str.= "<td width=\"$td_width\"><button  onclick='fun(this)' value='no' >否</button></td>\n";
			    		break;
			    		
			    		case 5:
			    			$tab_str.= "<td width=\"$td_width\" ><button  onclick='fun(this)' value='yes'>是</button></td>\n";
			    		break;

			    		case 4:
			    			$tab_str.= "<td width=\"$td_width\">$row[4]</td>\n";
			    			
			    		break;

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
			


		var xmlHttp;  
		function createXMLHttpRequest(){ 
			//检查浏览器是否支持 XMLHttpRequest 对象
			if(window.ActiveXObject){  
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");  
			}  
			else if(window.XMLHttpRequest){  
				xmlHttp = new XMLHttpRequest();  
			}  
		}  
		function fun(n){  
			createXMLHttpRequest();  
			var url="../handleFiles/server.php";  
			xmlHttp.open("POST",url,true); 
			xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xmlHttp.onreadystatechange = callback;  
			xmlHttp.send("action=" + n.value);  
		}  
		function callback(){  
			if(xmlHttp.readyState == 4){  
				if(xmlHttp.status == 200){  
					alert('已处理');
					window.location.replace('index.php?id=application');   
				}  
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
	echo "没有申请！";
}





 ?>