angular.module('hotelApp', ['uiSlider','ngResource']).
  controller('mainHotelController', function($scope, $resource) {
    var pathArray = window.location.pathname.split( '/' );
    var language = pathArray[2];
    var Hotel =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/' + language +  '/hotels');
    var Place =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/' + language +  '/places');

    var Activity =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/' + language + '/hotel_type');

    $scope.precioInicial = 0;
    $scope.precioFinal = 500;
    $scope.votoInicial = 1;
    $scope.votoFinal = 10;
    $scope.greatThanNum = function(item) {
      return parseInt(item.field_paquete_precio_value)
        >= parseInt($scope.precioInicial);
    };

    $scope.lessThanNum = function(item) {
      return parseInt(item.field_paquete_precio_value)
        <= parseInt($scope.precioFinal);
    };

    $scope.filterActivity = function(item) {
      if (!$scope.activityModel) {
        return true;
      }

      return item.field_hotel_tipo_tid == $scope.activityModel;
    }

    $scope.filterPlace = function(item) {
      if (!$scope.placeModel) {
        return true;
      }

      return item.field_lugar_tid == $scope.placeModel;
    }

    $scope.filterVoteLessThan = function(item) {
return true;
      return (parseInt(item.value)/10) >= parseInt($scope.votoInicial);
    }

    $scope.filterVoteMoreThan = function(item) {
return true;
      return (parseInt(item.value)/10) <= parseInt($scope.votoFinal);
    }
    $scope.starsByHotel = [];
    $scope.places = Place.query(function(){});
    $scope.hotels = Hotel.query(function(){
      console.log($scope.hotels);
      angular.forEach($scope.hotels, function(value, key){
        var stars = parseInt(value.value)/10;
        var counter = [];
        for(i=0;i<stars;i=i+1) {
          counter.push(i);
        }
        $scope.starsByHotel[value.nid] = counter;
      });
    });

    $scope.activities = Activity.query(function(){});
  });
