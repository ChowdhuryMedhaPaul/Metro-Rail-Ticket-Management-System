<?php 

$host ="localhost"; 
$user ="root"; 
$pass =""; 
$db   ="rail7"; 


$conn = new mysqli($host,$user,$pass,$db);

if( $conn -> connect_error ){
	die( $conn -> error );
}
else{
	// echo "Database connected";
}


?>