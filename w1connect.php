<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','csse2') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['queries']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $queries = $_POST['queries'];

            $sql = "INSERT INTO wd (name, email, city, queries/)  VALUES ('$name','$email','$city','$queries')";

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