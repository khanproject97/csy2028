

<?php

if(isset($_POST['save'])){

	
	$num1=$_POST['num1'];
	$operator=$_POST['operator'];
	$num2=$_POST['num2'];
	echo $num1.''.$operator.''.$num2.' = ';
	if($operator=='+'){
		echo $num1+$num2;
	}

	else if($operator=='-'){
		echo $num1-$num2;
	}
	else if($operator=='*'){
		echo $num1*$num2;
	}
	else if($operator=='/'){
		echo $num1/$num2;
	}

}
?>
<form method="POST" action="">
<label>Enter first number </label>
<input type ="text" name="num1"><br><br>

<label>operator</label>
<input type ="text" name="operator"><br><br>

<label>Enter second number </label>
<input type ="text" name="num2"><br><br>

<input type="submit" name="save" value="submit">
</form>

