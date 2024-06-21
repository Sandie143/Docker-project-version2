<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST['username'];
   $password = $_POST['password'];
   // Process the login here ;enter the if conditions
   if ($username == "Awuradwoa" && $password == "sandie143" ) {
        echo "Welcome,This is admin!"; 
    } else { 
        echo "Invalid username or password";
    }  
}
?>