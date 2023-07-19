<!Doctype html>
<html>
<head><title>BIOGRAPHY</title>

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
}
	.myslides{
		align-content: center;
	}
.forms{
	   width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
   
  }

</style>

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

  <header>
  <nav>
  	 <div class="INTRODUCTION">
  	 	<H2><B> JIVER DESIGNS CO.</B></H2>
  	 	
  	 </div>
		
			<a href="index.php">HOME</a>
			<a href="projects.php">PROJECTS</a>
			<a href="learn.php">SKILLS</a>
			<a href="contact.php">CONTACTS</a>
			 	<form>
  <input type="text" name="search" placeholder="Search..">
</form>
		
	</nav>
</header>
	<style>
.mySlides {display:none;
align-content: center
}
</style>


<div class="JIVER" style="margin: 50 " align="center">
  <img class="mySlides" src="house_arch.jpg" style="width:50%; height:25%;">
 
  <img class="mySlides" src="house3.jpg" style="width:100%; height:40%;">
  <img class="mySlides" src="house5.jpg" style="width:100%; height:40%;">
  <form>
 
  </form>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    {
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change imageevery 2 seconds
}

    
}
</script>
<h3>ABOUT ME</h3>

    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["aboutme"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>

 <br>
<form class="forms">
<label for="fname">FULL NAME</label><br>
 <input type="text" name="fname" width="40%" required="required"><br>
 <label for="mail">EMAIL</label><br>
 <input type="mail" name="email" width="40%" required="required"><br>
 <label for="comment">COMMENT</label><br>
 <input type="text" name="comment" width="40%" required="required"><br><BR>

<input type="submit" value="SUBMIT">
</form>
</body>



</html>