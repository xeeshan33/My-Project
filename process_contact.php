<?php 

include 'config.php';

    
    if (isset($_POST['submit'] )){

      $name = $_POST['name'];
      $email =  $_POST['email'];
      $subject =$_POST['subject'];
      $message =$_POST['message'];
  
      $query = "INSERT INTO booking (name, email, subject, message) VALUES ('$name', '$email', '$subject','$message')";
      if (mysqli_query($conn, $query)) {
      echo  '<h1 style="color:blue;"> Thank you for contacting us !</h1>';
      } else {
        echo "Error: " . mysqli_error($conn);
    }

    // echo "<pre>";
    //         print_r($_POST);
            
    //         echo "</pre>";
    //         echo $_POST['message'];


    }

    
    // if (mysqli_query($conn, $query)) 
    //     // Success message in an alert window
    //     echo "<script type='text/javascript'>
    //             alert('Thank you for contacting us!');
                
    //           </script>";
    // } else {
    //     // Error message in an alert window
    //     $error_message = mysqli_error($conn);
    //     echo "<script type='text/javascript'>
    //             alert('Error: $error_message');
    //           </script>";
    // }
    
    ?>
    
            
    


