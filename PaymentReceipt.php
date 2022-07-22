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


if(isset($_POST['Pay']))
{
 
    session_start();

    $MemberID = $_POST['MemberID'];
    // $PaymentMode = $_POST['PaymentMode'];


    // $sql_query10="INSERT INTO Payment(PaymentMode) VALUES ( '$PaymentMode')";

    // if (mysqli_query($conn, $sql_query10))
	// {
	// echo "";
	// }
	// else
	// {
	// echo "Error: " . $sql . "" . mysqli_error($conn);
	// }

    $Rname="SELECT * FROM payment where MemberID = '$_POST[MemberID]'";
    $Rname1 = mysqli_query($conn, $Rname) ;   

    while($row=mysqli_fetch_array($Rname1))
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

<br><br><br>
    <div class="wrapper">
        <div class="title">
            Payment Receipt
        </div>
            <div class="form">

            <div class="inputfield">
                    <label for="MemberId" > Member ID </label><br>
                    <input  id="MemberId" name="MemberID" value="<?php echo $row['MemberID']?>"/>
                </div>

               
                <div class="inputfield">
                    <label>Name  : </label>
                  <?php echo $row['MName']?>
                </div>

                
                <div class="inputfield">
                    <label>Payment Date  : </label>
                    <input type='date' id='hasta' value='<?php echo date('Y-m-d');?>'>
                </div>

               

                <div class="inputfield">
                    <label>Amount Paid  :</label>
                   <?php echo "3000" ?>
                </div>

                <!-- <div class="inputfield">
                    <label>Mode Of Payment  :</label>
                    <input  name="PaymentMode" value="
                    <?php// echo $row['PaymentMode']?>
                    "/>  
                 </div> -->

                <div class="btn-group" style="width:100%">

                    
                    <button onclick="window.location.href = 'Download.php';" style="width:25%" type="download" value="Download">Download</button>
                    </div>
    
    </div>
    </form>
    </div>
    <p></p>

     </body>
   </html>
<?php
   }
}

?>