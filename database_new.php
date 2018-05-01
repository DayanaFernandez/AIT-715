
<?php
$servername = "localhost";
$username = "dayanafe_dayis82";
$password = "Towson82";
$dbname = "dayanafe_customers";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$USERNAME = mysqli_real_escape_string($link, $_REQUEST['USERNAME']);
$PASSWORD = mysqli_real_escape_string($link, $_REQUEST['PASSWORD']);
$EMAIL = mysqli_real_escape_string($link, $_REQUEST['EMAIL']);
$FIRST_NAME = mysqli_real_escape_string($link, $_REQUEST['FIRST_NAME']);
$LAST_NAME = mysqli_real_escape_string($link, $_REQUEST['LAST_NAME']);
$BIRTHDATE = mysqli_real_escape_string($link, $_REQUEST['BIRTHDATE']);
$PHONE_NUMBER = mysqli_real_escape_string($link, $_REQUEST['PHONE_NUMBER']);

$sql = "INSERT INTO Customers (USERNAME, PASSWORD, EMAIL, FIRST_NAME, LAST_NAME, BIRTHDATE, PHONE_NUMBER)
VALUES ('$USERNAME', '$PASSWORD', '$EMAIL', '$FIRST_NAME', '$LAST_NAME', '$BIRTHDATE', '$PHONE_NUMBER')";

if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Thank you!</title>
	<style type="text/css">.login-page{
    max-width: 500px;
    padding: 15px;
    margin: auto;
}

.form{
    position: relative;
    background: darkblue;
    z-index: 1;
    max-width: 500px;
    margin: auto;
    padding: 15px;
    text-align: center;
}
.form input{
    font-family: "Roboto", sans-serif;
    outline: 1;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px; 
}
.form button{
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #ffffff;
    font-size: 14px;
    cursor: pointer;
}

body {background-color:#cde;}
* {color:darkblue;}
* {font-family:"Verdana";}
#nav1 {float: left; margin-left: 7px; margin-right: 7px; }
#nav2 {float: left; margin-left: 7px; margin-right: 7px; }
#nav3 {float: left; margin-left: 7px; margin-right: 7px; }
#nav4 {float: left; margin-left: 7px; margin-right: 7px; }
#nav5 {float: left; margin-left: 7px; margin-right: 7px; }
#nav6 {float: left; margin-left: 7px; margin-right: 7px; }
#title {text-align:center;}
	</style>
</head>
<script>
var today = new Date ();
var hourNow = today.getHours();
var greeting;
if (hourNow > 18) {
greeting = 'Good evening & welcome!';
} else if (hourNow > 12) {
greeting = 'Good afternoon & welcome!';
} else if (hourNow > 0) {
greeting = 'Good morning & welcome!';
} else {
greeting = 'Welcome!';
}
document.write('<h3>' + greeting + '</h3>');
</script>
<body>
<div id="nav2"><a href="http://www.dayanafernandez.com/home.html">Home</a></div>

<div id="nav1"><a href="http://www.dayanafernandez.com/request_form.html">Request Services</a></div>

<div id="nav4"><a href="http://www.dayanafernandez.com/costs.html">Costs</a></div>

<div id="nav5"><a href="http://www.dayanafernandez.com/contact.html">Contact Me</a></div>

<div id="nav6"><a href="http://www.dayanafernandez.com/reviews.html">Reviews</a></div>

<div id="nav3"><a href="http://www.dayanafernandez.com/previous_work.html">Previous Work</a></div>
<br>
<h1 id="title">Thank you!</h1>
<p>Thank you for creating an account!</p>
<br>
<footer>&copy; Fernandez Translation Services 2018</footer>
</body>
</html>
