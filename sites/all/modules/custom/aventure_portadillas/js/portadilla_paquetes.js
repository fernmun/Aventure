angular.module('packageApp', ['uiSlider','ngResource']).
  controller('mainController', function($scope, $resource, $location) {
    var pathArray = window.location.pathname.split( '/' );
    var language = pathArray[2];
    var Package =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/'+language+'/packages?entity_type=paquete');
    var Place =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/'+language+'/places');

    var TravelType =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/'+language+'/travel_type');

    var Partner =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/'+language+'/partners');

      var Activity =
      $resource('http://dev.aventurecolombia.com/aventure-services/public/api/v1/'+language+'/activities');

    $scope.precioInicial = 100;
    $scope.precioFinal = 1000;
    $scope.filterTimesPassed = 0;
    $scope.greatThanNum = function(item) {
      return parseInt(item.field_paquete_precio_value) >= parseInt($scope.precioInicial);
    };

    $scope.lessThanNum = function(item) {
      return parseInt(item.field_paquete_precio_value) <= parseInt($scope.precioFinal);
    };

    $scope.filterPlace = function(item) {
      if (!$scope.placeModel) {
        return true;
      }

      var filterResult = false;
      item.field_lugar_tid.map(function(tid) {
        if (parseInt(tid) === parseInt($scope.placeModel)) {
          filterResult = true;
        }
      });

      return filterResult;
    }

    $scope.filterTravelType = function(item) {
      $scope.filterTimesPassed = $scope.filterTimesPassed + 1;
      var filterResult = false;
      if ($location.search()['tp'] && $scope.filterTimesPassed <= ($scope.totalPackages * 2)) {
        item.field_intereses_tid.map(function(tid) {
          if (parseInt(tid) === parseInt($location.search()['tp'])) {
            filterResult = true;
          }
          else {
            return false;
          }
        });
      }

      else if (!$scope.travelTypeModel) {
        return true;
      }

      item.field_intereses_tid.map(function(tid) {
        if (parseInt(tid) === parseInt($scope.travelTypeModel)) {
          filterResult = true;
        }
      });

      return filterResult;
    }

    $scope.filterPartner = function(item) {
      if (!$scope.partnerModel) {
        return true;
      }

      var filterResult = false;
      item.field_con_quien_se_puede_viajar_tid.map(function(tid) {
        if (parseInt(tid) === parseInt($scope.partnerModel)) {
          filterResult = true;
        }
      });

      return filterResult;
    }

    $scope.filterActivity = function(item) {
      if (!$scope.activityModel) {
        return true;
      }

      var filterResult = false;
      item.field_actividades_tid.map(function(tid) {
        if (parseInt(tid) === parseInt($scope.activityModel)) {
          filterResult = true;
        }
      });

      return filterResult;
    }

    $scope.associativePartners = [];
    $scope.associativeActivities = [];

    $scope.places = Place.query(function(){});
    $scope.packages = Package.query(function(){
      $scope.totalPackages = $scope.packages.length;
    });
    $scope.travelTypes = TravelType.query(function(){});

    $scope.partners = Partner.query(function(){
      $scope.partners.map(function(item){
        $scope.associativePartners[item.tid] = item.name;
      });
    });

    $scope.activities = Activity.query(function(){
      $scope.activities.map(function(item){
        $scope.associativeActivities[item.tid] = item.name;
      });
    });
  });
