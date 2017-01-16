<html>
<head>
<title></title>
</head>

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
	  height:30%;
      margin: auto;
  }
  </style>

<body>
	<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/4.jpg" alt="Chania" width="600" height="300">
      <div class="carousel-caption">
        <h3>Water is Life</h3>
        <p>Imagine the world without water</p>
      </div>
    </div>

    <div class="item">
      <img src="images/2.jpg" alt="Chania" width="600" height="300">
      <div class="carousel-caption">
        <h3>Save Water</h3>
        <p>Please save the water.</p>
      </div>
    </div>

    <div class="item">
      <img src="images/3.jpg" alt="Flower" width="600" height="300">
      <div class="carousel-caption">
        <h3>Smart City</h3>
        <p>100 New Smart Cities.</p>
      </div>
    </div>

 
  </div>

  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<br>
</body>
</html>