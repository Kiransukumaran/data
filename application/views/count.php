<!DOCTYPE html>
<html>
 <head>
  <title>Live Data</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
  .form_style
  {
   width: 600px;
   margin: 0 auto;
  }
  </style>
 </head>
 <body>
  
  <div class="container" ng-app="live_search" ng-controller="live_search_controller" ng-init="fetchData()">
   <br />
   <h3 align="center" ng-repeat="data in searchData" >Live Data: {{data.count}}</h3>
   <br />
   <br />
  </div>
 </body>
</html>

<script>
var app = angular.module('live_search', []);
app.controller('live_search_controller', function($scope, $http){
 $scope.fetchData = function(){
  $http({
   method:"GET",
   url: "<?php echo base_url(); ?>index.php/fetch",
  }).success(function(data){
   $scope.searchData = data;
  });
 };
 setInterval(() => {
     $scope.fetchData();
 }, 1000);
});
</script>