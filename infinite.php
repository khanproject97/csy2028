
<?php

/*
this is for the print of hello
$a=true;
$b=1;
while($a==true){
	echo "hello <br>";
	$b++;
	
	if($b==11){
	break;
	}
}

/*


GET can be used but it is not secure



/* 

this is for the submmition of date by form.


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

*/



/* 
this is to convert temperature.

if(isset($_POST['click'])){

$a=$_POST['Degree'];


echo "the value in degree is ".$a."C<br>";

$m=1.8*$a +32;

echo "the value in Fahrenheit is:".$m."F";


}
?>


<form action  ="" method="post">
	<label>Enter temperature in Celcius :</label>
	<input type ="number" name="Degree"><br><br>
	<input type="submit" name ="click" value="Convert">
	
</form> 

*/



if(isset($_POST['click'])){

$a=$_POST['Decimal'];


echo "The Decimal Decimal number".$a."<br>";

$m=$a%2;




echo "the value in Binary is:".$m;


}
?>


<form action  ="" method="post">
	<label>Enter the value in Decimal :</label>
	<input type ="number" name="Decimal"><br><br>
	<input type="submit" name ="click" value="Convert">
	
</form> 





 