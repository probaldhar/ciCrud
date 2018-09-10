
angular.module('gridApp').controller('GridController', gridController);

angular.module('gridApp').constant('APP_CONSTANTS', {
	'BASE_URL': 'http://localhost:8000/ci_angular_crud',
	
});

gridController.$inject = ['GridService'];

function gridController(GridService)
{
	var vm = this;

	vm.myData = [];
	vm.studentObj = {
		'title': '', 'name': ''
	};

	vm.addStudent = addStudent;
	vm.getUserList = getUserList;

	init();

	function init() {
		console.log('Grid API Inititalized');
		getUserList();
	}

	function getUserList() {
		GridService.getUsers().then(function (response) {
			// console.log('response', response);
			vm.myData = response.data
		});

	}


	function addStudent() {
		console.log('>>>', vm.studentObj);
		GridService.addStudent(vm.studentObj).then(function(response){
			console.log('response', response);
			if (response.status == 201) {
				var result = response.data;
				vm.myData.push(result.result);
			}
		});          
	}

	// vm.tambahData = function(){

 //            databaru = {

 //                message: 'asdasdasdasdasdasdasdasfasdfga',
 //                payment_step:'regular_chat',
 //                negotiation_price:'0',
 //                room_id:'123',
 //                member_id:'01'
 //             };

 //            $http({
 //                method: 'POST',
 //                url: 'http://localhost:8000/ci_angular_crud/api/users_post',
 //                headers : {'Content-Type': 'application/x-www-form-urlencoded'},

 //                data: $scope.databaru
 //            }).success(function (hasil) { 
 //            	$scope.data.push({
 //                	message: $scope.databaru.message,
 //                	chat_time: $scope.databaru.chat_time
 //           		});

 //             	$scope.databaru.message='';
 //            });
	// };
}


