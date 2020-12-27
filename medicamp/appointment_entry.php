<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="application_db";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $age = $_POST['age'];
	 $app_date = $_POST['app_date'];


	 $sql_query = "INSERT INTO e_details (name,email,phone,age,app_date)
	 VALUES ('$name','$email','$phone','$age','$app_date')";

	 if (mysqli_query($conn, $sql_query))
	 {
		echo "New Details Entry inserted successfully !";
	 }
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
