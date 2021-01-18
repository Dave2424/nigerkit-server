mainApp.factory('appService', ['$http','$location', '$window', function($http, $location, $window){

    function fetchData(url, onSuccess, onError) {
        $http.get(url
        ).then(function (response) {
            //console.log
            if (response.data && response.data.success) {
                onSuccess(response);
            }
            else {
                onError(response);
            }

        }, function (response) {

            onError(response);

        });
    }

    function sendNormalData(url, data, onSuccess, onError) {
        $http.post(url, data
        ).then(function (response) {
            //console.log
            if (response.data && response.data.success) {
                onSuccess(response);
            }
            else {
                onError(response);
            }

        }, function (response) {

            onError(response);

        });
    }

    function uploadFormWithFile(url, data, onSuccess, onError) {
        $http.post(
            url,
            data,
            {
                transformRequest: angular.identity,
                headers: {'Content-Type': undefined}
             }
        ).then(function (response){
            if(response.data && response.data.success){
                onSuccess(response);
            } else {
                onError(response);
            }
        }, function (response){
            onError(response);
        });
    }

    return {
        fetchData : fetchData,
        sendNormalData : sendNormalData,
        uploadFormWithFile : uploadFormWithFile
    };
}]);