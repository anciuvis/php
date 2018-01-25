<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<?php if ($language1==null|$word1==null): ?>
				<h2>Pasirink kalbas vertimui</h2>
				<form action='index.php' method='GET'>
					<div class="form-group">
						<select class="form-control" name="language1">
							<option value="" disabled selected hidden>select language</option>
							<option value="lt">English</option>
							<option value="en">Lithuanian</option>
						</select>
						<!-- <select class="form-control" name="language2">
							<option value="" disabled selected hidden>select translation language</option>
							<option value="en">English</option>
							<option value="lt">Lithuanian</option> -->
						</select>
						<label for="word1">Word</label>
						<input type='text' class="form-control" name='word1' placeholder='Enter word'>
						<button type='submit' class="btn btn-primary">Translate</button>
					</div>
				</form>
			<?php else: ?>
				<h2>Vertimas: <?php echo $wordEnd ?></h2>
				<a href="index.php" class="btn btn-primary">Atgal</a>
			<?php endif;?>
		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	</body>
</html>
