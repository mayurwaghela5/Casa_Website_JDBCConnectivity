

<!DOCTYPE html>
<html>
<head>
<title>casa website</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="">
  <a href="login1.php"><button type="button" style="float:right">Login</button></a>
  <h2 style="font-size:250%;"> CASA </p></h2>
</div>

 <div class="navbar">
  <a href="index1.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Photos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      <div class="row">
        <div class="column">
          <h3>Kitchen & Dining</h3>
          <a href="kitchen.php">Kitchen</a>
          <a href="#">Dining Room</a>
          <a href="#">Home Bar</a>
        </div>
        <div class="column">
          <h3>Living</h3>
          <a href="living.php">Living Room</a>
          <a href="#">Home Theatre</a>
          <a href="#">Home Office</a>
        </div>
        <div class="column">
          <h3>Bed & Bath</h3>
          <a href="#">Bedroom</a>
          <a href="#">Baby & Kids</a>
          <a href="#">Bathroom</a>
        </div>
        <div class="column">
          <h3>Outdoor</h3>
          <a href="#">Garden</a>
          <a href="#">Patio</a>
          <a href="#">Terrace & Balcony</a>
        </div>
         <div class="column">
          <h3>More Rooms</h3>
          <a href="#">Exterior</a>
          <a href="#">Staircase</a>
          <a href="#">Swimming Pool</a>
        </div>
      </div>
    </div>
  </div> 
  
<div class="dropdown">
    <button class="dropbtn">Find Professionals
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      <div class="row">
        <div class="column">
          <h3>Design & Renovation</h3>
          <a href="prof1.php">Architects & Building Designers</a>
          <a href="#">Interior Designers & Decorators</a>
          <a href="#">Civil Engineers & Contractors</a>
          <a href="#">Design-Build Firms</a>
         <a href="#">Kitchen & Bath Designers</a>
         <a href="#">Landscape Architects & Contractors</a>
        <a href="#">Specialty Contractors</a>	
        </div>
 </div>
</div>
</div>
   <div class="dropdown">
    <button class="dropbtn">Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
      <div class="row">
        <div class="column">
          <h3>Home Decor</h3>
          <a href="rugs.php">Rugs</a>
          <a href="#">Decorating Accents</a>
          <a href="#">Pillows & Throws</a>
	<a href="#">Artworks</a>
	<a href="#">Fabric</a>
	<a href="#">Mirrors</a>
        </div>
        <div class="column">
          <h3>Furniture</h3>
          <a href="livp.php">Living Room</a>
          <a href="#">Kitchen & Dining</a>
          <a href="#">Bedroom</a>
	<a href="#">Home Office</a>
	<a href="#">Storage</a>
	<a href="#">Outdoor</a>
        </div>
        <div class="column">
          <h3>Kitchen & Dining</h3>
          <a href="#">Kitchen Storage</a>
          <a href="#">Kitchen Fixtures</a>
          <a href="#">Table Top</a>
	<a href="#">Dining Tables</a>
	<a href="#">Dining Chairs</a>
	<a href="#">Bar Stools</a>
        </div>
        <div class="column">
          <h3>Bedroom</h3>
          <a href="#">Beds  Headboards</a>
          <a href="#">Armoires & wardrobes</a>
          <a href="#">Bedroom Benches</a>
	<a href="#">Bedroom Decor</a>
	<a href="#">Bedding</a>
	<a href="#">Bedroom & make up</a>
	<a href="#">vanities</a>        
</div>
         
      </div>
    </div>
  </div> 
  
  <a href="#Stories">Stories</a>
  <a href="#Advice">Advice</a>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="i3.jpeg" style="width:100%">
  <div class="text">Living Room</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="m.jpg" style="width:100%">
  <div class="text">Bedroom</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="m2.jpg" style="width:100%">
  <div class="text">Kitchen</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<div class ="container">

  <div class="gallery">
	<img src="h1.jpeg">  
  	<div class="desc">Living Room</div>
  </div>

   <div class="gallery">
	<img src="h3.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
   <div class="gallery">
	<img src="h4.jpg">  
  	<div class="desc">Dining</div>
  </div>
   <div class="gallery">
	<img src="br67.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
  <div class="gallery">
	<img src="k1.jpg">  
  	<div class="desc">Kitchen</div>
  </div>
  <div class="gallery">
	<img src="t1.jpg">  
  	<div class="desc">Terrace</div>
  </div>
   <div class="gallery">
	<img src="lr2.jpg">  
  	<div class="desc">Living Room</div>
  </div>
  <div class="gallery">
	<img src="g11.jpg">  
  	<div class="desc">Garden</div>
  </div>
<div class="gallery">
	<img src="br1.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
	<div class="gallery">
	<img src="k2.jpg">  
  	<div class="desc">Kitchen</div>
  </div>
   <div class="gallery">
	<img src="lr1.jpg">  
  	<div class="desc">Living Room</div>
  </div>
   <div class="gallery">
	<img src="br3.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
  
  <div class="gallery">
	<img src="lr3.jpg">  
  	<div class="desc">Living Room</div>
  </div>
  <div class="gallery">
	<img src="br11.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
<div class="gallery">
	<img src="k3.jpg">  
  	<div class="desc">Kitchen</div>
  </div>
  <div class="gallery">
	<img src="lr4.jpg">  
  	<div class="desc">Living Room</div>
  </div>
  <div class="gallery">
	<img src="br6.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
  <div class="gallery">
	<img src="lr5.jpg">  
  	<div class="desc">Living Room</div>
  </div>
  <div class="gallery">
	<img src="br4.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
  <div class="gallery">
	<img src="lr7.jpg">  
  	<div class="desc">Living Room</div>
  </div>
<div class="gallery">
	<img src="k5.jpg">  
  	<div class="desc">Kitchen</div>
  </div>
  <div class="gallery">
	<img src="lr8.jpg">  
  	<div class="desc">Living Room</div>
  </div>
 <div class="gallery">
	<img src="br5.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
<div class="gallery">
	<img src="br7.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
<div class="gallery">
	<img src="br8.jpg">  
  	<div class="desc">Bedroom</div>
  </div>
<div class="gallery">
	<img src="k4.jpg">  
  	<div class="desc">Kitchen</div>
  </div>
<div class="gallery">
	<img src="g1.jpg">  
  	<div class="desc">Garden</div>
  </div>
</div>
</body>
</html>