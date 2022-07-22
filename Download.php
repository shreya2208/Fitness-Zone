<?php
$servername="localhost:3312";
$username="root";
$password="";
$database_name="FitnessZone";
$_SESSION["Rname1"] = "Rname1";

$conn=mysqli_connect($servername,$username,$password,$database_name,3312);
if(!$conn){

	die("Connection Failed:" .mysqli_connect_error());
}


if(isset($_POST['download']))
{
    $MemberID = $_POST['MemberID'];

    $sql_query7="INSERT INTO payment(Amount) VALUES ('Paid')";

    if (mysqli_query($conn, $sql_query7))
	{
	echo "";
	}
	else
	{
	echo "Error: " . $sql . "" . mysqli_error($conn);
	}

    
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Receipt</title>
</head>

<body>
    <style>
        ul {

            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(243, 235, 235);
            text-emphasis-color: "black";
            text-decoration-color: "black";
        }

        li {
            float: center;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            text-decoration-color: rgb(247, 244, 244);
        }

        li a:hover {
            background-color: rgb(100, 98, 98);
        }

        body {

            background-color: white;
        }

        center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        navbar {
            color: black;
            font-size: larger;
        }

        .navbar-brand {
            color: white;
        }

        p {
            font-family: verdana;
            font-size: 20px;
        }
    </style>

    <h1></h1>


    <ul>
        <li><a href="Home.html"><i class="fa fa-fw fa-search"></i> Return To Home </a></li>
    </ul>

    <p style="text-align:center;"><img src="payment-successful.gif" alt="Logo"></p>


    <br><br><br><br><br><br>

    </div>
    <p></p>

</body>

</html>