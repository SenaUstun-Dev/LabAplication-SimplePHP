<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="lab_aplication";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $fullName = $_POST['fullName'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];

	 $sql_query = "INSERT INTO student (fullName,gender,email)
	 VALUES ('$fullName','$gender','$email')";

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