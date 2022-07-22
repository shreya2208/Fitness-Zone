<?php
$servername="localhost:3312";
$username="root";
$password="";
$database_name="fitnessZone";

$var_connection=mysqli_connect($servername,$username,$password,$database_name,3312);

if(!$var_connection)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
	$Uname = $_POST['username'];
	$password= $_POST['password'];

	$query1="SELECT * FROM login where username='$_POST[username]' and Pass='$_POST[password]' ";

	if ($result= mysqli_query($var_connection, $query1))
	{
	 $count=mysqli_num_rows($result);
		if($count==1){
				echo "Loged in successfully ";
                header("location:Home.html");
		}
		else {
				echo "Password or Username is Invalide!";
		}

	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($var_connection);
	}
	mysqli_close($var_connection);

}

?>