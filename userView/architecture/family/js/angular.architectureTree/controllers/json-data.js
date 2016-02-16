angular.module('ChartsApp').controller('jsonDataCtrl', function ($scope, $http, bus, data) {
    'use strict';

    var previousData;

		var saveJson = function(data) {
				$http.post('saveJson.php', data).then(function() {
						console.log ('success');					
				});	
		}
		
    bus.on('updateData', function(data) {
        previousData = data;
        $scope.data = JSON.stringify(data, undefined, 2);
        saveJson($scope.data);
    });

    $scope.updateData = function() {
        var newData = JSON.parse($scope.data);
        if (!angular.equals(newData, previousData)) {
            data.setJsonData(newData);
        }
    };

});
