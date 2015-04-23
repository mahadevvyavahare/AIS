<?php
include('header.php');
?>
<center>
<div class="jumbotron">
        <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/slider/slide1.png" class="img-responsive" style="opacity:1;"> 
          </div>

          <div class="item">
              <img src="img/slider/slide2.png" >
          </div>
          <div class="item">
            <img src="img/slider/slide3.png">
          </div>

          <div class="item">
              <img src="img/slider/slide4.png">
          </div>

        </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="icon-prev"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="icon-next"></span></a>

  </div>
</div>
</div>
 
      <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>