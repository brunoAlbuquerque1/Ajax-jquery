<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>JQuery com Ajax</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<main>
		<section class="container">
			<h1>JQuery com Ajax</h1>
			<span id="msg"></span>
			<form id="AjaxRequest">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>

				<div class="form-group">
					<label>E-Mail:</label>
					<input type="email" class="form-control" name="email" placeholder="E-Mail">
				</div>

				<div class="form-group">
					<label>Telephone:</label>
					<input type="text" class="form-control" name="tel" placeholder="Telephone">
				</div>

				<button type="submit" class="btn btn-info">Submit</button>
			</form>
		</section><!-- //container -->
	</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>