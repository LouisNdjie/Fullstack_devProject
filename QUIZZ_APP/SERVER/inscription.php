<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "QUIZZ";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if (!$connect) {
    die("echec de connexion...");
} 
$userName = $_POST["name"];
$userPass = $_POST["password"];

if(isset($_POST[submit]))
{
    $req = "INSERT INTO USERS VALUES (, '$userName', '$userPass')";
    mysqli_query($connect, $req) or die(mysqli_error($connect));
}
?>