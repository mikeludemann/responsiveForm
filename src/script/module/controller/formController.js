app.controller('forms', function ($scope) {
    $scope.firstName = "";
    $scope.lastName = "";
    $scope.email = "";
    $scope.comments = "";
    $scope.salutation = [
        "Mr.",
        "Mrs.",
        "Ms."
    ];
});