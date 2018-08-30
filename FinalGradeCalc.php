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
			<?php
				$earn=array();
				$maximum=array();
				$amount=array();
				$earn[0]=$_POST["earn_Participation"];
				$earn[1]=$_POST["earn_Quiz"];
				$earn[2]=$_POST["earn_Assignments"];
				$earn[3]=$_POST["earn_Practica"];
				$maximum[0]=$_POST["maximum_Participation"];
				$maximum[1]=$_POST["maximum_Quiz"];
				$maximum[2]=$_POST["maximum_Assignments"];
				$maximum[3]=$_POST["maximum_Practica"];
				$amount[0]=$_POST["amount_Participation"];
				$amount[1]=$_POST["amount_Quiz"];
				$amount[2]=$_POST["amount_Assignments"];
				$amount[3]=$_POST["amount_Practica"];
				function main($earn, $maximum, $amount){
					$print = check($earn, $maximum, $amount);
					($print == "") ? 
					create($earn, $maximum, $amount): 
					print $print;
				}function check($earn, $maximum, $amount){
					$output = "";
					$totalWeight = 0;
					define('MAX', 100);
					$earnOverMax = false;
					$not100 = false;
					$empty = false;
					$letter = true;
					$neg = false;
					for($num = 0; $num < 4; $num++){if($earn[$num] > $maximum[$num]){$earnOverMax = true;}}
					foreach ($amount as $num) {$totalWeight += $num;}
					if($totalWeight != MAX){$not100 = true;}
					foreach ($earn as $number) {
						if ($number == ""){$empty = true;}
						if (!(is_numeric($number))){$letter = true;}
						if ($number < 0){$neg = true;}
					}
					foreach ($maximum as $number) {
						if ($number == ""){$empty = true;}
						if (!(is_numeric($number))){$letter = true;}
						if ($number < 0){$neg = true;}
					}				
					foreach ($amount as $number) {
						if ($number == ""){$empty = true;}
						if (!(is_numeric($number))){$letter = true;}
						if ($number < 0){$neg = true;}
					}					
					if($empty){$output .= "<p>You cannot leave anything empty.</p>";}
					if($earnOverMax){$output .= "<p>The grade you entered is greater than 100.</p>";}
					if($not100){$output .= "<p>The weight you entered does not add up to 100.</p>";}
					if(!($letter)){$output .= "<p>You must enter numbers.</p>";}
					if($neg){$output .= "<p>You cannot have negative numbers.</p>";}
					return $output;
				}function create($earn, $maximum, $amount){
					$earn_Percent = array();
					$amount_Earned = array();
					for ($i=0; $i < 4; $i++) { 
						$earn_Percent[$i] = getPercent($earn[$i], $maximum[$i]);
						$amount_Earned[$i] = $earn_Percent[$i] * $amount[$i] / 100;
					}
					printOutput($earn_Percent, $amount_Earned);
					getFinalGrade($amount_Earned);
				}function getPercent($earn, $maximum){
					return (($earn/$maximum) * 100);
				}function getFinalGrade($amount_Earned){
					$finalPercent = 0;
					$finalGrade = "F";
					foreach ($amount_Earned as $number){$finalPercent += $number;}
					$grade = array("D", "C", "C+", "B", "B+", "A", "A+");
					$gradePercent = array(60, 70, 75, 80, 85, 90, 95);
					for ($i=0; $i < 7; $i++){if($finalPercent > $gradePercent[$i]){$finalGrade = $grade[$i];}}
					echo "<p>Your final grade percent is $finalPercent%; therefore, you end with a $finalGrade.";
				}function printOutput($earn_Percent, $amount_Earned){
					echo "<p> You earned a $earn_Percent[0]% for Participation, with a weight value of $amount_Earned[0]%</p>";
					echo "<p> You earned a $earn_Percent[1]% for Quizzes, with a weight value of $amount_Earned[1]%</p>";
					echo "<p> You earned a $earn_Percent[2]% for Lab Assignments, with a weight value of $amount_Earned[2]%</p>";
					echo "<p> You earned a $earn_Percent[3]% for Practica, with a weight value of $amount_Earned[3]%</p>";
				}
				main($earn, $maximum, $amount);
			?>
		<form action="Assingment1Home.php">
		<p><input type="submit" value="Back"/></p>
		</form>
	</div>
</body>
</html>