<html>
<?php
if($_POST){
	$name=$_POST["username"];
	$age=$_POST["age"];
	echo"My name is".$name;
	echo "<br>";
	echo "My age is".$age;
}

?>
</html>