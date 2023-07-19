	<html>
	<head><title>projects</title>
	</head>
	<body>
<h1>PROJECTS</h1>
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
    </style>
		<nav>
			<a href="index.php">HOME</a>
			<a href="projects.php">PROJECTS</a>
			<a href="learn.php">SKILLS</a>
			<a href="contact.php">CONTACTS</a>	
		 	<form>
  <input type="text" name="search" placeholder="Search..">
</form>

	</nav>
     <body>
     	<h2>HERE ARE SOME OF THE PROJECTS THAT HAVE BEEN WORKED UPON</h2>
     <div>
     	<img class="mySlides" src="house_arch.jpg" style="width:100% height:25%">
     	<img class="mySlides" src="house3.jpg" style="width:100% height:50%">
         <img class="mySlides" src="house5.jpg" style="width:100% height:40%">
     <img class="mySlides" src="house1.jpg" style="width:100% height:40%">
     <img class="mySlides" src="house2.jpg" style="width:100% height:40%">
       <button class="slide" onclick="plusDivs(-1)">&#10094;</button>
  <button class="slide2" onclick="plusDivs(1)">&#10095;</button>
     <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
 </div>
 </body>
 </html>