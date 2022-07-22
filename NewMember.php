<?php
$servername="localhost:3312";
$username="root";
$password="";
$database_name="fitnessZone";

$conn=mysqli_connect($servername,$username,$password,$database_name,3312);

if(!$conn){

	die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['Save']))
{
	$FirstName = $_POST['FirstName'];
	$Gender = $_POST['Gender'];
	$MobileNumber= $_POST['MobileNumber'];
	$Email = $_POST['Email'];
	$FatherName = $_POST['FatherName'];
	$MotherName= $_POST['MotherName'];
	$GYMTime = $_POST['GYMTime'];
    $AdhaarNumber = $_POST['AdhaarNumber'];
	$DOJ = $_POST['DOJ'];
	$Age = $_POST['Age'];

                                            //DBMS variable                                          pphp var
	$sql_query="INSERT INTO member(FirstName,Gender,MobileNumber,Email,FatherName,MotherName,GYMTime,AdhaarNumber,Age,DOJ) VALUES ('$FirstName','$Gender','$MobileNumber','$Email','$FatherName','$MotherName','$GYMTime','$AdhaarNumber','$Age','$DOJ')";


    $sql_query1="INSERT INTO payment(MName) VALUES('$FirstName')";

    if (mysqli_query($conn, $sql_query))
	{
	echo "";
	header('location: Added.html');
	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($conn);
	}

	
    if (mysqli_query($conn, $sql_query1))
	{
	echo "";
	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($conn);
	}

mysqli_close($conn);
}

?>


<!-- <label>Owner: <?php echo $row['Owner']; ?></label></br>
<input type="radio" name="Owner" checked=<?php if($row['Owner'] = "A") { echo "true"; }?>  value="A">A
<input type="radio" name="Owner" checked=<?php if($row['Owner'] = "B") { echo "true"; }?> value="B">B</br></br> -->
