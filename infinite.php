
<?php

/*

$a=true;
$b=1;
while($a==true){
	echo "hello <br>";
	$b++;
	
	if($b==11){
	break;
	}
}
*/

/* 

GET can be used but it is not secure

 */


 if(isset($_POST['click'])){

$a=$_POST['number'];

$m=true;
echo "the number is".$a."<br>";
for($i=2;$i<$a-1;$i++){
	
if($a%$i==0){
$m=false;	
break; 
}
}
if ($m==false){
	
	echo "the number is composite";
}
else{
	echo "prime";		
}
}
?>


<form action  ="" method="post">
	<label>Enter a number :</label>
	<input type ="number" name="number"><br><br>
	<input type="submit" name ="click" value="Check">
	
</form>


