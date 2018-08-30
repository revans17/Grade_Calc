<div class="headerOne">
	<div class="leftHead">
		<h1><?php echo "IT 207, 005, Fall 2017"; ?><br></h1>
		<p> Francisco Camacho Gonzalez<br/>
			George Mason University</p>
	</div>
	<div class="rightHead">
		<h1>Ryan Evans<br/></h1>

		<p><a href="mailto:revans17@masonlive.gmu.edu">Email</a><br/>
			<?php
			date_default_timezone_set("America/New_York");
			$aDate = date("G:i M d, Y T.", getlastmod());
			print "$aDate"; 
			?>
		</p>
	</div>
</div>