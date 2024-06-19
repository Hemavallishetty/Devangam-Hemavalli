<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','feedback') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['question1'])&& isset($_POST['question2']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $question1= $_POST['question1'];
            $question2= $_POST['question2'];

            

            $sql = "INSERT INTO `feed` (`name`,`email`,`question1`,`question2`)  VALUES ('$name','$email','$question1','$question2')";
            
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
