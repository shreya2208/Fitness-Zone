
<!DOCTYPE html>


<html lang="en">

<head>

<style>

body{

    background-image: url('list.jpg');
  background-size: cover;


}


</style>
    <title>List Of Members</title>

    <link rel="stylesheet" href="ListOfMembers.css">

</head>

<body>
    <div class="Main">
        <div class="main_h1">
            <h1>List Of Members</h1>
        </div>
    </div>
    
        <table>
            <tr>
                <th>Member id</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Email </th>
                <th>Gender </th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Gym Time</th>
                <th>Aadhar Number</th>
                <th>DOJ</th>
                <th>Age</th>
                <th>Amount</th>
            </tr>


            <?php

   $servername="localhost:3312";
    $username="root";
    $password="";
    $database_name="FitnessZone";
    $conn=mysqli_connect($servername,$username,$password,$database_name,3312);
    if(!$conn){

        die("Connection Failed:" .mysqli_connect_error());
    }
        
        $query="select * from member";
        $result=mysqli_query($conn,$query);
        $num=mysqli_num_rows($result);
        echo "";
        echo $num."<br>";
        echo "<br>";
        while($rows=mysqli_fetch_array($result)) 
            { 
            ?> 
            <tr> 
                <td><?php echo $rows['MemberID']; ?></td> 
                <td><?php echo $rows['FirstName']; ?></td> 
                <td><?php echo $rows['MobileNumber']; ?></td> 
                <td width="50%"><?php echo $rows['Email']; ?></td> 
                <td><?php echo $rows['Gender']; ?></td> 
                <td><?php echo $rows['FatherName']; ?></td> 
                <td><?php echo $rows['MotherName']; ?></td> 
                <td><?php echo $rows['GYMTime']; ?></td>
                <td><?php echo $rows['AdhaarNumber']; ?></td>
                <td  width="100%"><?php echo $rows['DOJ']; ?></td>  
                <td><?php echo $rows['Age']; ?></td> 
                <td><?php echo $rows['Amount']; ?></td>  
                

            
        <?php 
                } 
            ?> 
</tr> 


		

        </table>

    
</body>

</html>

