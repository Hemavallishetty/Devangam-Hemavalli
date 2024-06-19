<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','contact') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['password']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            

            $sql = "INSERT INTO `cont` (`name`,`email`,`password`)  VALUES ('$name','$email','$password')";
            
            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }

?>