<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<?php if ($name==null||$surname==null): ?>
				<h2>Ivesk varda</h2>
				<form action='index.php' method='GET'>
					<div class="form-group">
						<label for="name">Name</label>
						<input type='text' class="form-control" name='name' placeholder='Enter Name'>
						<input type='text' class="form-control" name='surname' placeholder='Enter Surname'>
						<button type='submit' class="btn btn-primary">Submit</button>
					</div>
				</form>
			<?php else: ?>
				<h2>Labas <?php echo $newName.' whatever '.$surname;?></h2>
				<a href="index.php" class="btn btn-primary">Atgal</a>
			<?php endif;?>
		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	</body>
</html>
