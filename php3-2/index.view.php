<html>
	<head>
		<meta charset="utf-8">
		<title>ToDoList PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<!-- <?php  ?> -->

			<!-- <?php  ?> -->
				<!-- <?php  ?> -->

				<!-- <?php  ?> -->
					<br />
					<table class="table">
						<thead>
							<tr>
								<th>To do list</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($toDo as $value) {
								echo '<tr onclick="myFunction()"><td>'.$value['title'].'</td></tr>'.'<tr class="hidden"><td>'.$value['desc'].' '.$value['deadline'].' '.$value['priority'].' '.$value['done'].'</td></tr>';
								}
								// $i=0;
								// foreach ($toDo as $value) {
								// 	echo '<tr onclick="myFunction()">'.$value['title'].'</td></tr>'.'<tr class="hidden" id="row'."$i".'"><td>'.$value['desc'].' '.$value['deadline'].' '.$value['priority'].' '.$value['done'].'</td></tr>'.'<script type="text/javascript" src="script.js" >var i = '.'row'.$i;.'</script>';
								// 	$i++;
								// }
							?>
						</tbody>
					</table>
					<hr>
					<button type='submit' class="btn btn-primary">Add task</button>
				<!-- <?php ?> -->
			<!-- <?php ?> -->
		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>
