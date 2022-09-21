<?php
    if(isset($_POST['submit'])){
        $txtName = $_POST['txtName'];
        $txtEmail = $_POST['txtEmail'];
        $txtSubject = $_POST['txtSubject'];
        $txtMessage = $_POST['txtMessage'];

        $to='gwapoko0407@gmail.com';
        $subject='Form Submission';
        $message="Name: " .$txtName. "\n". "Email: " .$txtEmail. "\n". "Wrote the following: " ."\n\n " .$txtMessage;
        $headers="From: ".$email;

        if(mail($to, $subject,$message,$headers)){
            echo "<h1>Sent Successfully! We will contact you shortly";
        }
        else{
            echo "Something went wrong :(";
        }
    }



?>