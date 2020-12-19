<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Website</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<script src="search.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body>
	<div class="main">
		<div class="info">
			<form id="f1" name="f1" class="search">
				<input type="text" id="t1" name="t1" placeholder="Search recipes here..."
				required="">
				<input type="button" name="b1" value="SEARCH" form="f1" onclick="getRecipe(document.getElementById('t1').value)">
			</form>

			<br>
			<br>



		<div id="results"></div>

		</div>
	</div>
</body>
</html>