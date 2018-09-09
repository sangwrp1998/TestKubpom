<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #ff6666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 600px; /* only for demonstration, should be removed */
    background: #80ffaa;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #4d94ff;
    text-align: center;
    height: 600px; /* oly for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ดตู่</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="register.php">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
  <article>
  <body>

<?php
// define variables and set to empty values

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$firstname = $lastname = $Citizen = $Age =  $gender = $Size = $Height = $Weight = $Telephone = $message = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $Citizen = test_input($_POST["Citizen"]);
  $Age = test_input($_POST["Age"]);
  $gender = test_input($_POST["gender"]);
  $Size = test_input($_POST["Size"]);
  $Height = test_input($_POST["Height"]);
  $Weight = test_input($_POST["Weight"]);
  $Number = test_input($_POST["Telephone"]);
  $message = test_input($_POST["message"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $Citizen;
echo "<br>";
echo $Age;
echo "<br>";
echo $gender;
echo "<br>";
echo $Size;
echo "<br>";
echo $Height;
echo "<br>";
echo $Weight;
echo "<br>";
echo $Number;
echo "<br>";
echo $message;
echo "<br>";

//insert data
$sql = "INSERT INTO userprofile2 (firstname, lastname, citizen, age, gender, size, height, weight, number, message) 
VALUES ('$firstname', '$lastname', '$Citizen', '$Age', '$gender', '$Size', '$Height', '$weight', '$Number', '$message');"

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>