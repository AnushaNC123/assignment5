<?php 

    require_once("connection.php");
    $query = " select * from records ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Records</title>
</head>
<body>

                        <table border="1">
                            <tr>
                                <td> User ID </td>
                                <td> User FName </td>
                                <td> User MName </td>
                                <td> User LName </td>
                                <td> User Email </td>
                                <td> User DOB </td>
                                <td> User Nation </td>
                                <td> User Address </td>
                               
                                <td> User Gender </td>
                                <td> User Picture </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        
                                        $UserId= $row['Id'];
                                        $UserFName = $row['Fname'];
                                        $UserMName = $row['Mname'];
                                        $UserLName = $row['Lname'];
                                        $UserEmail = $row['email'];
                                        $UserDOB = $row['dob'];
                                        $UserNation = $row['nation'];
                                        $UserAddress = $row['Address'];
                                        $UserGender = $row['Gender'];
                                        $UserPhoto = $row['Picture'];
                            
                                        
                            ?>
                                    <tr>
                                        <td><?php echo  $UserId ?></td>
                                        <td><?php echo $UserFName ?></td>
                                        <td><?php echo $UserMName ?></td>
                                        <td><?php echo $UserLName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserDOB ?></td>
                                        <td><?php echo $UserNation ?></td>
                                        <td><?php echo $UserAddress ?></td>
                                        <td><?php echo $UserGender ?></td>
                                        <td><?php echo $UserPhoto ?></td>
                                  
                                        <td><a href="edit.php?GetID=<?php echo $UserId ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $UserId ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    
    
</body>
</html>