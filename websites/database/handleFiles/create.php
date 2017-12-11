<?php 

	echo "
		<div class='create'>
			<span>请选择一个模版：</span>
		</div>";
		
?>

<?php 

	require("handleFiles/templateBox.php");

	echo<<<html

	<form action="" method="post">
		<div class="create">
			<span>请输入网站的名称：</span>			
		</div>

		<div class="webNameTextbox_container">
			<input type="text" class="webNameTextbox"/>	
		</div>

		<div class="webNameTextbox_container">
			<label id="webNameOfServer">.xg.hactcm.edu.cn</label>
		</div>

		<div class="create">
			<span>申请人：</span>
		</div>

		<div class="webNameTextbox_container">
			<input type="text" class="webNameTextbox"/>	
		</div>

		<div class="create">
			<span>申请人所在院系：</span>
		</div>

		<div class="webNameTextbox_container">
			<select>
				<option >药学院</option>
				<option selected>信息技术学院</option>
				<option>人文学院</option>
			</select>	
		</div>

		<div class="create">
			<span>申请理由：</span>
		</div>
		
		<div class="webNameTextbox_container" >
			<textarea  class="textarea" placeholder="100字以内"></textarea>	
		</div>
		
		<div class="submit">
			<input type="submit" text="确定" />
		</div>
	</form>


html;
 ?>



