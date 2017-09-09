<?php 

include 'head.inc.php';

echo '<body>';

$page = 4;
include 'navbar.inc.php';

function printRegInfo() {
	print <<< EOT

<div class="row">
<div class="col-sm-12">
    <div class="panel panel-default panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Awards</h3>
      </div>
      <div class="panel-body">
      <h4>Awards</h4>
      <ul>
      <li>Individual medals will be given to the top 15 runners in each race. </li><br/>
      <li>Team Trophies will be awarded to the top 3 teams in the 1.5 and 2 mile races. 
      No team trophies will be awarded for the 1 mile races.</li>
      </ul>
      <hr/>
      <h4>Scoring</h4>Standard Cross Country <em>displacement scoring</em> will be used for team scoring.
      <ul> 
      <li>5 or more runners are needed to count in team scoring (Schools with less than 5 runners do 
        not count in the team scoring). </li>
      <li>Top 5 runners count towards your team's total. The runner's place, after eliminating runners
      not counting towards team scoring, is their points for the team.</li>
      <li>Runners 6 and 7 act as pushers for other team's runners.</li>
      <li>Runner 8+ do not count in team scoring. </li>
      <li>Sum of top 5 runner's points is the team score. Lowest score wins.</li>
      </ul>
      </div>
    </div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="panel panel-default panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Results</h3>
      </div>
      <div class="panel-body">
      <ul>
      <li><a href="http://onlineraceresults.com/event/view_event.php?event_id=19763" target="_blank">2017 Results</a></li>
        <ul>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=60644#racetop" target="_blank">Girls 1.0 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=60645#racetop" target="_blank">Boys 1.0 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=60640#racetop" target="_blank">Girls 1.5 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=60641#racetop" target="_blank">Boys 1.5 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=60642#racetop" target="_blank">Girls 2.0 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=60643#racetop" target="_blank">Boys 2.0 Mile</li>
        </ul>
      <li><a href="http://onlineraceresults.com/event/view_event.php?event_id=18111" target="_blank">2016 Results</a></li>
        <ul>
          <li>Girls 1.0 Mile - Race cancelled due to weather</li>
          <li>Boys 1.0 Mile - Race cancelled due to weather</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=55233#racetop" target="_blank">Girls 1.5 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=55230#racetop" target="_blank">Boys 1.5 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=55234#racetop" target="_blank">Girls 2.0 Mile</li>
          <li><a href="http://onlineraceresults.com/race/view_race.php?race_id=55231#racetop" target="_blank">Boys 2.0 Mile</li>
        </ul>
      <li><a href="http://onlineraceresults.com/event/view_event.php?event_id=16277" target="_blank">2015 Results</a></li>
      <li><a href="http://onlineraceresults.com/event/view_event.php?event_id=14256" target="_blank">2014 Results</a></li>
      <li><a href="http://onlineraceresults.com/event/view_event.php?event_id=11475" target="_blank">2013 Results</a></li>
      <li><a href="http://www.runrace.net/findarace.php?id=12253IL2&tab=a4&ctrlstg=4361" target="_blank">2012 Results</a></li>
      <ul>
      </div>
    </div>
</div>
</div>

EOT;
}

echo '<div class="container">';

printRegInfo();

echo '</div>';

echo '<script src="scripts/jquery-2.1.4.min.js"></script>';
echo '<script src="scripts/bootstrap.min.js"></script>';
echo '</body>';
echo '</html>';

?>