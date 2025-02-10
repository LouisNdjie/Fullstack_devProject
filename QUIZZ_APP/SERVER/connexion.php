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
    $req = "SELECT NAME_USERS,PASS_USERS FROM USERS WHERE NAME_USERS LIKE '$userName' AND PASS_USERS LIKE '$userPass'";
    mysqli_query($connect, $req) or die(mysqli_error($connect));
}
?>