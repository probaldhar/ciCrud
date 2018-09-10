angular.module('gridApp').service('GridService', gridService)

gridService.$inject = ['$http'];
function gridService($http) {
	
	this.getUsers = function () {
		return $http.get('/CI/index.php/api/users');
	};


	this.addStudent = function (info) {
    	return $http.post('/CI/index.php/api/users', info);
    };
	
	return this;

}