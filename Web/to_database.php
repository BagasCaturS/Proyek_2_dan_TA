<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "analisis_the_baru";

// Create connection
$conn       = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("<H1>Connection failed: " . mysqli_connect_error() . "</H1>");
}


//read the json file contents
$jsondata = file_get_contents('the_rank.json');

//convert json object to php associative array
$data = json_decode($jsondata, true);

//get the employee details

// $name           = $data['personal']['name'];
// $gender         = $data['personal']['gender'];
// $age            = $data['personal']['age'];
// $streetaddress  = $data['personal']['address']['streetaddress'];
// $city           = $data['personal']['address']['city'];
// $state          = $data['personal']['address']['state'];
// $postalcode     = $data['personal']['address']['postalcode'];
// $designation    = $data['profile']['designation'];
// $department     = $data['profile']['department'];
$name      = $data['data']['name'];
//insert into mysql table
$sql = "INSERT INTO campus_info(nama_univ)
    VALUES('$name')";
// if(!mysql_query($sql,$con))
// {
//     die('Error : ' . mysql_error());
// }
