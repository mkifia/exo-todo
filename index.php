<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>  Exo - angular</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/todo.css">
</head>
<body ng-app="todoApp" class="container">

	<div ng-controller="todoListController">
		<span> {{remaining()}} of {{todos.length}} remaining</span>
		[<a href="#" ng-click="archiver()" title="">archiver</a>]
		<ul>
			<li class="done-{{todo.done}}" ng-repeat="todo in todos">
				<input type="checkbox" name="" ng-model="todo.done">
				{{todo.text}}
			</li>
		</ul>
		<div class="form-inline">
			
		<input class="form-control" type="text" name="" ng-model="formNewTodo">
		<button class="btn btn-success"ng-click="addToDo()">Add</button>
		</div>
	</div>

	<script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
	<script type="text/javascript" src="js/todo.js"></script>
</body>
</html>