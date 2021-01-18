mainApp.controller('dashboardController', ['$rootScope', '$scope', '$location', '$window', '$timeout', 'appService',
    function ($rootScope, $scope, $location, $window, $timeout, appService) {

        $scope.model = {};
        $scope.model.orderlist = 0;
        $scope.model.revenue = 0;
        $scope.model.user = 0;
        $scope.model.post = 0;
        $scope.model.product = 0;
        $scope.model.sub_admin = 0;
        $scope.model.subscriber = 0;



        appService.fetchData('/dashboard-details',
        function (resp) {
            $scope.model.orderlist = resp.data.orderlist;
            $scope.model.revenue = resp.data.revenue;
            $scope.model.user = resp.data.user;
            $scope.model.post = resp.data.post;
            $scope.model.product = resp.data.product;
            $scope.model.sub_admin = resp.data.sub_admin;
            $scope.model.subscriber = resp.data.subscriber;
        }, function(error){
            console.log(error);
        });
    }
]);