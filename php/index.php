<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $condi = false;

    $con = new mysqli('localhost', 'root', '', 'contact_form');
    if ($con) {
        $sql = "insert into `contact_form`.`contact_table`(Name, Email, Message)values('$name','$email','$message')";
        $result = mysqli_query($con, $sql);
        if ($result) {

            echo '<script type="text/javascript">
            $(document).ready(function(){
            swal.fire({
            title: `Message`,
            text: `Message Submited Successfully..!`,
            icon: `success`,
            confirmButtonText: `OK` 
            
            })
              });
                            
            </script>';

            

        } else {
            echo '<script type="text/javascript">
           alert(mysqli_error($con);</script>';
        }
    } 
    else {
        echo '<script type="text/javascript">
        alert(mysqli_error($con);</script>';
    }
if($condi)
{
}

}


?>