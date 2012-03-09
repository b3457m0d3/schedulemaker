<?php
////////////////////////////////////////////////////////////////////////////
// SCHEDULEMAKER - Footer View
// 
// @file	views/FooterView.php
// @descrip	This view generates the header for the site. This includes all the
//			code necessary for generating a title and CSS includes.
// @author	Benjamin Russell
////////////////////////////////////////////////////////////////////////////

class FooterView extends View {
	// METHODS /////////////////////////////////////////////////////////////

	/**
	 * Render the footer by outputting the code for the footer
	 */
	public function render() { 
	?>
	</div>
	<div id='footer'>
	<div class='logo'><a href='index.php'>ScheduleMaker</a></div>
	<div class='csh'><a href="http://www.csh.rit.edu/"><img src="./img/csh.png" alt="CSH" /></a></div>
	<div class='nav'><a href='generate.php'>Build Schedules</a> | <a href='browse.php'>Browse Courses</a> | <a href='roulette.php'>Course Roulette</a> | <a href='status.php'>Status</a></div>
		<div>
			Idea: John Resig (phytar at csh.rit.edu)<br />
			Development: Ben Russell (benrr101 at csh.rit.edu)<br />
			Hosting: <a href="http://www.csh.rit.edu/">Computer Science House</a><br />
			Uses <a href="http://somerandomdude.com/work/iconic/">iconic icon set by P.J. Onori</a>, 
			licensed under <a href="http://creativecommons.org/licenses/by-sa/3.0/us/">CC BY-SA 3.0</a>
		</div>
	</div>
	</div>
</body>
</html>
	<?
	}
}
