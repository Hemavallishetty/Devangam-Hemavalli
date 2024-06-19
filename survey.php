<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','election') or die("Connection Failed");

        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mobile']) && isset($_POST['voteid']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $mobile = $_POST['mobile'];
            $voteid = $_POST['voteid'];

            $sql = "INSERT INTO survey (fname, lname,mobile,voteid)  VALUES ('$fname','$lname','$mobile','$voteid')";
            
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