<?php 

include 'head.inc.php';

echo '<body>';

$page = 2;
include 'navbar.inc.php';

function printRegInfo() {
	print <<< EOT

<div class="row">
<div class="col-sm-12">
    <div class="panel panel-default panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Registration Information</h3>
      </div>
      <div class="panel-body">

        <h4>Confirm Your Team's Participation</h4>
        <ul>
          <li>Coaches, please email Zach Bickel at 
          <a href="mailto:zbickel@fullifeinchrist.org">zbickel@fulllifeinchrist.org</a> 
          immediately to confirm your participation in this year's event.  </li>
          <li>Reqest an account to register your runners by going to the <a href="http://stpeterxc.org/xcreg/index.php">Registration Web site</a>,
           and click on the button to "Request Account." Please allow up to 24 hours for your account request to be processed and approved (the person handling the registration has a real day job and can't always tend to non-work related tasks). Once your account is approved, you will receive an email with your password to login to the registration system. 
          </li>
        </ul>
        <hr/>

        <h4>Online Registration</h4>
        <ul>
        <li>Register your team using the online registration system.  <a href="http://stpeterxc.org/xcreg/index.php">Click here for Registration Web Site</a></li>
        
        <li>Coaches must register their team using the online system by midnight, Sept. 26th, 2017. There is no race-day registration, and no paper registration forms will be accepted. 
        </li>
        <li>Contact Tom Hoffman @ purduetom90@gmail.com if you have problems accessing the system or registering your team.
        <li>When registering the runners for your team, you are not asked to supply which of the 3 races the runners will compete in. We'll know which race they've ran when they finish and their pull-tag shows up at the finish line.  
        However, when forming your teams, we ask that you place your strongest runners in the 2.0 mile race, 
        your next level (i.e. slower) runner in the 1.5 mile race, and the newest/slowest runners in the 1.0 mile race. 
        </li>
        </ul>
        <hr/>
      </div>
    </div>
</div>
</div>

EOT;
}

echo '<div class="container">';

echo '	<div class="row">';
echo '		<div class="col-xs-12">';

printRegInfo();

echo '		</div>';
echo '	</div>';
echo '</div>';

echo '<script src="scripts/jquery-2.1.4.min.js"></script>';
echo '<script src="scripts/bootstrap.min.js"></script>';
echo '</body>';
echo '</html>';

?>