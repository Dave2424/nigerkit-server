var mainApp = angular.module('mainApp', [
    // 'ngSweetAlert',
    // 'ui.bootstrap',
    // 'ngSanitize'
]);
mainApp.directive('ngFileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var model = $parse(attrs.ngFileModel);
            var isMultiple = attrs.multiple;
            var modelSetter = model.assign;
            element.bind('change', function () {
                angular.forEach(element[0].files, function (item) {
                    scope.files.push(item);
                });
                scope.$apply(function () {
                    if (isMultiple) {
                        modelSetter(scope, scope.files);
                    } else {
                        modelSetter(scope, scope.files[0]);
                    }
                });
            });
        }
    };
}]);

mainApp.directive('backButton', function () {
    return {
        restrict: 'A',

        link: function (scope, element, attrs) {
            element.bind('click', goBack);

            function goBack() {
                history.back();
                scope.$apply();
            }
        }
    }
});
