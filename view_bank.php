<?php
include 'connection.php';
?>

<html>
<head>
    <title>view bank</title>
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
    <table border="2" style="text-align:left;" cellpadding="2px">
      
                                            <tr>
                                                <th>Sl. No</th>
                                                <th>Account Number</th>
                                                <th>Customer Name</th>                                       
                                                <th>Customer Address</th> 
                                                <th>Account Type</th>                                        
                                                <th>Balance</th>   

                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"SELECT * FROM customer ORDER BY acno ASC");
                                            while($row=mysqli_fetch_array($sql))
                                            {
                                          ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo $i++;  ?></td>
                                                
                                                <td ><?php echo $row['acno'];  ?></td>
                                                <td><?php echo $row['cust_name'];  ?></td>
                                                <td><?php echo $row['cust_address'];  ?></td>
                                                <td><?php echo $row['acc_type'];  ?></td>
                                                <td><?php echo $row['balance'];  ?></td>
                                            </tr>
                                           <?php } ?> 
                                           <tr></tr>
                                           <tr><td colspan="6" style="text-align:left"></td></tr>
                                        </tbody>
    </table>

</form>
    </center>
</body>
</html>
