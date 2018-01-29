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
						<th>To do list</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($toDo as $key => $value) {
							echo '<tr><td>'.$value['title'].' '.$value['desc'].' '.$value['deadline'].' '.$value['priority'].' </td><td><a href="deleteTask.php?id='.$key.'" class="btn btn-primary">Delete</a><a href="editTask.php?id='.$key.'" class="btn btn-primary">Edit</a></td></tr>';
						} ?>
						<?php
						// $i=0;
						// foreach ($toDo as $value) {
						// 	echo '<tr onclick="myFunction()">'.$value['title'].'</td></tr>'.'<tr class="hidden" id="row'."$i".'"><td>'.$value['desc'].' '.$value['deadline'].' '.$value['priority'].' '.$value['done'].'</td></tr>'.'<script type="text/javascript" src="script.js" >var i = '.'row'.$i;.'</script>';
						// 	$i++;
						// }
					?>
				</tbody>
			</table>
			<hr>
			<form class="" action="add.php">
				<button type='submit' id="btn-add" class="btn btn-primary">Add task</button>
			</form>
		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
	</body>
</html>
