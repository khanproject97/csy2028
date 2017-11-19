

<?php

/*
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
<option value='+'>
<input type ="text" name="operator"><br><br>

<label>Enter second number </label>
<input type ="text" name="num2"><br><br>

<input type="submit" name="save" value="submit">
</form>

*/

if(isset($_POST['save'])){
	

	echo '<pre>' ;
	print_r($_POST);

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['eaddress'];
	$color=$_POST['favcolor'];
	$address=$_POST['address'];
	

}




?>

<script 

function validate(form){
	
	if(form.tandc.value=='yes'){

	alert("Please accept terms and condition);
	return false;
	}
	
}

</script>


<form  method="POST" action="" onsubmit="return validate(this)">

<label>Enter first name </label>
<input type ="text" name="fname"><br><br>

<label>enter last name</label>
<input type ="text" name="lname"><br><br>

<label>Enter email address </label>
<input type ="text" name="eaddress"><br><br>

<label>Favourite color<label>
<select name="favcolor">

<option value="red">RED</option>
<option value="blue">BLUE</option>
<option value="pink">PINK</option>
<option value="green">GREEN</option>



</select><br><br>
<label>Address<label><br>
<textarea name="address" rows="2" cols='8'></textarea><br><br>


<label>Accept the Terms and condition </label>
<input type="radio" name='tandc' value='yes'><br><br>

<input type="submit" name="save" value="submit">
</form>
