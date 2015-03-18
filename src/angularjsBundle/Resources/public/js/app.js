(function() {
  var app = angular.module('gemStore', ['store-directives']);

  app.controller('StoreController', ['$http', function($http){
    var store = this;
    store.products = [];
    $http.get('/bundles/angularjs/js/store-products.json').success(function(data){
        store.products = data;
    });
  }]);

  app.controller('ReviewController', function() {
    this.review = {};

    this.addReview = function(product) {
		this.review.createdOn = Date.now();
		product.reviews.push(this.review);

		this.review = {};
    };
  });
  
  app.controller('BuyController', function() {
	this.addBuy = function(product) {
		alert('Gracias por su compra, pronto recibirá su pedido en la dirección indicada');
	};
  });
})();
