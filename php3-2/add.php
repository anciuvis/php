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
			<form class="" action="addToCsv.php" method="post">
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
					<input class="col-md-1" type="number" name="deadline1"><input class="col-md-1" type="number" name="deadline2"><input class="col-md-1" type="number" name="deadline3">
				</div>
				<div class="row">
					<label class="col-md-2" for="priority">Priority: </label>
					<input type="radio" id="prior-high" name="priority" value="high"/><label for="prior-high">High</label>
					<input type="radio" id="prior-low" name="priority" value="low"/><label for="prior-low">Low</label>
				</div>
				<button type='submit' id="btn-add" class="btn btn-primary">Add task</button>
			</form>
				<a href="index.php" class="btn btn-primary">Atgal</a>
		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
	</body>
</html>
