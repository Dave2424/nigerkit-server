mainApp.controller('orderlistController', ['$rootScope', '$scope', '$location', '$window', '$timeout', 'appService',
    function ($rootScope, $scope, $location, $window, $timeout, appService) {

        $scope.model = {};

        $scope.getData = function () {
            appService.fetchData('/get-orderlist',
                function (resp) {
                    $scope.model.orderlist = resp.data.orderlist;
                    console.log($scope.model.orderlist);
                },
                function (error) {
                    console.log(error);
                });
        };
        $scope.getData();


        // start navigation
        $scope.firstPage = function (record) {
            if (record.current_page != 1) {
                KTApp.block('#kt_blockui_content', {
                    overlayColor: '#000000',
                    state: 'primary',
                    message: 'Processing...'
                });
                appService.fetchData(record.first_page_url,
                    function (resp) {
                        $scope.model.orderlist = resp.data.orderlist;
                        KTApp.unblock('#kt_blockui_content');

                    },
                    function (error) {
                        // appService.alertbox('Error', error.responseText, 'error');
                        // console.log(resp.data);
                    });
            }
        };

        $scope.prevPage = function (record) {
            if (record.prev_page_url) {
                // KTApp.block('#kt_blockui_content', {
                //     overlayColor: '#000000',
                //     state: 'primary',
                //     message: 'Processing...'
                // });
                appService.fetchData(record.prev_page_url,
                    function (resp) {
                        $scope.model.orderlist = resp.data.orderlist;
                        KTApp.unblock('#kt_blockui_content');
                    },
                    function (error) {
                        // appService.alertbox('Error', error.responseText, 'error');
                        // console.log(resp.data);
                    });
            }
        };

        $scope.nextPage = function (record) {
            console.log(record);
            if (record.next_page_url) {
                // KTApp.block('#kt_blockui_content', {
                //     overlayColor: '#000000',
                //     state: 'primary',
                //     message: 'Processing...'
                // });
                appService.fetchData(record.next_page_url,
                    function (resp) {


                        $scope.model.orderlist = resp.data.orderlist;
                        KTApp.unblock('#kt_blockui_content');
                    },
                    function (error) {
                        // appService.alertbox('Error', error.responseText, 'error');
                        // console.log(resp.data);
                    });
            }
        };

        $scope.lastPage = function (record) {
            if (record.current_page != record.last_page) {
                KTApp.block('#kt_blockui_content', {
                    overlayColor: '#000000',
                    state: 'primary',
                    message: 'Processing...'
                });
                appService.fetchData(record.last_page_url,
                    function (resp) {
                        $scope.model.orderlist = resp.data.orderlist;
                        KTApp.unblock('#kt_blockui_content');
                    },
                    function (error) {
                        // appService.alertbox('Error', error.responseText, 'error');
                        // console.log(resp.data);
                    });
            }
        };
        // End navigation
    }
]);