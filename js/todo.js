var todoApp = angular.module("todoApp", []);
todoApp.controller("todoListController", function($scope) {

	$scope.todos = [{
		text : 'Learn javascript',
		done : false
	},
	{
		text : 'Learn angular',
		done : false
	}];

	$scope.addToDo = function() {
		console.log($scope.formNewTodo);
		if($scope.formNewTodo) {
			$scope.todos.push({
				text : $scope.formNewTodo,
				done : false
			})
			$scope.formNewTodo = '';
		}

	}
	$scope.archiver = function() {
		var oldTodos = $scope.todos;
		$scope.todos =  [];
		angular.forEach(oldTodos, function(todo) {
			if(!todo.done) {
				$scope.todos.push(todo);
			}
		})
	}

	$scope.remaining = function() {
		var count = 0;
		angular.forEach($scope.todos, function(todo)  {

			count += todo.done ? 0  : 1;
		})
		return count;
	}
});

todoApp.controller("expleCTRL", function($scope) {

	$scope.exp = "machin";
})