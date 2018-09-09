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
  <h2>Borderless Table</h2>
  <p>The .table-borderless class removes borders from the table:</p>            
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
include("conn/mysqlconn.php");
$sql = "Select * from userprofile";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result))
    {
?>
       <tr>
        <td><?php each $row["UserID"];?></td>
        <td><?php each $row["Name"];?></td>
        <td><?php each $row["Email"];?></td>
        <td><?php each $row["Age"];?></td>
        <td><?php each $row["Address"];?></td>
        <td><?php each $row["Gender"];?></td>
        </tr>
        </tbody>
        </table>
        </div>
<?
     }
}
else{
    echo "0 result";
}

?>

</body>
</html>