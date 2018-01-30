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
						<th>To do list</th>
					</tr>
				</thead>
				<tbody>
					<?php if(isset($_SESSION['msg'])): ?>
						<div class="alert alert-<?php echo $_SESSION['msg']['class'] ?> alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $_SESSION['msg']['message'] ?>
						</div>
							<?php unset ($_SESSION['msg']); ?>
					<?php endif; ?>
					<?php	for ($i=$from; $i <=$till ; $i++): ?>
							<tr><td class="font-weight-bold">
								<?php echo htmlspecialchars($toDo[$i]['title'])?>
							</td><td>
								<?php echo htmlspecialchars($toDo[$i]['desc']).' '.htmlspecialchars($toDo[$i]['deadline']).' '.htmlspecialchars($toDo[$i]['priority'])?>
							</td><td>
								<a href="../deleteTask.php?id=<?php echo $i ?>" class="btn btn-danger">Delete</a><a href="../editTask.php?id=<?php echo $i ?>" class="btn btn-primary">Edit</a><a href="../doneTask.php?id=<?php echo $i ?>" class="btn btn-success">Done</a></td></tr>
					<?php endfor; ?>
				</tbody>
			</table>
			<hr>
			<form class="" action="view/add.view.php">
				<button type='submit' id="btn-add" class="btn btn-info">Add task</button>
			</form>
			<nav aria-label="page navigation">
				<ul class="pagination">
					<?php for ($i=1; $i <= $pageCount; $i++) :  ?>
						<li class="page-item"><a class="page-link" href="index.php?psl=<?php echo $i ?>"><?php echo $i ?></a>
						</li>
					<?php endfor; ?>
				</ul>
			</nav>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
	</body>
</html>
