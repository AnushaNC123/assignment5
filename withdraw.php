<?php
include 'connection.php';
if($_POST)
    {
        $acno  =$_POST['acno'];
    }
?>

<html>
<head>
    <title>withdraw</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body>
    <center>
        <form method="post">
    <table border="1" style="text-align:left;">
        <tr>
            <th colspan="2" style="text-align:center;"> Withdraw</th>
        </tr>
        <tr>
            <th>Acccount Number</th><th><input type="number" name="acno" ></th>
        </tr>
        <tr>
            <th>Enter the amount to withdraw</th><th><input type="number" name="amt" ></th>
        </tr> 
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="del" value="Wihdraw"></th>
        </tr> 
    </table>
</form>
    </center>


    <br><br>

    <?php
include 'connection.php';
if(isset ($_POST["del"]))
{
$amt = $_POST['amt'];
$acno = $_POST['acno'];
        $q =mysqli_query($con, "select * from customer WHERE acno = $acno ");
        $row=mysqli_fetch_array($q);

$bal = $row['balance'];

$tot=$bal-$amt;
if($tot>=500)
{
$sql = mysqli_query($con,"UPDATE `customer` set `balance`='$tot' WHERE acno='$acno'");
if($sql)
                    {
                        echo '<script>alert("Amount Withdrawn Successfully");window.location="view_bank.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}else
{
  echo '<script>alert("Minimum 500 Rupees should be maintained");window.location="withdraw.php"</script>';  
}
}
?>
</body>
</html>
