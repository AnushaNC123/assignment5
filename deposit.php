<html>
<head>
    <title>Deposit</title>
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
    <table border="1">
        <tr>
            <th colspan="3" style="text-align: center;"> Deposit</th>
        </tr>   

        <tr>
            <th>Enter Account Number</th><th><input type="text" name="acno"></th>
        </tr>
        <tr>
            <th>Enter the amount to deposit</th><th><input type="number" name="amt" ></th>
        </tr> 
        <tr>
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="submit" value="Deposit"></th>
        </tr>
    </table>
    <br><br>
        <div id="tab">
            <br>
        </div>
</form>
    </center>
    <?php
include 'connection.php';
if(isset ($_POST["submit"]))
{
$amt = $_POST['amt'];
$acno = $_POST['acno'];
        $q =mysqli_query($con, "select * from customer WHERE acno = $acno ");
        $row=mysqli_fetch_array($q);

$bal = $row['balance'];

$tot=$amt+$bal;
$sql = mysqli_query($con,"UPDATE `customer` set `balance`='$tot' WHERE acno='$acno'");
if($sql)
                    {
                        echo '<script>alert("Amount Deposited Successfully");window.location="view_bank.php"</script>';
                    }
                    else
                    {
                       echo '<script>alert("Failed");</script>'; 
                    }
}
?>
</body>
</html>
