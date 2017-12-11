
<!-- 点击菜单时在菜单右侧添加绿色标识 -->
<?php 
	//显示除去 E_NOTICE 之外的所有错误信息 
	 error_reporting(E_ALL || ~E_NOTICE);
	
	function addNotice(){
		 
		 if ($_GET['id']=="create") {
		 	
		 	echo "<style>
				
				.menu_box #create{
					border-right: 3px solid #3EC600;
					
				}

				
		 	</style>";


		 }elseif ($_GET['id']=="overlook") {

			echo "<style>
				
				.menu_box #overlook{
					border-right: 3px solid #3EC600;
				}

				
		 	</style>";

		 	
		 }elseif ($_GET['id']=="myweb") {

			echo "<style>
				
				.menu_box #myweb{
					border-right: 3px solid #3EC600;
				}

				
		 	</style>";


		 	
		 }elseif ($_GET['id']=="exit") {

			echo "<style>
				
				.menu_box #exit{
					border-right: 3px solid #3EC600;
				}

				
		 	</style>";



		 }else{
		 	echo "<style>
				
				.menu_box #home{
					border-right: 3px solid #3EC600;
				}

				
		 	</style>";

		 }

	} 
	addNotice();


 ?>

<!-- 点击不同的菜单项，加载不同的文件 -->
<?php


function includeFiles(){
	 
	 if ($_GET['id']=="create") {

	 	 require("handleFiles/create.php");

	 }elseif ($_GET['id']=="overlook") {

	 	 require("handleFiles/overlook.php");

	 }elseif ($_GET['id']=="myweb") {

	 	 require("handleFiles/myweb.php");

	 }elseif ($_GET['id']=="exit") {

	  	require("handleFiles/exit.php");

	 }else{	 	

	 	 require("handleFiles/home.php");

	 }

} 
includeFiles();

?>
