<?php
    include "db_connection.php";
    include "function.php";
    if(isset($_POST['contact_submit']))
    {
        $c_name = $_POST['name'];
        $c_email = $_POST['email'];
        $c_subject = $_POST['subject'];
        $c_message = $_POST['message'];

        $query = "INSERT INTO `contact` (`Cname`, `Cemail`, `Csub`, `Cmessage`) VALUES ('$c_name', '$c_email', '$c_subject', '$c_message')";

        $check=mysqli_query($conn,$query);
        if($check)
        {
          alertdirect("message send!!!",'contact.html');
        }
        else
        {
          alertdirect("message not send!!!",'contact.html');
        }
    }
?>