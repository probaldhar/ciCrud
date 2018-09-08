
angular.module('gridApp').controller('GridController', gridController);
gridController.$inject = ['GridService'];

function gridController(GridService)
{
	var vm = this;

	vm.myData = [];

	GridService.getUsers().then(function (response) {
		console.log('response', response);
		vm.myData = response.data
	})

	console.log(this);
	console.log('Grid API Inititalized');
}


