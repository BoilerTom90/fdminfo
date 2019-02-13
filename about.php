<?php 

require_once 'head.inc.php';

?>

<body>

<?php

$page = 1;
include 'navbar.inc.php';

function printRegInfo() {
	print <<< EOT

<div class="row">
<div class="col-sm-12">
    <div class="panel panel-default panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">General Event Information</h3>
      </div>
      <div class="panel-body">
        <h4>Date/Time</h4>
        <ul>
          <li>Saturday, Sept. 30th, 2017 8:00 am.</li>
        </ul><hr/>
        <h4>Location</h4>
        <ul>
          <li>Melas Park, 1400 W. Central Road, Mount Prospect, IL. 
          <a href="https://www.google.com/maps/place/Melas+Park/@42.0693614,-87.9585972,14z/data=!4m2!3m1!1s0x0:0x55901abd1192d282">
        Click here for Map</a>
          </li>
        </ul><hr/>

        <h4>Parking</h4>
        <ul>
          <li>Limited parking is available at Melas Park so participating schools are encouraged to park at the Bosch Co. parking lot located on the west side of the park.
        <a href="https://www.google.com/maps/place/Robert+Bosch+Tool+Corporation/@42.0681937,-87.9649919,15z/data=!4m2!3m1!1s0x0:0x44035fd09b747273">
        Click here for map</a>
          </li>
        </ul><hr/>

        <h4>Concessions</h4>
        <ul>
          <li>Food and beverages will be sold by the St. Peter Athletic Booster Club.
          </li>
        </ul>
        <hr/>

        <h4>Rest Rooms</h4>
        <ul>
          <li>Men’s and Women’s bathrooms will be available in the Park District concessions building, 
        by the ball fields. Please keep in mind that because baseball games are occuring at the same time,
        the park will be very busy.
          </li>
        </ul><hr/>

        <h4>Event Schedule</h4>
          Note: All times are tentative. After the first race, subsequent races will start as 
          quickly as possible, even if ahead of schedule. The awards ceremony will start approximately 15 - 20 minutes after 
          the last race has completed.
        <ul>
          <li>8:00 AM Packet Pickup & Course Open</li>
          <li>9:00 AM Coaches Meeting by Finish Chute</li>
          <li>9:15 AM Girls 1.5 mile run</li>
          <li>9:40 AM Boys 1.5 mile run</li>
          <li>10:05 AM Girls 2 mile run</li>
          <li>10:35 AM Boys 2 mile run</li>
          <li>11:05 AM Girls 1 mile Open run</li>
          <li>11:20 AM Boys 1 mile Open run</li>
          <li>12:00 Awards</li>
        </ul><hr/>

        <h4>Inclimate Weather & Race Cancellation</h4>
        <ul>
          <li>Typically, the only weather-related reason the meet would be cancelled is storms and the lightening that 
            comes along with them.   Melas Park is equipped with a Thor Guard Lightening Warning System.  The system is designed to 
            automatically detect lightening within 5 miles of the area.
          </li>
          <li>Any decision to cancel the meet will be made at the park on Saturday morning. 
            </li>
          
        </ul>       
      </div>
    </div>
</div>
</div>

EOT;
}

?>

<div class="container">

<?php   
printRegInfo();
?>

</div>

<script src="scripts/jquery-2.1.4.min.js"></script>
<script src="scripts/bootstrap.min.js"></script>
</body>
</html>