<?php 

include 'head.inc.php';

?>

<body>

<?php
$page = 0;
require_once('navbar.inc.php');
?>

<div class="container">
	<div class="jumbotron">
		<h1>FDM Middle School XC Invitational</h1>
        <h4>St. Peter Lutheran Schoool<br/>Sept. 30th, 2017<br>Melas Park, Mt. Prospect, IL</h4>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="panel panel-default panel-primary">
	      		<div class="panel-heading">
	        		<h3 class="panel-title">General Event Information</h3>	
	        	</div>
	        	<div class="panel-body">

					<p><strong>The Fred D. Martin (FDM)</strong> is a Middle School Cross Country Invitational hosted by St. Peter Lutheran 
					School in Arlington Heights, IL every year. The event serves to remember and honor Fred D. Martin, a 
					long time Athletic Director at St. Peter (1963-1992). Many of the current traditions of St. Peter athletics 
					originated under his leadership and he was instrumental in the founding of the Mid-Suburban Middle 
					School Athletic Conference.   Mr. Martin passed away in 2011, but his legacy lives on through this annual 
					Cross Country Invitational held every fall.</p>

					<p>Historically, approximately 30 schools and over 700 runners have participated in the event making it one 
					of the largest Middle School Cross Country Invitationals in the state of Illinois. Participants in this 
					invitational primarily come from public and private schools in the Chicagoland area.  This year will be the 
					24th year that St. Peter hosts this wonderful event.  Over the last 2 years, 1,488 runners competed in the 
					6 different races at the FDM.  These 6 different races (3 boys, 3 girls) range from the highly competitive 
					2 mile race, the moderately competitive 1.5 mile race, and the 1 mile open race.  The event is 
					highlighted by great competition and wonderful fellowship that supports our student-athletes.  </p> 

					<p>For more information,  please contact Zach Bickel, the Director of Athletics at St. Peter, Arlington 
					Heights</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
         <!-- 
			<php include 'carousel.inc.php'; ?>
         
         -->
         <video style="width:100%; border: 2px solid gray;" src="videos/fdm2016.mp4" controls></video>
         
		</div>
	</div>
</div>

<script src="scripts/jquery-2.1.4.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
</body>
</html>

