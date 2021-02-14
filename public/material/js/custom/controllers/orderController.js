mainApp.controller('orderController', ['$rootScope', '$scope', '$location', '$window', '$timeout', 'appService',
    function ($rootScope, $scope, $location, $window, $timeout, appService) {

        $scope.model = {};
        $scope.model.search = '';
        $scope.model.order = 'desc';
        $scope.model.orderBy = 'created_at';
        $scope.model.page = 1;
        $scope.model.limit = "10";
        $scope.model.activeTab = 1;
        $scope.model.trash = false;

        $scope.model.getData = function () {
            $scope.model.trash = false
            $scope.model.loading_data = true
            var url = '/admin/get-order-list?page=' + $scope.model.page;
            if ($scope.model.order) {
                url = url + "&order=" + $scope.model.order;
            }

            if ($scope.model.limit > "10") {
                url = url + "&limit=" + $scope.model.limit;
            }

            if ($scope.model.orderBy) {
                url = url + "&orderBy=" + $scope.model.orderBy;
            }

            if ($scope.model.search > '') {
                url = url + "&search=" + $scope.model.search;
            }

            appService.fetchData(url,
                function (resp) {
                    $scope.model.orders = resp.data.orders;
                    $scope.model.loading_data = false
                },
                function (error) {
                    console.log(error);
                    $scope.model.loading_data = false
                });
        };

        $scope.model.getTrashedData = function () {
            $scope.model.trash = true
            $scope.model.loading_data = true
            var url = '/admin/get-trashed-order-list?page=' + $scope.model.page;
            if ($scope.model.order) {
                url = url + "&order=" + $scope.model.order;
            }

            if ($scope.model.limit > "10") {
                url = url + "&limit=" + $scope.model.limit;
            }

            if ($scope.model.orderBy) {
                url = url + "&orderBy=" + $scope.model.orderBy;
            }

            if ($scope.model.search > '') {
                url = url + "&search=" + $scope.model.search;
            }

            appService.fetchData(url,
                function (resp) {
                    $scope.model.orders = resp.data.orders;
                    $scope.model.loading_data = false
                },
                function (error) {
                    console.log(error);
                    $scope.model.loading_data = false
                });
        };

        $scope.model.showData = function(){
            $scope.model.page = 1;
            $scope.model.getData();
        }

        $scope.model.showTrashedData = function(){
            $scope.model.page = 1;
            $scope.model.getTrashedData();
        }

        $scope.model.getData();

        // start navigation
        $scope.model.filterTable = function () {
            $scope.model.page = 1;
            if($scope.model.trash == true){
                $scope.model.getTrashedData()
            }else{
                $scope.model.getData()
            }
        }

        $scope.model.sortBy = function (sortBy) {
            if(sortBy == $scope.model.orderBy){
                if($scope.model.order == 'desc'){
                    $scope.model.order = "asc";
                }else{
                    $scope.model.order = 'desc';
                }

            }else{
                $scope.model.order = 'desc'
            }
            $scope.model.orderBy = sortBy;

            if($scope.model.trash == true){
                $scope.model.getTrashedData()
            }else{
                $scope.model.getData()
            }
        };

        $scope.model.prevPage = function () {
            if ($scope.model.orders.current_page > 1) {
                $scope.model.page = $scope.model.orders.current_page - 1;
                if($scope.model.trash == true){
                    $scope.model.getTrashedData()
                }else{
                    $scope.model.getData()
                }
            }
        }

        $scope.model.getPage = function (page) {
            if (page != $scope.model.orders.current_page) {
                $scope.model.page = page;
                if($scope.model.trash == true){
                    $scope.model.getTrashedData()
                }else{
                    $scope.model.getData()
                }
            }
        }

        $scope.model.nextPage = function () {
            if ($scope.model.orders.next_page_url) {
                $scope.model.page = $scope.model.orders.current_page + 1;
                if($scope.model.trash == true){
                    $scope.model.getTrashedData()
                }else{
                    $scope.model.getData()
                }
            }
        }
        // End navigation

        $scope.model.close = function(modal){
            $scope.model.activeOrder = []
            $('#'+modal).modal('hide');
        }

        $scope.model.viewOrder = function(order){
            $scope.model.activeOrder = order
            $('#view-order-details').modal('show');
        }

        $scope.model.viewTransaction = function(order){
            $scope.model.activeOrder = order
            $scope.model.transaction = order.transaction
            $('#view-payment-details').modal('show');
        }

        $scope.model.processOrder = function(){
            var url = "/admin/process-order"
            
            var payload = {
                'order_id': $scope.model.activeOrder.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $scope.model.activeOrder = resp.data.order
                    if($scope.model.trash == true){
                        $scope.model.getTrashedData()
                    }else{
                        $scope.model.getData()
                    }
                },
                function (error) {
                    console.log(error.statusText);
                });
        }

        $scope.model.shipOrder = function(){
            var url = "/admin/ship-order"
            
            var payload = {
                'order_id': $scope.model.activeOrder.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $scope.model.activeOrder = resp.data.order
                    if($scope.model.trash == true){
                        $scope.model.getTrashedData()
                    }else{
                        $scope.model.getData()
                    }
                },
                function (error) {
                    console.log(error.statusText);
                });
        }

        $scope.model.deleteOrder = function(order){
            $scope.model.activeOrder = order
            $('#delete-order-details').modal('show');
        }

        $scope.model.removeItem = function(){
            if($scope.model.trash == true){
                var url = "/admin/delete-order"
            }else{
                var url = "/admin/remove-order"
            }

            var payload = {
                'order_id': $scope.model.activeOrder.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $('#delete-order-details').modal('hide');
                    if($scope.model.trash == true){
                        $scope.model.getTrashedData()
                    }else{
                        $scope.model.getData()
                    }
                },
                function (error) {
                    console.log(error.statusText);
                });
        }

        $scope.model.restoreOrder = function(){
            var url = "/admin/restore-order"

            var payload = {
                'order_id': $scope.model.activeOrder.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $('#view-order-details').modal('hide');
                    if($scope.model.trash == true){
                        $scope.model.getTrashedData()
                    }else{
                        $scope.model.getData()
                    }
                },
                function (error) {
                    console.log(error.statusText);
                });
        }


    }
]);