<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "datasurvey");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$position = mysqli_real_escape_string($link, $_REQUEST['position']);
$carrier = mysqli_real_escape_string($link, $_REQUEST['carrier']);
$hours = mysqli_real_escape_string($link, $_REQUEST['hours']);
$comments = mysqli_real_escape_string($link, $_REQUEST['comments']);
$rating = mysqli_real_escape_string($link, $_REQUEST['rating']);


// Attempt insert query execution
$sql = "INSERT INTO survey(name,email,age,position,carrier,hours,comments,rating)
 VALUES ('$name', '$email', '$age', '$position', '$carrier', '$hours', '$comments', '$rating')";
if(mysqli_query($link, $sql)){
    echo "Thank you for answering the survey.";
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
