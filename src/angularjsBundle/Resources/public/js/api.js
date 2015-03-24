(function() {
var app = angular.module('myApp', ['ngResource']);

app.factory("Product", function($resource) {
  return $resource("/api/product/:id");
});

app.factory("Review", function($resource) {
  return $resource("/api/product/:id/review");
});


//HTTP GET /api/product
app.controller("ProductIndexCtrl", function($scope, Product) {
  Product.query(function(data) {
    $scope.product = data;
  });
});

//HTTP GET /api/product/:id
app.controller("ProductShowCtrl", function($scope, Product) {
  Product.get({ id: @id }, function(data) {
    $scope.product = data;
  });
});

//HTTP PUT /api/product/:id
app.controller("ProductInsertCtrl", function($scope, Product) {
  Product.put({ id: @id }, function(data) {
    $scope.product = data;
  });
});

//HTTP DELETE /api/product/:id
app.controller("ProductDeleteCtrl", function($scope, Product) {
  Product.delete({ id: @id }, function(data) {
    $scope.product = data;
  });
});

//HTTP GET /api/product/:id/review


//HTTP POST /api/product/:id/review


})();
