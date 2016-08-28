/**
 * Created by Виктор Сидоренко on 24.08.2016.
 */
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope, $http) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.test = function(param, title) {
        if (param) {
            $http.get('kohana.loc/admin/api/test' + '/' + param + '/' + title).then(
                function(response) {
                    $scope.data = response.data.answer;
                });
        } else {
            $http.get('kohana.loc/admin/api/test').then(
                function(response) {
                    $scope.data = response.data.answer;
                });
        }
    }
});