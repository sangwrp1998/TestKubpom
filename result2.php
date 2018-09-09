<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Member </h2>
  <p>วิ่งแบบพี่ตูน </p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>UserID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>Gender</th>
        </tr>
    </thead>
    <tbody>
<?php
include("conn/mysqlcon.php");
$sql = "Select * from userprofile";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result))
    {
?>
       <tr>
        <td><?php echo $row["UserID"];?></td>
        <td><?php echo $row["Name"];?></td>
        <td><?php echo $row["Email"];?></td>
        <td><?php echo $row["Age"];?></td>
        <td><?php echo $row["Address"];?></td>
        <td><?php echo $row["Gender"];?></td>
        </tr>
        </tbody>
        
<?php
     }
}
else{
    echo "0 result";
}
?>
</table>
        </div>
        </body>
        </html>
<?php

// define variables and set to empty values
$name = $email = $gender = $comment = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  //$name = trim($_POST["name"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//echo "<h2>Your Input:</h2>";
//echo $name."<br>".$email."<br>".$age."<br>".$address."<br>".$gender."<br>";
//insert data
$sql = "INSERT INTO userprofile (name, email, age, address, gender) 
VALUES ('$name', '$email', '$age', '$address', '$gender')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>