<?php	

//生成n个模版容器
export();

function export(){

	$img_Path="../templates/overlook/template";

	echo <<<html

	<div class='webTemplate'>
		<div class='imgBox'>
			<img src="../templates/overlook/template1.png" alt='template1' onmouseover='mouseover(this.alt)' onmouseout='mouseout()'/>
		</div>
		
	</div>
	<div class='webTemplate'>
		<div class='imgBox'>
			<img src="../templates/overlook/template2.png" alt='template2' onmouseover='mouseover(this.alt)' onmouseout='mouseout()'/>
		</div>
		
	</div>
	<div class='webTemplate'>
		<div class='imgBox'>
			<img src="../templates/overlook/template3.png" alt='template3' onmouseover='mouseover(this.alt)' onmouseout='mouseout()'/>
		</div>
		
	</div>

html;

}


	echo <<<html
		

		<div id="showBox" onmouseover='stay()' onmouseout='disapear()'>鼠标移动到图片上放大预览</div>

html;


?>
<?php

	
	echo <<<js
		
		<script>

			function stay()
			{
				document.getElementById("showBox").style.width="120%";
				document.getElementById("showBox").style.height="600px";
			}

			function disapear()
			{
				document.getElementById("showBox").style.width="120%";
				document.getElementById("showBox").style.height="0";
			}

		</script>




		<script>
			
			function mouseover(alt)
			{
				switch (alt) {
					case 'template1':
						document.getElementById("showBox").style.backgroundImage=
							"url('../templates/overlook/template1.png')";
						
					break;

					case 'template2':
						document.getElementById("showBox").style.backgroundImage=
							"url('../templates/overlook/template2.png')";
					break;

					case 'template3':
						document.getElementById("showBox").style.backgroundImage=
							"url('../templates/overlook/template3.png')";
					break;
									
				}

				document.getElementById("showBox").innerHTML=alt;
				document.getElementById("showBox").style.color="black";
				document.getElementById("showBox").style.width="120%";
				document.getElementById("showBox").style.height="600px";
				


			}

			function mouseout()
			{
				document.getElementById("showBox").style.color="black";				
				document.getElementById("showBox").style.width="100%";
				document.getElementById("showBox").style.height="0px";
				document.getElementById("showBox").innerHTML="鼠标移动到图片上放大预览";

			}

		</script>


js;



	echo <<<style

		<style>
			
			#showBox{
				
				// border:1px solid red;
				width:100px;
				height100px;
				display:block;
				color:black;
			}

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

 ?>
