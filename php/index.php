<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // $con = new mysqli('localhost', 'root', '', 'contact_form');
    // if ($con) {

    $con = new mysqli('sql305.infinityfree.com', 'if0_34539970', 'jMGwsSAIJl9i', 'if0_34539970_contact_form');
    if ($con) {
            // $q = "select Name, Email, Message from contact_table where Name='$name'";
            $q = "select Name, Email, Message from if0_34539970_contact_table where Name='$name'";
            $run=mysqli_query($con,$q);

            $flag = true;

            while ($row=mysqli_fetch_array($run))
            {
                  
                  $Name=$row[0];
                  $Email=$row[1];
                  $Message=$row[2];
               
                  if($email == $Email && $message == $Message)
                  {
                
                    echo '<div style="width:fit-content; margin:auto;"><br><br><center style="font-size:20px;">This Entry already Exists...!</center><br><br>Name: '.$name.'<br>Email: '.$email.'<br>Message: '.$message.'<br><br><button style="
                  display: flex;width: fit-content; margin: auto; padding:10px 20px; border-radius:10px; background-color:yellow;"><a style="text-decoration:none; font-size:15px;" href="../index.html" >OK</a></button><br></div>';
                  $flag = false;
                  }
                  
            
            }
 if($flag)
            {
                
    //     $sql = "insert into `contact_form`.`contact_table`(Name, Email, Message)values('$name','$email','$message')";

        $sql = "insert into `if0_34539970_contact_form`.`if0_34539970_contact_table`(Name, Email, Message)values('$name','$email','$message')";
        $result = mysqli_query($con, $sql);
        if ($result) 
        {
                  
           
                 echo '<div style="width:fit-content; margin:auto;"><br><br><center style="font-size:20px;">Message Submited Successfully...!</center><br><br>Name: '.$name.'<br>Email: '.$email.'<br>Message: '.$message.'<br><br><button style="
                  display: flex;width: fit-content; margin: auto; padding:10px 20px; border-radius:10px; background-color:yellow;"><a style="text-decoration:none; font-size:15px;" href="../index.html" >OK</a></button><br></div>';
         
            }
            
        }
        else {
            mysqli_error($con);
        }
    } else {
        mysqli_error($con);
    }

}


?>


