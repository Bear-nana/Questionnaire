<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Q & A</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    
  </head>
  

  <body>

<?php


if (isset($_POST['A'])) {
	if ($_POST['1'] == 'op1' ) {
		$error1 = 'Correct';
	}else {
		$error1 = 'Wrong Answer';
	}

	if ($_POST['2'] == 'op2' ) {
		$error2 = 'Correct';
	}else {
		$error2 = 'Wrong Answer';
	}

	if ($_POST['3'] == 'op2' ) {
		$error3 = 'Correct';
	}else {
		$error3 = 'Wrong Answer';
	}

	if ($_POST['4'] == 'op1' ) {
		$error4 = 'Correct';
	}else {
		$error4 = 'Wrong Answer';
	}
	if ($_POST['5'] == 'op2' ) {
		$error5 = 'Correct';
	}else {
		$error5 = 'Wrong Answer';
	}
}

?>
  	<div class="container">
  		<div id="sectionA">
  			<h2>SECTION A</h2>
  			<form action="process.php" method="POST">
  				<label>1. What is the full meaning of HTML?</label>
  				<select name="1">
  					<option value="op0">Select Option</option>
  					<option value="op1">Hyper Text Markup Language</option>
  					<option value="op2">High Text Markup Language</option>
  					<option value="op3">High Tech Markup Language</option>
  				</select>
  				<span><?php echo $error1; ?></span><br>

  				<label>2. What is the full meaning of CSS?</label>
  				<select name="2">
  					<option value="op0">Select Option</option>
  					<option value="op1">Case Style Sheet</option>
  					<option value="op2">Cascading Style Sheet</option>
  					<option value="op3">Case Sensitve Sheet</option>
  				</select>
  				<span><?php echo $error2; ?></span><br>
  				
  				<label>3. Is there a difference between ECHO and ALERT</label>
  				<select name="3">
  					<option value="op0">Select Option</option>
  					<option value="op1">No</option>
  					<option value="op2">Yes</option>
  					<option value="op3">Maybe</option>
  				</select><span><?php echo $error3; ?></span><br>
  				
  				<label>4. What is the difference?</label>
  				<select name="4">
  					<option value="op0">Select Option</option>
  					<option value="op1">echo=php;alert=js</option>
  					<option value="op2">echo=css;alert=jquery</option>
  					<option value="op3">echo=php;alert=html</option>
  				</select><span><?php echo $error4; ?></span><br>
  				
  				<label>5.Select the one that is not a programming language?</label>
  				<select name="5">
  					<option value="op0">Select Option</option>
  					<option value="op1">JS</option>
  					<option value="op2">CSS</option>
  					<option value="op3">PHP</option>
  				</select><span><?php echo $error5; ?></span><br>
  				
  				<button id="submitbtn" type="submit" name="A">Submit</button>
  			</form>	
  		</div>
  		
<?php

if (isset($_POST['A'])) {
	if ($_POST['1']=='op1' && $_POST['2']=='op2' && $_POST['3']=='op2' && $_POST['4']=='op1' && $_POST['5']=='op2') {
		
?>
	<script>
     document.getElementById("sectionA").style.display = "none";
    </script>

     		<div>
  			<h2>SECTION B</h2>
  			<form action="process.php" method="POST">
  				<label>1. Hacking requires typing fast?</label>
  				<select name="6">
  					<option value="op0">Select Option</option>
  					<option value="op1">Yes</option>
  					<option value="op2">No</option>
  					<option value="op3">Maybe</option>
  				</select><span><?php echo $errorb; ?></span><br>
  				
  				<label>2. Is bootstrap a programmng language?</label>
  				<select name="7">
  					<option value="op0">Select Option</option>
  					<option value="op1">Maybe</option>
  					<option value="op2">No</option>
  					<option value="op3">Yes</option>
  				</select><span><?php echo $errorc; ?></span><br>
  				
  				<label>3. How do you make an anchor tag not go anywhere in html?</label>
  				<select name="8">
  					<option value="op0">Select Option</option>
  					<option value="op1">Java:void(0);</option>
  					<option value="op2">js;void(0);</option>
  					<option value="op3">javascript:void(0);</option>
  				</select><span><?php echo $errord; ?></span><br>

  				<label>4. How do you make a button background-color to be blue in bootstrap?</label>
  				<select name="9">
  					<option value="op0">Select Option</option>
  					<option value="op1">btn-info</option>
  					<option value="op2">btn-blue</option>
  					<option value="op3">button-blue</option>
  				</select><span><?php echo $errore; ?></span><br>
  				
  				<button id="submitbtn1" type="submit" name="B">Submit</button>
  			</form>	
  		</div>
  		
  		<?php
	}
}

?>
<?php
	if (isset($_POST['B'])) {
		if ($_POST['6'] != 'op2') {
			$errorb = 'Wrong Answer';
		}else {
			$errorb = 'Correct';
		}
		if ($_POST['7'] != 'op2') {
			$errorc = 'Wrong Answer';
		}else {
			$errorc = 'Correct';
		}
		if ($_POST['8'] != 'op3') {
			$errord = 'Wrong Answer';
		}else {
			$errord = 'Correct';
		}
		if ($_POST['9'] != 'op1') {
			$errore = 'Wrong Answer';
		}else {
			$errore = 'Correct';
		}
		
	}
?>

<?php


if (isset($_POST['B'])) {
	if ($_POST['6']=='op2' && $_POST['7']=='op2' && $_POST['8']=='op3' && $_POST['9']=='op1') {
		
	?>
	<script>
     document.getElementById("sectionA").style.display = "none";
    </script>
			<div>
  			<h2>SECTION C</h2>
  			<form action="process.php" method="POST">
  				<label>1. What is the differnce between WELL and CARD in bootstrap?</label>
  				<select name="10">
  					<option value="op0">Select Option</option>
  					<option value="op1">well=card</option>
  					<option value="op2">well=bootsrap component;card=bootstrap js</option>
  					<option value="op3">well=bootstrap 3;card bootstrap 4</option>
  				</select><span><?php echo $errorf; ?></span><br>
  				
  				<label>2. Select a number in the options?</label>
  				<select name="11">
  					<option value="op0">Select Option</option>
  					<option value="op1">'43'</option>
  					<option value="op2">23</option>
  					<option value="op3">"35"</option>
  				</select><span><?php echo $errorg; ?></span><br>
  				
  				<label>3. Which is a boolean in the options?</label>
  				<select name="12">
  					<option value="op0">Select Option</option>
  					<option value="op1">Yes</option>
  					<option value="op2">No</option>
  					<option value="op3">False</option>
  				</select><span><?php echo $errorh; ?></span><br>
  				
  				<label>4. Whch of the option is not a string?</label>
  				<select name="13">
  					<option value="op0">Select Option</option>
  					<option value="op1">'string'</option>
  					<option value="op2">string</option>
  					<option value="op3">"string"</option>
  				</select><span><?php echo $errori; ?></span><br>
  				
  				<button type="submit" name="C">Submit</button>
  			</form>	
  		</div>

   
<?php
}
}
?>

<?php
	if (isset($_POST['C'])) {
		if ($_POST['10'] != 'op3') {
			$errorf = 'Wrong Answer';
		}else {
			$errorf = 'Correct';
		}
		if ($_POST['11'] != 'op2') {
			$errorg = 'Wrong Answer';
		}else {
			$errorg = 'Correct';
		}
		if ($_POST['12'] != 'op3') {
			$errorh = 'Wrong Answer';
		}else {
			$errorh = 'Correct';
		}
		if ($_POST['13'] != 'op2') {
			$errori = 'Wrong Answer';
		}else {
			$errori = 'Correct';
		}
		
		 
	}
	
?>

	<?php
	if (isset($_POST['C'])) {
		if($_POST['10']=='op3' && $_POST['11']=='op2' && $_POST['12']=='op3' && $_POST['13']=='op2') {
		
	?>
	<script>
     document.getElementById("sectionA").style.display = "none";
    </script>

    <div>
    	<h2 style="color: green">CONGRATS</h2>
    </div>

     </div><!-- /.container -->

    <?php
}
}
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>