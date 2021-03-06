app.controller('signupController', ["$scope", "UserService", function($scope, UserService) {
$scope.alerts = [];
	$scope.createSignup = function(formData, validated) {
		if(validated === true) {
			UserService.create(formData)
				.then(function(result) {
					if(result.data.status === 200) {
						$scope.alerts[0] = {type: "success", msg: result.data.message};
						$scope.formData = {userFirstName: null, userLastName: null, userPhoneNumber: null, userEmail: null, userPassword: null};
					} else {
						$scope.alerts[0] = {type: "danger", msg: result.data.message};
					}
				});
		}
	};
}]);