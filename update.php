<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
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
        $query = " update records set Fname = '".$UserFName."', Mname = '".$UserMName."', Lname = '".$UserLName."', email='".$UserEmail."', dob='".$UserDOB."', nation = '".$UserNation."', Address = '".$UserAddress."', Gender = '".$UserGender."', Picture = '".$UserPhoto."' where Id='".$UserId."'";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>