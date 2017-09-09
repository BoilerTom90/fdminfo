<?php 

include 'head.inc.php';

echo '<body>';

$page = 3;
include 'navbar.inc.php';

function printInfo() {
	print <<< EOT

<div class="row">
<div class="col-sm-12">
    <div class="panel panel-default panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Race Day Instructions</h3>
      </div>
      <div class="panel-body">

      <h4>Schedule</h4>
      <ul>
      <li>9:00 AM Coaches Meeting by Finish Chute</li>
        <li>9:15 AM Girls 1.5 mile run</li>
        <li>9:40 AM Boys 1.5 mile run</li>
        <li>10:05 AM Girls 2 mile run</li>
        <li>10:35 AM Boys 2 mile run</li>
        <li>11:05 AM Girls 1 mile Open run</li>
        <li>11:20 AM Boys 1 mile Open run</li>
        <li>12:00 Awards</li>
        Note: all times are approximate. Races will start as soon as possible after the prior race has 
      finished. Runners should be ready to race!
        </ul>
      
        <hr/>

      <h4>Team Check-In</h4>
      <ul><li>A team representative should pick up their team packet at the scorer's table on the morning of the
      race. Team packets will not be given to students. Any monies due should be paid at check-in time. Inside the packet 
      will be safety pins, BIBS for each runners, course maps, etc.  Coaches must ensure runners receive the correct BIB - 
      this is extremely important!
       </li></ul>
      <hr/>
      
      <h4>Team Tents</h4>
      <ul><li>Team tents are allowed and should be setup on the far west side of the park, between the fence
      and the bike path. If in doubt, please ask a race official if your tent will interfere with the 
      race.</li></ul>
      <hr/>

      <h4>Course Maps</h4>
      Course is subject to change day!
      <ul>
      <li><a href="maps/FDM10Mile.pdf" target="_blank">1.0 Mile Race Map</a>&nbsp;(wheeled distance: 1.02 miles)</li>
      <li><a href="maps/FDM15Mile.pdf" target="_blank">1.5 Mile Race Map</a>&nbsp;(wheeled distance: 1.48 miles)</li>
      <li><a href="maps/FDM20Mile.pdf" target="_blank">2.0 Mile Race Map</a>&nbsp;(wheeled distance: 2 miles)</li>
      </ul>
      <hr/>

      <h4>Competitiveness and Sportsmansip</h4>
      <ul>
      <li>
      In the spirit of good sportsmanship and an attempt to make the Boys and Girls 2 mile races the 
      fastest and most competitive, please plan to place your top runners in those races.  Place your next best runners in
      the 1.5 mile race. The 1.0 mile race is intended for beginner runners and/or those that would struggle to run farther. </li>
      <br/>
      <li> Runners are not permitted to participate in more than one race.
      
      </li>
      </ul>
      <hr/>

      <h4>BIBS</h4>
      <ul>
      <li>Runners must wear the BIB that has been assigned to them. Runners not wearing BIBs, 
      or the correct BIB, will not be counted in the results.  The BIBS are a key part of the 
      timing and scoring. It only takes one runner to not follow the rules and to mess up the 
      time and place for all runners finishing after him/her, and thus causing confusion and delaying
      race results. Please stress the importance of this to your team and runners! </li>
      <br/>

      <li>Do NOT remove the pull tag from the bottom of the BIB before or during the race. The pull tag 
      is removed by a race official after a runner finishes and it is used to identify the runner's 
      finishing place and finishing time in the race.  If a runner's pull tag manages to fall off 
      during the race, a hand-written pull-tag will be used by a race official at the finish chute.</li>
      <br/>

      <li>BIBS are valid for one race and runners can run in at most one race.</li>
      </ul>
      <hr/>

      <h4>Starting Box</h4>
      <ul><li>The team's starting box will be written on the outside of the team packet. Teams should use 
      the same starting box for all races.</li></ul>

      <hr/>

      <h4>Race Start & Restarts</h4>
      <ul><li>If any runner falls in approximately the first 100 meters of the 
      race, the race starter will fire the gun a second time (or blow the whistle) and the race 
      will be restarted.</li></ul>
      <hr/>

      <h4>Finish Chute Instructions</h4>
      <ul>
      <li>Runners must not advance in finish position while traversing the finish chute.</li><br/>
      <li>Runners must not hang on the finish chute. It will not support their weight.</li><br/>
      <li>Upon finishing the race, runners must not leave the finish chute until they reach the end of
      the chute and a race official has removed the pull tag from their bib and placed it on the stringer.</li>
      </ul>
      <br/>
      </div>
    </div>
</div>
</div>


EOT;
}

echo '<div class="container">';

printInfo();

echo '</div>';

echo '<script src="scripts/jquery-2.1.4.min.js"></script>';
echo '<script src="scripts/bootstrap.min.js"></script>';
echo '</body>';
echo '</html>';

?>