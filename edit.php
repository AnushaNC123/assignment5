<?php 

    require_once("connection.php");
    $UserId = $_GET['GetID'];
    $query = " select * from records where Id='".$UserId."'";
    $result = mysqli_query($con,$query);

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
    }
   ?> 
   
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

         <table>

                            <form action="update.php?Id=<?php echo $UserId; ?>" method="post">
                           
                            
                            <tr style="background-color:lightgreen;">
                               <th colspan="2" style="background-color:purple;"> PASSPORT</th>
                               
                            </tr>
                            <tr>
                                <td>Enter Passport Number</td>
                               <td> <input type="number"  placeholder=" number " name="Id" value="<?php echo $UserId ?>"></td>
                               </tr> 
                            <tr style="background-color:lightgreen;">
                                <td>Enter FirstName</td>
                               <td> <input type="text"  placeholder=" User FirstName " name="fname" value="<?php echo $UserFName; ?>"></td>
                               </tr> 
                               <tr style="background-color:lightgreen;">
                                <td>Enter MiddleName</td>
                               <td> <input type="text"  placeholder=" User MiddleName " name="mname"  value="<?php echo $UserMName; ?>"></td>
                               </tr> 
                               <tr style="background-color:lightgreen;">
                                <td>Enter LastName</td>
                               <td> <input type="text"  placeholder=" User LastName " name="lname" value="<?php echo  $UserLName; ?>"></td>
                               </tr> 
                               <tr style="background-color:lightgreen;">
                               <td>Enter Email</td>
                                <td><input type="text"  placeholder=" User Email " name="email"  value="<?php echo $UserEmail; ?>"></td> 
                               </tr>
                               
                               <tr style="background-color:lightgreen;">
                               <td>Enter DOB</td>
                               <td><input type="date"  placeholder=" DOB " name="dob" value="<?php echo $UserDOB ?>" ></td>
                                </tr>
                                <tr style="background-color:lightgreen;">
                               <td>Enter Nationality</td>
                               <td><input type="text"  placeholder=" Nationality" name="nation" value="<?php echo $UserNation ?>" ></td>
                               </tr>
                               <tr style="background-color:lightgreen;">
                               <td>Enter Address</td>
                               <td><textarea name="address" placeholder="address" value="<?php echo  $UserAddress; ?>"></textarea></td>
                               </tr>

                               <tr style="background-color:lightgreen;"> 
                               <td>Select Gender</td>
                               <td> <input type="radio" name="gender" value="<?php echo $UserGender; ?>" />Male
                                <input type="radio" name="gender" value="<?php echo $UserGender; ?>">Female
           
                               <input type="radio" value="other" name="gender" value="<?php echo $UserGender; ?>">Other</td> 
                               </tr>
                               <tr style="background-color:lightgreen;">
                               <td>Choose picture</td>
                               <td><input type="file" name="photo" value="<?php echo $UserPhoto; ?>" ></td>
                               </tr>
                               
                               
                                <td><button  name="update">Update</button></td>
                            </form>
</table>
                    
</body>

</html>
