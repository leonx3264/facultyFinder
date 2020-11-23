<!DOCTYPE html>

<html>
<head>
	<title>Faculty Finder</title>
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1426px)" href="style.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1425px)" href="smallstyle.css">
</head>
</main>
	<body>
	<div class="left">
		<div class="searchbox">
			<p id="logintitle">Faculty Search</p>
			<form id="search" action="index.php" method="post">
				<input type="text" align="center" placeholder="Name, Department, or Position" name="userinput" id="userInput" value=""></br>
				<a align="center" id="submitButton" onclick="getElementById('search').submit();">Submit</a>
		</div>
	</div>
	<div class="right">
		<div id="resultbox">
			<ul>
				<?php
					$userinput = "{$_POST['userinput']}";
					//echo $userinput;
					$output = shell_exec("python3 getnames.py " . "'" . $userinput . "'");
					echo $output;
					if (strlen($output) == 0){
						echo "<li><h3>Oops</h3><p>There are no results..</p></li>";
					}
				?>
			</ul>
		</div>
	</div>
	<div class="footer">
	</div>
	</body>
</main>
</html>
