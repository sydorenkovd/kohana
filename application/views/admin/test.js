/**
 * Created by Виктор Сидоренко on 24.08.2016.
 */
var AviaSearchForm = angular.module('AviaSearchForm', ['ui.bootstrap', 'ngLocale', 'ngSanitize', 'ngResource', 'ngMap']);
AviaSearchForm.config(function ($httpProvider) {
    $httpProvider.defaults.headers.post['Accept'] = k;
    $httpProvider.defaults.headers.common['Accept'] = k + ', ' + $httpProvider.defaults.headers.common['Accept'];
});
AviaSearchForm.controller('AirlineSingle', function($scope, $http) {
    $scope.items = [];
    $scope.flights = null;
    $scope.test = function () {
      alert('test');
    };
    $scope.getImages = function(iata) {
        $http.get(apiUrl + '/avia/airlines/image-' + iata).then(function callbackSuccess(result) {
            // $scope.items.length
            if(result.data.status_ok) {
                $scope.items = result.data.answer;
                setTimeout(function() {
                    runSlider();
                },300);
            }
        });
    };
    $scope.getAllFlights = function(iata) {
        $http.get(apiUrl + '/avia/airlines/' + iata + '/1').then(function(response){ $scope.flights = response.data.answer.result; });
    };




    var runSlider = function() {
        var flkty = new Flickity('.gallery');
        flkty.playPlayer();
    };
});