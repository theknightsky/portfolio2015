var app = angular.module('app', ['ngAnimate','ui.router']);

app.config(['$stateProvider','$urlRouterProvider',function ($stateProvider,$urlRouterProvider) {

    $stateProvider
    .state('intro', {
        url: '/',
        controller: 'mainCtrl'
    })
    .state('contact', {
        url: '/contact',
        templateUrl: 'assets/templates/contact.html',
        controller: 'contactCtrl'
    })
    .state('portfolio', {
        abstract: true,
        templateUrl: 'assets/templates/portfolio.html',
        controller: 'portfolioGalleryCtrl'
    })
    .state('portfolio.gallery', {
        url: '/portfolio',
        templateUrl: "assets/templates/portfolio-gallery.html",
    })
    .state('portfolio.item', {
        url: '/portfolio/:id',
        templateUrl: "assets/templates/portfolio-item.html",
        controller: "portfolioItemCtrl"
    })
    .state('resume', {
        url: '/resume',
        templateUrl: 'assets/templates/resume.html',
        controller: 'resumeCtrl'
    });

    $urlRouterProvider.otherwise('/')

}]);

app.factory('Portfolio', ['$http', function ($http){
    return {
        getAll: function() {
            return $http.get('/api/portfolio');
        },
        getSingle: function(id) {
            return $http.get('/api/portfolio/' + id);
        }
    };
}]);

app.controller('mainCtrl', ['$scope','$rootScope', function ($scope, $rootScope){
    $rootScope.$on('$stateChangeSuccess', function() {
       document.body.scrollTop = document.documentElement.scrollTop = 0;
    });

    $rootScope.hideIntro = false;
}]);


app.controller('contactCtrl', ['$scope','$rootScope', function ($scope, $rootScope){
    $rootScope.hideIntro = true;
}]);


app.controller('portfolioGalleryCtrl', ['$scope','$rootScope','$stateParams','Portfolio', function ($scope, $rootScope, $stateParams, Portfolio){
    $rootScope.hideIntro = true;

    Portfolio.getAll().success(function(data){
        $scope.portfolioItems = data;
    });

}]);


app.controller('portfolioItemCtrl', ['$scope','$rootScope','$stateParams','Portfolio', function ($scope, $rootScope, $stateParams, Portfolio){
    $rootScope.hideIntro = true;

    Portfolio.getSingle($stateParams.id).success(function(data){
        $scope.item = data;
    });
}]);


app.controller('resumeCtrl', ['$scope','$rootScope', function ($scope, $rootScope){
    $rootScope.hideIntro = true;
}]);
