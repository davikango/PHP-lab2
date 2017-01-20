<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Office Hours Setup Form</title>
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
		
			<h1>Office Hours Setup Form</h1>
			<div id = "day">
				Day:
			</div>
			<div class = "daySetup">
				Monday
			</div>
			<div class = "daySetup">
				Tuesday
			</div>
			<div class = "daySetup">
				Wednesday
			</div>
			<div class = "daySetup">
				Thursday
			</div>
			<div class = "daySetup">
				Friday
			</div>
			<div id = "time">
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Time:
			</div>
			
			<form method="post" action="calendar.php">
				<div class = "timeSetup">
					<br /><br /><br /><br /><br /><br />
					
						<select name = "monTime[]"  size = "12" multiple>
							<option value = "7:00pm">7:00am</option>
							<option value = "7:30pm">7:30am</option>
							<option value = "8:00am">8:00am</option>
							<option value = "8:30am">8:30am</option>
							<option value = "9:00am">9:00am</option>
							<option value = "9:30am">9:30am</option>
							<option value = "10:00am">10:00am</option>
							<option value = "10:30am">10:30am</option>
							<option value = "11:00am">11:00am</option>
							<option value = "11:30am">11:30am</option>
							<option value = "12:00pm">12:00pm</option>
							<option value = "12:30pm">12:30pm</option>
							<option value = "1:00pm">1:00pm</option>
							<option value = "1:30pm">1:30pm</option>
							<option value = "2:00pm">2:00pm</option>
							<option value = "2:30pm">2:30pm</option>
							<option value = "3:00pm">3:00pm</option>
							<option value = "3:30pm">3:30pm</option>
							<option value = "4:00pm">4:00pm</option>
							<option value = "4:30pm">4:30pm</option>
							<option value = "5:00pm">5:00pm</option>
							<option value = "5:30pm">5:30pm</option>
							<option value = "6:00pm">6:00pm</option>
							<option value = "6:30pm">6:30pm</option>
							<option value = "7:00pm">7:00pm</option>
							<option value = "7:30pm">7:30pm</option>
							<option value = "8:00pm">8:00pm</option>
							<option value = "8:30pm">8:30pm</option>
							<option value = "9:00pm">9:00pm</option>
							<option value = "9:30pm">9:30pm</option>
							<option value = "10:00pm">10:00pm</option>
						</select>
					
				</div>
				<div class = "timeSetup">
					<br /><br /><br /><br /><br /><br />
					
						<select name = "tuesTime[]" size = "12" multiple>
							<option value = "7:00pm">7:00am</option>
							<option value = "7:30pm">7:30am</option>
							<option value = "8:00am">8:00am</option>
							<option value = "8:30am">8:30am</option>
							<option value = "9:00am">9:00am</option>
							<option value = "9:30am">9:30am</option>
							<option value = "10:00am">10:00am</option>
							<option value = "10:30am">10:30am</option>
							<option value = "11:00am">11:00am</option>
							<option value = "11:30am">11:30am</option>
							<option value = "12:00pm">12:00pm</option>
							<option value = "12:30pm">12:30pm</option>
							<option value = "1:00pm">1:00pm</option>
							<option value = "1:30pm">1:30pm</option>
							<option value = "2:00pm">2:00pm</option>
							<option value = "2:30pm">2:30pm</option>
							<option value = "3:00pm">3:00pm</option>
							<option value = "3:30pm">3:30pm</option>
							<option value = "4:00pm">4:00pm</option>
							<option value = "4:30pm">4:30pm</option>
							<option value = "5:00pm">5:00pm</option>
							<option value = "5:30pm">5:30pm</option>
							<option value = "6:00pm">6:00pm</option>
							<option value = "6:30pm">6:30pm</option>
							<option value = "7:00pm">7:00pm</option>
							<option value = "7:30pm">7:30pm</option>
							<option value = "8:00pm">8:00pm</option>
							<option value = "8:30pm">8:30pm</option>
							<option value = "9:00pm">9:00pm</option>
							<option value = "9:30pm">9:30pm</option>
							<option value = "10:00pm">10:00pm</option>
						</select>
					
				</div>
				<div class = "timeSetup">
					<br /><br /><br /><br /><br /><br />
					
						<select name = "wedTime[]" size = "12" multiple>
							<option value = "7:00pm">7:00am</option>
							<option value = "7:30pm">7:30am</option>
							<option value = "8:00am">8:00am</option>
							<option value = "8:30am">8:30am</option>
							<option value = "9:00am">9:00am</option>
							<option value = "9:30am">9:30am</option>
							<option value = "10:00am">10:00am</option>
							<option value = "10:30am">10:30am</option>
							<option value = "11:00am">11:00am</option>
							<option value = "11:30am">11:30am</option>
							<option value = "12:00pm">12:00pm</option>
							<option value = "12:30pm">12:30pm</option>
							<option value = "1:00pm">1:00pm</option>
							<option value = "1:30pm">1:30pm</option>
							<option value = "2:00pm">2:00pm</option>
							<option value = "2:30pm">2:30pm</option>
							<option value = "3:00pm">3:00pm</option>
							<option value = "3:30pm">3:30pm</option>
							<option value = "4:00pm">4:00pm</option>
							<option value = "4:30pm">4:30pm</option>
							<option value = "5:00pm">5:00pm</option>
							<option value = "5:30pm">5:30pm</option>
							<option value = "6:00pm">6:00pm</option>
							<option value = "6:30pm">6:30pm</option>
							<option value = "7:00pm">7:00pm</option>
							<option value = "7:30pm">7:30pm</option>
							<option value = "8:00pm">8:00pm</option>
							<option value = "8:30pm">8:30pm</option>
							<option value = "9:00pm">9:00pm</option>
							<option value = "9:30pm">9:30pm</option>
							<option value = "10:00pm">10:00pm</option>
						</select>
					
				</div>
				<div class = "timeSetup">
					<br /><br /><br /><br /><br /><br />
					
						<select type = "hidden" name = "thursTime[]" size = "12" multiple>
							<option value = "7:00pm">7:00am</option>
							<option value = "7:30pm">7:30am</option>
							<option value = "8:00am">8:00am</option>
							<option value = "8:30am">8:30am</option>
							<option value = "9:00am">9:00am</option>
							<option value = "9:30am">9:30am</option>
							<option value = "10:00am">10:00am</option>
							<option value = "10:30am">10:30am</option>
							<option value = "11:00am">11:00am</option>
							<option value = "11:30am">11:30am</option>
							<option value = "12:00pm">12:00pm</option>
							<option value = "12:30pm">12:30pm</option>
							<option value = "1:00pm">1:00pm</option>
							<option value = "1:30pm">1:30pm</option>
							<option value = "2:00pm">2:00pm</option>
							<option value = "2:30pm">2:30pm</option>
							<option value = "3:00pm">3:00pm</option>
							<option value = "3:30pm">3:30pm</option>
							<option value = "4:00pm">4:00pm</option>
							<option value = "4:30pm">4:30pm</option>
							<option value = "5:00pm">5:00pm</option>
							<option value = "5:30pm">5:30pm</option>
							<option value = "6:00pm">6:00pm</option>
							<option value = "6:30pm">6:30pm</option>
							<option value = "7:00pm">7:00pm</option>
							<option value = "7:30pm">7:30pm</option>
							<option value = "8:00pm">8:00pm</option>
							<option value = "8:30pm">8:30pm</option>
							<option value = "9:00pm">9:00pm</option>
							<option value = "9:30pm">9:30pm</option>
							<option value = "10:00pm">10:00pm</option>
						</select>
					
				</div>
				<div class = "timeSetup">
					<br /><br /><br /><br /><br /><br />
					
						<select name = "friTime[]" size = "12" multiple>
							<option value = "7:00pm">7:00am</option>
							<option value = "7:30pm">7:30am</option>
							<option value = "8:00am">8:00am</option>
							<option value = "8:30am">8:30am</option>
							<option value = "9:00am">9:00am</option>
							<option value = "9:30am">9:30am</option>
							<option value = "10:00am">10:00am</option>
							<option value = "10:30am">10:30am</option>
							<option value = "11:00am">11:00am</option>
							<option value = "11:30am">11:30am</option>
							<option value = "12:00pm">12:00pm</option>
							<option value = "12:30pm">12:30pm</option>
							<option value = "1:00pm">1:00pm</option>
							<option value = "1:30pm">1:30pm</option>
							<option value = "2:00pm">2:00pm</option>
							<option value = "2:30pm">2:30pm</option>
							<option value = "3:00pm">3:00pm</option>
							<option value = "3:30pm">3:30pm</option>
							<option value = "4:00pm">4:00pm</option>
							<option value = "4:30pm">4:30pm</option>
							<option value = "5:00pm">5:00pm</option>
							<option value = "5:30pm">5:30pm</option>
							<option value = "6:00pm">6:00pm</option>
							<option value = "6:30pm">6:30pm</option>
							<option value = "7:00pm">7:00pm</option>
							<option value = "7:30pm">7:30pm</option>
							<option value = "8:00pm">8:00pm</option>
							<option value = "8:30pm">8:30pm</option>
							<option value = "9:00pm">9:00pm</option>
							<option value = "9:30pm">9:30pm</option>
							<option value = "10:00pm">10:00pm</option>
						</select>
						
					
				</div>
				<input type = "reset" value = "clear" />
				<input type = "submit" value = "submit" />
				
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