
<?php
$servername="localhost:3312";
$username="root";
$password="";
$database_name="FitnessZone";

$conn=mysqli_connect($servername,$username,$password,$database_name,3312);
if(!$conn){

	die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['Update']))
{
	$MemberID = $_POST['MemberID'];
	$FirstName = $_POST['FirstName'];
	$Gender = $_POST['Gender'];
	$MobileNumber= $_POST['MobileNumber'];
	$Email = $_POST['Email'];
	$FatherName = $_POST['FatherName'];
	$MotherName= $_POST['MotherName'];
	$GYMTime = $_POST['GYMTime'];
	$Age = $_POST['Age'];
	$Amount = $_POST['Amount'];


                                           
	$sql_query1="UPDATE member SET FirstName='$_POST[FirstName]',Gender='$_POST[Gender]',MobileNumber= '$_POST[MobileNumber]',Email='$_POST[Email]',FatherName='$_POST[FatherName]',MotherName='$_POST[MotherName]',GYMTime='$_POST[GYMTime]',Age= '$_POST[Age]',Amount='$_POST[Amount]'
      WHERE MemberID='$_POST[MemberID]'";

	if (mysqli_query($conn, $sql_query1))
	{
	echo "";
	header("Location:Update.html");

	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($conn);
	}
   mysqli_close($conn);
   }


   if(isset($_POST['Delete']))
{
	$MemberID = $_POST['MemberID'];
	                                        
	$sql_query2="DELETE FROM member WHERE MemberID='$_POST[MemberID]'";

	if (mysqli_query($conn, $sql_query2))
	{
	echo "";
	header("Location:Delete.html");

	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($conn);
	}
   mysqli_close($conn);
   }
?>