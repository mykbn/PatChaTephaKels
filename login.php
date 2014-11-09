<?php

$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// $username = "root";
// $password= "";
// $database = "ceumoodle_database";
// $serverName = "localhost";

//Initialize Database Connection
$conn = new mysqli("localhost", "root", "", "ceumoodle_database");

//Check Connection
if($conn->connect_error){
	die("Connection Failed:" .$conn->connect_error);
}
echo "Connected Successfully";

$queryUsername = "SELECT * FROM users WHERE 'Username' = '$inputUsername'";
$resultUsername = mysqli_query($conn,$queryUsername)
	or die("Error: ".mysqli_error($conn));
$rowUser = mysqli_fetch_array($resultUsername);
$serverUser = $rowUser["Username"];

// $queryUsername = "SELECT * FROM 'users'";
// $queryPassword = "SELECT * FROM 'users' WHERE 'Password' = '$inputPassword'";

// $resultUsername = mysql_query($queryUsername);
// $resultPassword = mysql_query($queryPassword);

// echo $resultPasswordUsername;
// $rowUser = mysql_fetch_array($resultUsername);
// $rowPass = mysql_fetch_array($resultPassword);

// $serverUser = $rowUser["Username"];
// $serverPass = $rowPass["Password"];

// echo $queryUsername;
// echo $queryPassword;

if($inputUsername == $serverUser){
	echo "Successful!";
}
// mysql_close();

// if ($username == 'myk_bn' && $password == 'ewankosayo'){
// 	echo "Welcome";
// }else{
// 	echo "Invalid Login Information";
// }

?>
