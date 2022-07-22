<?php
$servername="localhost:3312";
$username="root";
$password="";
$database_name="FitnessZone";

$conn=mysqli_connect($servername,$username,$password,$database_name,3312);
if(!$conn){

	die("Connection Failed:" .mysqli_connect_error());
}


if(isset($_POST['Save']))
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


                                            //DBMS variable                                          pphp var
$sql_query="INSERT INTO member(MemberID,FirstName,Gender,MobileNumber,Email,FatherName,MotherName,GYMTime,Age,Amount) VALUES ('$MemberID','$FirstName','$Gender','$MobileNumber','$Email','$FatherName','$MotherName','$GYMTime','$Age','$Amount')";
	if (mysqli_query($conn, $sql_query))//need to pass two attributes
	{
	echo "";
	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($conn);
	}
mysqli_close($conn);
}

if(isset($_POST['Update']))
{
	$MemberID = $_POST['MemberID'];
	


                                           
	$sql_query1="UPDATE member SET name='$_POST[FirstName]',Gender='$_POST[Gender]',MobileNumber= '$_POST[MobileNumber]',Email='$_POST[Email]',FatherName='$_POST[FatherName]',MotherName='$_POST[MotherName]',GYMTime='$_POST[GYMTime]',Age= '$_POST[Age]',Amount='$_POST[Amount]'
WHERE MemberID='$_POST[MemberID]'";

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


   if(isset($_POST['Delete']))
{
	$MemberID = $_POST['MemberID'];
	


                                            
	$sql_query2="DELETE FROM member WHERE memberID='$_POST[MemberID]'";

	if (mysqli_query($conn, $sql_query2))
	{
	echo "";
	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($conn);
	}
   mysqli_close($conn);
   }


if(isset($_POST['search']))
{


	$MemberID=$_POST['MemberID'];
	//$MobileNumber= $_POST['MobileNumber'];
	
	$query = "SELECT * FROM member where MemberID='$MemberID'";
	
	$query_run = mysqli_query($conn,$query);
	while($row=mysqli_fetch_array($query_run))
	{

		?>
		 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Delete Member</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Update Delete Member
        </div>
       <form action="update.php" method="post">
            <div class="form">

                <div class="inputfield">
                    <label>Member ID</label>
                    <input type="text" name="MemberID" class="input" value="<?php echo $row['MemberID']?>"/>
                </div>
                <div class="inputfield">
                    <label>First Name</label>
                    <input type="text" name="FirstName" class="input" value="<?php echo $row['FirstName']?>"/>
                </div>
                <div class="inputfield">
                    <label>Mobile Number</label>
                    <input type="text" name="MobileNumber" class="input"value="<?php echo $row['MobileNumber']?>"/>
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input type="text" name="Email" class="input"  value="<?php echo $row['Email']?>" />
                </div>

                <div class="inputfield">
                    <label>Gender</label>
                    <input type="text" name="Gender" class="input" value="<?php echo $row['Gender']?>" />
                </div>

                <div class="inputfield">
                    <label>Father Name</label>
                    <input type="text" name="FatherName" class="input" value="<?php echo $row['FatherName']?>" />
                </div>
             <div class="inputfield">
                    <label>Mother Name</label>
                    <input type="text" name="MotherName" class="input" value="<?php echo $row['MotherName']?>" />
                </div>
                <div class="inputfield">
                    <label>GYM time</label>
                    <input type="text" name="GYMTime" class="input" value="<?php echo $row['GYMTime']?>" />
                </div>
                <div class="inputfield">
                    <label>Age</label>
                    <input type="text" name="Age" class="input" value="<?php echo $row['Age']?>" />
                </div>
                <div class="inputfield">
                    <label>Amount to pay</label>
                    <input type="text" name="Amount" class="input" value="<?php echo $row['Amount']?>" />
                </div>
<div class="btn-group" style="width:100%">
                    <button onclick="window.location.href='Update.html';" name="Update" style="width:25%">Update</button>
                    <button onclick="window.location.href='Update.html';" name="Delete" style="width:25%">Delete</button>  
                  

                </div>
               
            </div>
       </form>
    </div>

</body>


	    <?php
	}
 }
?>

