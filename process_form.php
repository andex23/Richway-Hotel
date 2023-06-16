<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Save the email to your database or send it to your email. 
    // For the sake of this example, let's just print it.
    echo "The email provided is: " . $email;
}
?>
