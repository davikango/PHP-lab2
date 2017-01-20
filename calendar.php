<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>lab 2</title>
	<link rel="stylesheet" type="text/css" href="calendar.css"/>
	
</head>
<body>
<div id="container">
	<div id="header">
	<?php 
			define(ROOT, '../');
			include_once ROOT. 'header.php';
		?>

	</div>

	<div id="labspractica">
	
		<?php 
			include_once ROOT. 'menu.inc';
		?>
	</div>
	
	<div id="labcontent">			
			<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div id = "OfficeHoursSignUpForm">
					<h1>Office Hours Sign Up</h1>
					 
						<b>Student Name:</b><input type = "text" name = "studentName"/>
						<b>&nbsp&nbspStudent Email:</b><input type = "text" name = "studentEmail"/>
						
						<input type = "hidden" name = "monTime[]" value = "<?php 
																				foreach($_POST['monTime'] as $monTime){
																					echo $monTime,"<br />";														
																				}
																			?>">
						<input type = "hidden" name = "tuesTime[]" value = "<?php 
																				foreach($_POST['tuesTime'] as $tuesTime){
																					echo $tuesTime,"<br />";														
																				}
																			?>">
						<input type = "hidden" name = "wedTime[]" value = "<?php 
																				foreach($_POST['wedTime'] as $wedTime){
																					echo $wedTime,"<br />";														
																				}
																			?>">
						<input type = "hidden" name = "thursTime[]" value = "<?php 
																				foreach($_POST['thursTime'] as $thursTime){
																					echo $thursTime,"<br />";														
																				}
																			?>">
						<input type = "hidden" name = "friTime[]" value = "<?php 
																				foreach($_POST['friTime'] as $friTime){
																					echo $friTime,"<br />";														
																				}
																			?>">
						
						<input type = "submit" name = "Submit" value = "Send Email"/> 
						<input type = "reset" value = "Clear"/>
					
					<?php
						//When the submit button is pressed: send email.
						if(isset($_POST['Submit'])){
							$to = "sdesai20@masonlive.gmu.edu";
							$message = "Appointment Confirmed!";
							if(isset($_POST['studentName'])){
								$studentName = $_POST['studentName'];
							}
							if(isset($_POST['studentEmail'])){
								$studentEmail = $_POST['studentEmail'];
							}									
						
							$response = mail($to,$studentName,$message,$studentEmail);
							if($response){
								echo "<br />Email successfully sent from $studentEmail";
							}																
						}
					?>
				</div>
					
			<div id = "calendarHeader">
				<?php
					echo date('F, Y');		
				?>
			</div>
				
				<?php
					$daysOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
					$numDays = date('t');
					
					//loop to generate boxes for days of the week.
					for($x = 0; $x < count($daysOfWeek); $x++) {
						
							echo '<div class="dayBoxes">';
							 $calendarDayNames = $daysOfWeek[$x];
							 echo "<b>$calendarDayNames</b>";
							 echo '</div>';	
					}
											
					//loops to generate boxes for calendar days.
					for($x = 1; $x <= $numDays; $x++) {
						echo '<div class ="numBoxes">';
						echo "<b>$x</b>"; //populates calendar numbers.
						if($x == 2 || $x == 9 || $x == 16 || $x == 23 || $x == 30){												
							foreach($_POST['monTime'] as $monTime){
								echo"<br /><input type = 'radio' name = 'monTimeSelection' value='$monTime'/>$monTime";
								if(isset($_POST['monTimeSelection']) && isset($_POST['studentName'])){	
											$monTimeSelection = $_POST['monTimeSelection'];	
											$studentName = $_POST['studentName'];
											echo "$monTimeSelection -- $studentName";
								}
							}																			
						}
						if($x == 3 || $x == 10 || $x == 17 || $x == 24 || $x == 31){
							foreach($_POST['tuesTime'] as $tuesTime){
								echo"<br /><input type = 'radio' name = 'tuesTimeSelection' value='$tuesTime'/>$tuesTime";
								if(isset($_POST['tuesTimeSelection']) && isset($_POST['studentName'])){	
											$tuesTimeSelection = $_POST['tuesTimeSelection'];	
											$studentName = $_POST['studentName'];
											echo "$tuesTimeSelection -- $studentName";
								}
							}						
						}
						if($x == 4 || $x == 11 || $x == 18 || $x == 25){
							foreach($_POST['wedTime'] as $wedTime){
								echo"<br /><input type = 'radio' name = 'wedTimeSelection' value='$wedTime'/>$wedTime";
								if(isset($_POST['wedTimeSelection']) && isset($_POST['studentName'])){	
											$wedTimeSelection = $_POST['wedTimeSelection'];	
											$studentName = $_POST['studentName'];
											echo "$wedTimeSelection -- $studentName";
								}
							}						
						}
						if($x == 5 || $x == 12 || $x == 19 || $x == 26){
							foreach($_POST['thursTime'] as $thursTime){
								echo"<br /><input type = 'radio' name = 'thursTimeSelection' value='$thursTime'/>$thursTime";
								if(isset($_POST['thursTimeSelection']) && isset($_POST['studentName'])){	
											$thursTimeSelection = $_POST['thursTimeSelection'];	
											$studentName = $_POST['studentName'];
											echo "$thursTimeSelection -- $studentName";
								}
							}						
						}
						if($x == 6 || $x == 13 || $x == 20 || $x == 27){
							foreach($_POST['friTime'] as $friTime){
								echo"<br /><input type = 'radio' name = 'friTimeSelection' value='$friTime'/>$friTime";
								if(isset($_POST['friTimeSelection']) && isset($_POST['studentName'])){	
											$friTimeSelection = $_POST['friTimeSelection'];	
											$studentName = $_POST['studentName'];
											echo "$friTimeSelection -- $studentName";
								}
							}						
						}
					    echo '</div>';
					}
					
				?>	
			</form>
	</div>
	
	<div id="footer">
		<?php 
			include_once ROOT. 'footer.inc';
		?>
	</div>

</div>

</body>
</html>