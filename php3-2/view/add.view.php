<html>
	<head>
		<meta charset="utf-8">
		<title>ToDoList PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<br />
			<table class="table">
				<thead>
					<tr>
						<th>New Task</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<hr>
			<form class="" action="../addTask.php" method="post">
				<div class="row">
					<label class="col-md-2" for="title">Title: </label>
					<input class="col-md-3" type="text" name="title">
				</div>
				<div class="row">
					<label class="col-md-2" for="desc">Description: </label>
					<textarea class="col-md-3" type="text" name="desc"></textarea>
				</div>
				<div class="row">
					<label class="col-md-2" for="deadline">Deadline: </label>
					<select class="col-md-1" name="deadline3">
						<option value="">Year</option>
						<?php for ($i=date('Y'); $i < date('Y')+10; $i++) { ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php } ?>
					</select>
					<select class="col-md-1" name="deadline1">
						<option value="">Month</option>
						<?php for ($i = 1; $i <= 12; $i++) { ?>
				    <option value="<?php echo strlen($i)==1 ? '0'.$i : $i; ?>"><?php echo strlen($i)==1 ? '0'.$i : $i; ?></option>
				    <?php } ?>
					</select>
					<select class="col-md-1" name="deadline2">
						<option value="">Day</option>
						<?php for ($i = 1; $i <= 31; $i++) { ?>
				    <option value="<?php echo strlen($i)==1 ? '0'.$i : $i; ?>"><?php echo strlen($i)==1 ? '0'.$i : $i; ?></option>
				    <?php } ?>
					</select>
				</div>
				<div class="row">
					<label class="col-md-2" for="priority">Priority: </label>
					<input type="radio" name="priority" value="high"/><label for="prior-high">High</label>
					<input type="radio" name="priority" value="low"/><label for="prior-low">Low</label>
				</div>
				<button type='submit' id="btn-add" class="btn btn-info">Add task</button>
			</form>
				<a href="../index.php" class="btn btn-primary">Atgal</a>
		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
	</body>
</html>
