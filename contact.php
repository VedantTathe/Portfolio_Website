<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // $con = new mysqli('localhost', 'root', '', 'contact_form');
    // if ($con) {

    $con = new mysqli('localhost', 'id21213700_withnocheatssfs', 'Madhav@06', 'id21213700_contact_form');
    if ($con) {
        // $q = "select Name, Email, Message from contact_table where Name='$name'";
        $q = "select Name, Email, Message from contact_table where Name='$name'";
        $run = mysqli_query($con, $q);

        $flag = true;
        $msg = "";

        while ($row = mysqli_fetch_array($run)) {

            $Name = $row[0];
            $Email = $row[1];
            $Message = $row[2];

            if ($email == $Email && $message == $Message) {

                // echo '<div style="width:fit-content; margin:auto;"><br><br><center style="font-size:20px;">This Entry already Exists...!</center><br><br>Name: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message . '<br><br><button style="
                //   display: flex;width: fit-content; margin: auto; padding:10px 20px; border-radius:10px; background-color:yellow;"><a style="text-decoration:none; font-size:15px;" href="../index.html" >OK</a></button><br></div>';

                $msg = 'Entry already Exists...!';
                $flag = false;
            }


        }
        if ($flag) {

            // $sql = "insert into `contact_form`.`contact_table`(Name, Email, Message)values('$name','$email','$message')";

            $sql = "insert into `id21213700_contact_form`.`contact_table`(Name, Email, Message)values('$name','$email','$message')";
            $result = mysqli_query($con, $sql);
            if ($result) {


                // echo '<div style="width:fit-content; margin:auto;"><br><br><center style="font-size:20px;">Message Submited Successfully...!</center><br><br>Name: ' . $name . '<br>Email: ' . $email . '<br>Message: ' . $message . '<br><br><button style="
                //   display: flex;width: fit-content; margin: auto; padding:10px 20px; border-radius:10px; background-color:yellow;"><a style="text-decoration:none; font-size:15px;" href="../index.html" >OK</a></button><br></div>';


                $msg = 'Message Submited Successfully...!';
            }

        } else {
            mysqli_error($con);
        }
    } else {
        mysqli_error($con);
    }


    $_SESSION["msg"] = $msg;
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["message"] = $message;



}


header("Location: index.php");
exit;


?>