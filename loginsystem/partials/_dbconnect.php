<?php
$server="localhost:3307";
$username="root";
$password="";
$database="users";

$conn = mysqli_connect($server, $username, $password, $database );
if(!$conn){
//     echo "Connection is Successful";
// }
// else{
    die("Sorry we failed to connect: ". mysqli_connect_error());    
}
?>