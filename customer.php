<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "dayanafe_dayis82";
$password = "Towson82";
$dbname = "dayanafe_customers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT USERNAME, FIRST_NAME, LAST_NAME FROM dayanafe_customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["USERNAME"]. " - Name: " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. "<br>";
    }
} else {
    echo "<h1>My Account</h1> <b>Username:</b> Dayis82 <br> <b>Password:</b> Towson82 <br> <b>First name:</b> Dayana <br> <b>Last name:</b> Fernandez <br> <b>Birthdate:</b> 1-31-1982 <br> <b>Phone number:</b> 301-706-0422";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>My Account</title>
<style>
body {background-color:#cde;}
* {color:darkblue;}
* {font-family:"Verdana";}
#nav1 {float: left; margin-left: 7px; margin-right: 7px; }
#nav2 {float: left; margin-left: 7px; margin-right: 7px; }
#nav3 {float: left; margin-left: 7px; margin-right: 7px; }
#nav4 {float: left; margin-left: 7px; margin-right: 7px; }
#nav5 {float: left; margin-left: 7px; margin-right: 7px; }
#nav6 {float: left; margin-left: 7px; margin-right: 7px; }
</style>
<body>
<br><br>
<div id="nav2"><a href="http://www.dayanafernandez.com/home.html">Home</a></div>

<div id="nav1"><a href="http://www.dayanafernandez.com/request_form.html">Request Services</a></div>

<div id="nav4"><a href="http://www.dayanafernandez.com/costs.html">Costs</a></div>

<div id="nav5"><a href="http://www.dayanafernandez.com/contact.html">Contact Me</a></div>

<div id="nav6"><a href="http://www.dayanafernandez.com/reviews.html">Reviews</a></div>

<div id="nav3"><a href="http://www.dayanafernandez.com/previous_work.html">Previous Work</a></div>
<br>


</body>
</html>