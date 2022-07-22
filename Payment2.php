<?php

$servername="localhost:3312";
$username="root";
$password="";
$database_name="FitnessZone";
$_SESSION["name1"] = "name1";

$conn=mysqli_connect($servername,$username,$password,$database_name,3312);
if(!$conn){

	die("Connection Failed:" .mysqli_connect_error());
}


//$_SESSION['PaymentMode'] = $_POST['PaymentMode'];


if(isset($_POST['Show']))
{
	$MemberID = $_POST['MemberID'];


    $query3="SELECT * FROM payment where MemberID = '$_POST[MemberID]' ";
	$result3 = mysqli_query($conn, $query3);
  
    while($row=mysqli_fetch_array($result3))
	{


    ?>
	<!DOCTYPE html>
<html lang="en">

<html>

<head>
    <title>payment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
</head>

<body>
<style>
        body {
            background-image: url('Payment.jpg');
            background-size: cover;
        }


        title {

            color: Black;
            text-align: center;
        }
    </style>
    
    <form action="PaymentReceipt.php" method="post">

    <br><br><br>
    <div class="wrapper">
        <div class="title">
            Payment
        </div>
      
            <div class="form">

            
                </div>
                    <div class="inputfield">
                    <label>MemberID  : </label>
                    <input type="text" name="MemberID" class="input"  value="<?php echo $row['MemberID']?>" />
                </div>

                <br>
               
                <div class="inputfield">
                    <label>Member Name  : </label>
                    <input type="text" name="MName" class="input"  value="<?php echo $row['MName']?>"/>
                </div>

                <br>

                <div class=" inputfield">
                    <label for="date"> Date Of Payment : </label>
                    <input type='date' id='hasta' value='<?php echo date('Y-m-d');?>'>
                </div>

                <br>

                <div class="inputfield">
                    <label>Amount To Pay  : </label>
                    <input type="text" name="Amount" class="input"  value="<?php echo 3000?>" />
                   
                </div>

                <br>

                <div class="inputfield">
                    <label>Choose Payment Option   : </label>
                    <input type="radio" name="PaymentMode" value="Credit"> &nbsp;Credit &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                    <input type="radio" name="PaymentMode" value="Cash"> &nbsp;cash &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                    <input type="radio" name="PaymentMode" value="UPI"> &nbsp;UPI
                </div>
<br><br><br>
                <div class="btn-group" style="width:100%">

                    <button  onclick="window.location.href ='PaymentReceipt.php';" name="Pay" style="width:25%" type="Submit" value="Submit" >Pay</button>
                </div>

        
             </div>
        </form>
      </div>
    </form>
</body>
</html>

<?php
   }}
?>



    



