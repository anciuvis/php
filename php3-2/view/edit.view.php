<html>
	<head>
		<meta charset="utf-8">
		<title>ToDoList PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	</head>
	<body>
		<br/>
		<?php if(isset($_SESSION['false'])): ?>
			<div class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $_SESSION['false'] ?>
			</div>
				<?php unset ($_SESSION['false']); ?>
		<?php endif; ?>
		<form class="" action="../updTask.php?id=<?php echo $id ?>" method="post">
			<div class="row">
				<label class="col-md-2" for="title">Title: </label>
				<input class="col-md-3" type="text" name="title" value="<?php echo $toDo[$id]['title']?>">
			</div>
			<div class="row">
				<label class="col-md-2" for="desc">Description: </label>
				<textarea class="col-md-3" type="text" name="desc"><?php echo $toDo[$id]['desc']?></textarea>
			</div>
			<div class="row">
				<label class="col-md-2" for="deadline">Deadline: </label>
				<select class="col-md-1" name="deadline3">
					<option value="<?php echo date('Y', $toDo[$id]['deadline'])?>"><?php echo date('Y', $toDo[$id]['deadline'])?></option>
					<?php for ($i=date('Y'); $i < date('Y')+10; $i++) { ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
				</select>
				<select class="col-md-1" name="deadline1">
					<option value="<?php echo date('m', $toDo[$id]['deadline'])?>"><?php echo date('m', $toDo[$id]['deadline'])?></option>
					<?php for ($i = 1; $i <= 12; $i++) { ?>
					<option value="<?php echo strlen($i)==1 ? '0'.$i : $i; ?>"><?php echo strlen($i)==1 ? '0'.$i : $i; ?></option>
					<?php } ?>
				</select>
				<select class="col-md-1" name="deadline2">
					<option value="<?php echo date('d', $toDo[$id]['deadline'])?>"><?php echo date('d', $toDo[$id]['deadline'])?></option>
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
			<button type='submit' id="btn-edit" class="btn btn-info">Update task</button>
		</form>
			<a href="../index.php" class="btn btn-primary">Atgal</a>
	</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
	</body>
</html>
