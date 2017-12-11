<?php	

//生成n个模版容器
export(3);

function export($number){

	for ($i=0; $i <$number ; $i++) { 
			$str_id="radio".$i;
		echo "
			<label for='$str_id'>
				<div class='webTemplate'>
					<div class='imgBox'>
						<img src='#'' alt='' />
					</div>
					<div>
						<input  class='radio' type='radio' name='radio' id='$str_id'/>
					</div>
				</div>
			</label>";		

	}
}

?>
<?php

	
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
		</style>

style;

 ?>
