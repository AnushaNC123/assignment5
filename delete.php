

<?php 

require_once("connection.php");

?>
<?php
if(isset($_GET['Del']))

         {
             $UserId = $_GET['Del'];
             $query = " delete from records where Id = '".$UserId."'";
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