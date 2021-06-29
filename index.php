<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registration Form</title>
    <style>
    th,td
    {
        padding:5px;
       font-size:20px

    }
    table
    {
        width:50%;
        text-align:center;
    }

    </style>    
</head>
<body class="bg-dark">
<table border="30" align="center">

      <form action="insert.php" method="post">
                           
                            <tr style="background-color:lightgreen;">
                               <th colspan="2" style="background-color:purple;"> PASSPORT</th>
                               
                            </tr>
                            <tr style="background-color:lightgreen;">
                                <td>Enter Passport Number</td>
                               <td> <input type="number"  placeholder=" number " name="Id"></td>
                               </tr> 
                            <tr style="background-color:lightgreen;">
                                <td>Enter FirstName</td>
                               <td> <input type="text"  placeholder=" User FirstName " name="fname"></td>
                               </tr> 
                               <tr style="background-color:lightgreen;">
                                <td>Enter MiddleName</td>
                               <td> <input type="text"  placeholder=" User MiddleName " name="mname"></td>
                               </tr> 
                               <tr style="background-color:lightgreen;">
                                <td>Enter LastName</td>
                               <td> <input type="text"  placeholder=" User LastName " name="lname"></td>
                               </tr> 
                               <tr style="background-color:lightgreen;">
                               <td>Enter Email</td>
                                <td><input type="text"  placeholder=" User Email " name="email"></td> 
                               </tr>
                               
                               <tr style="background-color:lightgreen;">
                               <td>Enter DOB</td>
                               <td><input type="date"  placeholder=" DOB " name="dob"></td>
                                </tr>
                                <tr style="background-color:lightgreen;">
                               <td>Enter Nationality</td>
                               <td><input type="text"  placeholder=" Nationality" name="nation"></td>
                               </tr>
                               <tr style="background-color:lightgreen;">
                               <td>Enter Address</td>
                               <td><textarea name="address" placeholder="address"></textarea></td>
                               </tr>

                               <tr style="background-color:lightgreen;"> 
                               <td>Select Gender</td>
                               <td> <input type="radio" name="gender"  value="male"/>Male
                                <input type="radio" name="gender"  value="female"/>Female
           
                               <input type="radio" value="other" name="gender">Other</td> 
                               </tr>
                               <tr style="background-color:lightgreen;">
                               <td>Choose picture</td>
                               <td><input type="file" name="photo"></td>
                               </tr>
                               
                               <tr style="background-color:lightgreen;"><center>
                                <td colspan="2" style="align:center;"><button name="submit">Submit</button></td>  </center>
                                </tr>
                               
                            </table>
                            </form>

                        
</body>
</html>
















