<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<?php if ($language1==null||$word1==null): ?>
				<h2>Pasirink kalbas vertimui</h2>
				<form action='index.php' method='GET'>
					<div class="form-group">
						<select class="form-control" name="language1">
							<option value="" disabled selected hidden>pradine kalba</option>
							<option value="lt">Lithuanian</option>
							<option value="en">English</option>
							<option value="ru">Russian</option>
						</select>
						<select class="form-control" name="language2">
							<option value="" disabled selected hidden>i kokia kalba</option>
							<option value="en">English</option>
							<option value="lt">Lithuanian</option>
							<option value="ru">Russian</option>
						</select>
						<label for="word1">Word</label>
						<input type='text' class="form-control" name='word1' placeholder='Enter word'>
						<button type='submit' class="btn btn-primary">Translate</button>
					</div>
				</form>
			<?php else: ?>
				<?php if (in_array('tokio zodzio nera', $wordEnd)): ?>
					<h2>Tokio zodzio nera vertimui</h2>
					<form action='index.php' method='POST'>
						<div class="form-group">
							<label for="wordLt">Zodis lietuviskai</label>
							<input type='text' class="form-control" name='wordLt' value="<?php if($language1=='lt'){ echo $word; }?>"placeholder='Enter word in Lithuanian'>
							<label for="wordEn">Zodis angliskai</label>
							<input type='text' class="form-control" name='wordEn' value="<?php if($language1=='en'){ echo $word; }?>"placeholder='Enter word in English'>
							<label for="wordRu">Zodis rusiskai</label>
							<input type='text' class="form-control" name='wordRu' value="<?php if($language1=='ru'){ echo $word; }?>"placeholder='Enter word in Russsian'>
							<button type='submit' class="btn btn-primary">Add word</button>
						</div>
					</form>
				<?php else: ?>
				<h2>Pasirink kalbas vertimui</h2>
				<form action='index.php' method='GET'>
					<div class="form-group">
						<select class="form-control" name="language1">
							<option value="" disabled selected hidden>pradine kalba</option>
							<option value="lt">Lithuanian</option>
							<option value="en">English</option>
							<option value="ru">Russian</option>
						</select>
						<select class="form-control" name="language2">
							<option value="" disabled selected hidden>i kokia kalba</option>
							<option value="en">English</option>
							<option value="lt">Lithuanian</option>
							<option value="ru">Russian</option>
						</select>
						<label for="word1">Word</label>
						<input type='text' class="form-control" name='word1' placeholder='Enter word'>
						<button type='submit' class="btn btn-primary">Translate</button>
					</div>
				</form>
				<h2>Ka verciame: <span style="text-decoration: underline"><?php echo $word ?></span></h2>
				<h2>Is kurios kalbos: <span style="text-decoration: underline"><?php echo $language ?></span></h2>
				<h2>I kuria kalba: <span style="text-decoration: underline"><?php echo $languageStart ?></span></h2>
				<h2>Vertimas:
					<span style="text-decoration: underline">
					<?php
						foreach ($wordEnd as $value) {
							echo $value.' ';
						}
					?>
					</span>
				</h2>
				<a href="index.php" class="btn btn-primary">Atgal</a>
				<?php endif;?>
			<?php endif;?>
		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	</body>
</html>
