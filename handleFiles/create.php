<?php 

	echo "
		<div class='create'>
			<span>请选择一个模版：</span>
		</div>";
		
?>

<?php 

	// require("templateBox.php");

echo <<<style

		<style>

			.submit{
				// border:1px solid red;
				margin:10px 0 0 0px;
				width:100px;
				height:25px;

			}
			.submit input{
				width:100%;
				height:100%;
				
			}

			.textarea{
				width:305px;
				height:150px;
			}

			#webNameOfServer{
				font-size:15px;
				font-weight:bolder;	
				margin-left:0px;			
			}

			.webNameTextbox_container{
				// border:1px solid red;
				padding:0px;
				margin:0px;
				display:inline-block;
			}

			.webNameTextbox{
				width:80px;
				height:20px;

			}

			.create{
				height: 25px;
			}
			
			.create span{
				display:block;
				margin:10px auto;
			}
			
			.radio{
				height:20px;
				width:20px;
			}

			.webTemplate{
				width:140px;
				background:#C9C9C9;
				margin:10px 25px 10px 0px;
				display:inline-block;
				 border:1px solid grey;
			}

			.imgBox{
				width:100%;
				height:120px;
				// border:1px solid blue;
			}

			.imgBox img{
				width:100%;
				height:100%;
			}
		</style>

style;





	echo<<<html

	<form action="../handleFiles/submit.php" method="post" onsubmit="return checkForm()">
		
		<label for='radio1'>
			<div class='webTemplate'>
				<div class='imgBox'>
					<img src='../templates/overlook/template1.png' alt='' />
				</div>
				<div>
					<input  class='radio' type='radio' name='template' value='template1' id='radio1'/>
				</div>
			</div>
		</label>
		
		<label for='radio2'>
			<div class='webTemplate'>
				<div class='imgBox'>
					<img src='../templates/overlook/template2.png' alt='' />
				</div>
				<div>
					<input  class='radio' type='radio' name='template' value='template2' id='radio2'/>
				</div>
			</div>
		</label>

		<label for='radio3'>
			<div class='webTemplate'>
				<div class='imgBox'>
					<img src='../templates/overlook/template3.png' alt='' />
				</div>
				<div>
					<input  class='radio' type='radio' name='template' value='template3' id='radio3'/>
				</div>
			</div>
		</label>

		<div class="create">
			<span>请输入网站的名称：</span>			
		</div>

		<div class="webNameTextbox_container">
			<input type="text" class="webNameTextbox" name="webName" id="webName"/>	
		</div>

		<div class="webNameTextbox_container">
			<label id="webNameOfServer">.xg.hactcm.edu.cn</label>
		</div>

		<div class="create">
			<span>申请人：</span>
		</div>

		<div class="webNameTextbox_container">
			<input type="text" class="webNameTextbox" name="applicant"/>	
		</div>

		<div class="create">
			<span>申请人所在院系：</span>
		</div>

		<div class="webNameTextbox_container">
			<select name="applicantDepartment">
				<option value="Medicine Department">药学院</option>
				<option value="Information and Technology Department " selected>信息技术学院</option>
				<option value="Art Department">人文学院</option>
			</select>	
		</div>

		<div class="create">
			<span>申请理由：</span>
		</div>
		
		<div class="webNameTextbox_container" >
			<textarea  class="textarea" placeholder="100字以内" name="reasons"></textarea>	
		</div>
		
		<div class="submit">
			<input type="submit" text="确定" />
		</div>
	</form>


html;



echo<<<js

<script>
	function checkForm()
	{
		var html=document.getElementById('webName').value;

		if (html=="") {
			alert('请输入密码');
			return false;	
		}
		return true;
	}
</script>
js;



 ?>





