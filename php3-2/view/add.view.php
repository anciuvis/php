<html>
	<head>
		<meta charset="utf-8">
		<title>ToDoList PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
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
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
	</body>
</html>
