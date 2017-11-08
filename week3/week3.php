



<html>
 <head>
 <link rel="stylesheet" href="style.css" type="text/css" >
 </head>

 <?php
 function drawSquare(){
	 $r = rand(1,6);
	 echo '<div class="block'.$r.'"></div>';
 }
 for($a=0;$a<6;$a++){
 drawSquare();
 }


 ?>


 </html>
