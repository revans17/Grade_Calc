<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Assignment1.css" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<style type="text/css"></style>
<title>Ryan's IT 207 Website</title>
</head> 
<body>
<?php include'header.php';?>
<?php include'footer.inc';?>
<?php include'sideBar.inc';?>
<div class="grade">
	<form action="FinalGradeCalc.php" method="post">
	<h2>Participation</h2>
		<h5>Earned: <input type="text" name="earn_Participation" size = "12"/>
		Max: <input type="text" name="maximum_Participation" size = "12"/>
		Weight (percentage): <input type="text" name="amount_Participation" size = "12"/></h5>
	<h2>Quizzes</h2>
		<h5>Earned: <input type="text" name="earn_Quiz" size = "12"/>
		Max: <input type="text" name="maximum_Quiz" size = "12"/>
		Weight (percentage): <input type="text" name="amount_Quiz" size = "12"/></h5>
	<h2>Lab Assignments</h2>
		<h5>Earned: <input type="text" name="earn_Assignments" size = "12"/>
		Max: <input type="text" name="maximum_Assignments" size = "12"/>
		Weight (percentage): <input type="text" name="amount_Assignments" size = "12"/></h5>
	<h2>Practica</h2>
		<h5>Earned: <input type="text" name="earn_Practica" size = "12"/>
		Max: <input type="text" name="maximum_Practica" size = "12"/>
		Weight (percentage): <input type="text" name="amount_Practica" size = "12"/></h5><br/>
		<input type="submit" name="Enter" size="12" />
	</form>
</div>
</body>
</html>