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

<h2>ลงทะเบียน</h2>
<form method="post" action="result.php">
  First name :<input type="text" name="firstname"> &nbsp;&nbsp;&nbsp; Last name :<input type="text" name="lastname">
  <br><br>
  Citizen ID :<input type="text" name="Citizen"> &nbsp;&nbsp;&nbsp; Age :<input type="text" name="Age">
  <br><br>
  Gender
  <input type="radio" name="gender" value="male" > Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
  &nbsp;&nbsp;&nbsp; 
  Shirt Size:
  <select name ="Size">
    <option value="S">S</option>
    <option value="M">M</option>
    <option value="L">L</option>
    <option value="XL">XL</option>
  </select><br><br>
  Height :<input type="text" name="Height"> &nbsp;&nbsp;&nbsp; Weight :<input type="text" name="Weight"><br><br>
  Telephone Number :<input type="text" name="Telephone"><br><br>
  Medical Problems :<br>
  <textarea name="message" rows="10" cols="30"></textarea>
  <br><br>
  <input type="submit" value="Submit">
</form>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>