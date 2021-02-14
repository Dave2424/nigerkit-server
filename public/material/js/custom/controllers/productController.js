mainApp.controller('productController', ['$rootScope', '$scope', '$location', '$window', '$timeout', 'appService',
    function ($rootScope, $scope, $location, $window, $timeout, appService) {

        $scope.model = {};
        $scope.model.search = '';
        $scope.model.product = 'desc';
        $scope.model.productBy = 'created_at';
        $scope.model.page = 1;
        $scope.model.limit = "10";
        $scope.model.activeTab = 1;
        $scope.model.trash = false;

        $scope.model.getData = function () {
            $scope.model.trash = false
            $scope.model.loading_data = true
            var url = '/admin/get-products?page=' + $scope.model.page;
            if ($scope.model.product) {
                url = url + "&product=" + $scope.model.product;
            }

            if ($scope.model.limit > "10") {
                url = url + "&limit=" + $scope.model.limit;
            }

            if ($scope.model.productBy) {
                url = url + "&productBy=" + $scope.model.productBy;
            }

            if ($scope.model.search > '') {
                url = url + "&search=" + $scope.model.search;
            }

            appService.fetchData(url,
                function (resp) {
                    $scope.model.products = resp.data.products;
                    $scope.model.loading_data = false
                },
                function (error) {
                    $scope.model.loading_data = false
                });
        };

        $scope.model.getTrashedData = function () {
            $scope.model.trash = true
            $scope.model.loading_data = true
            var url = '/admin/get-trashed-products?page=' + $scope.model.page;
            if ($scope.model.product) {
                url = url + "&product=" + $scope.model.product;
            }

            if ($scope.model.limit > "10") {
                url = url + "&limit=" + $scope.model.limit;
            }

            if ($scope.model.productBy) {
                url = url + "&productBy=" + $scope.model.productBy;
            }

            if ($scope.model.search > '') {
                url = url + "&search=" + $scope.model.search;
            }

            appService.fetchData(url,
                function (resp) {
                    $scope.model.products = resp.data.products;
                    $scope.model.loading_data = false
                },
                function (error) {
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
            if(sortBy == $scope.model.productBy){
                if($scope.model.product == 'desc'){
                    $scope.model.product = "asc";
                }else{
                    $scope.model.product = 'desc';
                }

            }else{
                $scope.model.product = 'desc'
            }
            $scope.model.productBy = sortBy;

            if($scope.model.trash == true){
                $scope.model.getTrashedData()
            }else{
                $scope.model.getData()
            }
        };

        $scope.model.prevPage = function () {
            if ($scope.model.products.current_page > 1) {
                $scope.model.page = $scope.model.products.current_page - 1;
                if($scope.model.trash == true){
                    $scope.model.getTrashedData()
                }else{
                    $scope.model.getData()
                }
            }
        }

        $scope.model.getPage = function (page) {
            if (page != $scope.model.products.current_page) {
                $scope.model.page = page;
                if($scope.model.trash == true){
                    $scope.model.getTrashedData()
                }else{
                    $scope.model.getData()
                }
            }
        }

        $scope.model.nextPage = function () {
            if ($scope.model.products.next_page_url) {
                $scope.model.page = $scope.model.products.current_page + 1;
                if($scope.model.trash == true){
                    $scope.model.getTrashedData()
                }else{
                    $scope.model.getData()
                }
            }
        }
        // End navigation

        $scope.model.close = function(modal){
            $scope.model.activeProduct = []
            $('#'+modal).modal('hide');
        }

        $scope.model.viewProduct = function(product){
            $scope.model.activeProduct = product
            $('#view-product-details').modal('show');
        }

        $scope.model.viewTransaction = function(product){
            $scope.model.activeProduct = product
            $scope.model.transaction = product.transaction
            $('#view-payment-details').modal('show');
        }

        $scope.model.processProduct = function(){
            var url = "/admin/process-product"
            
            var payload = {
                'product_id': $scope.model.activeProduct.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $scope.model.activeProduct = resp.data.product
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

        $scope.model.shipProduct = function(){
            var url = "/admin/ship-product"
            
            var payload = {
                'product_id': $scope.model.activeProduct.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $scope.model.activeProduct = resp.data.product
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

        $scope.model.deleteProduct = function(product){
            $scope.model.activeProduct = product
            $('#delete-product-details').modal('show');
        }

        $scope.model.removeItem = function(){
            if($scope.model.trash == true){
                var url = "/admin/delete-product"
            }else{
                var url = "/admin/remove-product"
            }

            var payload = {
                'product_id': $scope.model.activeProduct.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $('#delete-product-details').modal('hide');
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

        $scope.model.restoreProduct = function(){
            var url = "/admin/restore-product"

            var payload = {
                'product_id': $scope.model.activeProduct.id
            };

            appService.sendNormalData(url, payload,
                function (resp) {
                    $('#view-product-details').modal('hide');
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