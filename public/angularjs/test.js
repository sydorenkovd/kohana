/**
 * Created by Виктор Сидоренко on 24.08.2016.
 */
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope, $http) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.test = function() {
        $http.get('kohana.loc/admin/api/test').then(
            function(response){
                $scope.data = response.data.answer;
            });
    }
});