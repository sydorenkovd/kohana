/**
 * Created by Виктор Сидоренко on 24.08.2016.
 */
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope, $http) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.data = [];
    $scope.test = function(param, title) {
        if (param) {
            $http.get('kohana.loc/admin/api/test' + '/' + param + '/' + title).then(
                function(response) {
                    $scope.data = response.data.answer.data;
                });
        } else {
            $http.get('kohana.loc/admin/api/test').then(
                function successCallback(response) {
                    $scope.data = response.data.answer.data;
                    $scope.ans = typeof $scope.data;
                });
        }
    };
    $scope.page = 0;
    $scope.ans = null;
    $scope.showmore = function() {
        $scope.page++;
        $http.get('kohana.loc/admin/api/test' + '/' + $scope.page).then(
            function successCallback(response) {
                $scope.data.push(response.data.answer.data[0]);
                $scope.ans = typeof $scope.data;
                $scope.is_more = response.data.answer.is_more;
            });
    }
});