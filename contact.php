<!DOCTYPE html>
<html>
<head>
	<title>CONTACTS</title>
</head>
<style>
	*{
  font-family: Poppins;
  color: white;
  background-color:#241443;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;}

nav{
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 90%;
  margin: 0px auto;
}</style>
<body>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pempho";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>


<nav>
	<a href="index.php">HOME</a>
			<a href="projects.php">PROJECTS</a>
			<a href="learn.php">SKILLS</a>
			<a href="contact.php">CONTACTS</a>
			 	<form>
  <input type="text" name="search" placeholder="Search..">
</form>
</nav><BR><hr>
<h2 style="text-align: center"> TO REACH OUT TO US YOU CAN CONTACT ON THESE DETAILS</h2>
<br><hr>
<div class="contacts" align="center">
    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["contacts"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>



</body>
</html>