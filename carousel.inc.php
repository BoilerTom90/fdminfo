<?php 



function printCarousel()
{

print <<< EOT

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/FDM-Banner.JPG" alt="FDM">
      </div>

      <div class="item">
        <img src="images/Shirt.jpg" class="img-rounded" alt="FDM">
      </div>

      <div class="item">
        <img src="images/xcimage.png" alt="XC">
      </div>

      <div class="item">
        <img src="images/FDM1.jpg" alt="Runners">
      </div>

      <div class="item">
        <img src="images/FDM2.jpg" alt="Runners">
      </div>

      <div class="item">
        <img src="images/FDM3.jpg" alt="Runners">
      </div>

      <div class="item">
        <img src="images/FDM4.jpg" alt="Runners">
      </div>

      <div class="item">
        <img src="images/FDM5.jpg" alt="Runners">
      </div>

      <div class="item">
        <img src="images/FDM6.jpg" alt="Runners">
      </div>

      <div class="item">
        <img src="images/FDM7.jpg" alt="Runners">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

EOT;

}

printCarousel();

?>