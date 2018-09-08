angular.module('gridApp').service('GridService', gridService)

gridService.$inject = ['$http'];
function gridService($http) {
	
	this.getUsers = function () {
		return $http.get('/CI/index.php/api/users');
	};
	
	return this;

}