
<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if( empty($_POST['Id']) || empty($_POST['fname']) || empty($_POST['mname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['dob']) || empty($_POST['nation']) || empty($_POST['address']) || empty($_POST['gender']) || empty($_POST['photo']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserId= $_POST['Id'];
            $UserFName = $_POST['fname'];
            $UserMName = $_POST['mname'];
            $UserLName = $_POST['lname'];
            $UserEmail = $_POST['email'];
            $UserDOB = $_POST['dob'];
            $UserNation = $_POST['nation'];
            $UserAddress = $_POST['address'];
            $UserGender = $_POST['gender'];
            $UserPhoto = $_POST['photo'];

            $query = " insert into records (Id, Fname, Mname, Lname, email, dob, nation, Address, Gender,Picture ) values('$UserId','$UserFName','$UserMName','$UserLName','$UserEmail','$UserDOB','$UserNation','$UserAddress','$UserGender','$UserPhoto') ";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>
