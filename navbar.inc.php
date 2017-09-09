<?php

function printNavBar()
{
   global $page;
   $page0Class = $page1Class = $page2Class = $page3Class = $page4Class = "";
   if ($page == 0) $page0Class = "class='active'";
   if ($page == 1) $page1Class = "class='active'";
   if ($page == 2) $page2Class = "class='active'";
   if ($page == 3) $page3Class = "class='active'";
   if ($page == 4) $page4Class = "class='active'";

   print <<< EOT
<nav class="navbar navbar-inverse">  
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=#myNavbar>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand $page0Class" href="index.php">FDM Invite</a>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li $page1Class><a href="about.php">About</a> </li>
				<li $page2Class><a href="regInfo.php">Registration Information</a></li>
				<li $page3Class><a href="raceday.php">Race Day</a></li>
				<li $page4Class><a href="awards.php">Awards/Results</a></li>
			</ul>
		</div>
   	</div>
</nav>

EOT;
}

printNavBar();

?>