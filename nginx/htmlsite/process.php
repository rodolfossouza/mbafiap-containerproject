<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $query = "INSERT INTO employee(first_name,last_name,city_name,email) 
	 values ('$first_name','$last_name','$city_name','$email')";
	 if($result = pg_query($query)){
		echo "Data Added Successfully.";
	 }
	 else{
		echo "Error.";
	 }
}
?>