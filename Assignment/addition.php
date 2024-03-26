<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Addition operation</title>
</head>
<body>
	<h1>The sum of two numbers </h1>
	<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
       
        $Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
		$Fullname =$Fname."".$Lname;
		echo "<p>Hello my Fullname is : $Fname  $Lname <p>";
	}
?>

	<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
       
        $Firstnumber = $_POST['Firstnumber'];
		$Secondnumber = $_POST['Secondnumber'];
		$ADD =$Firstnumber +$Secondnumber ;
		echo "<p>The sum of $Firstnumber and $Secondnumber and $ADD is : $ADD<p>";
	}
?>
</body>
</html>