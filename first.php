<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js">
</script>
<body>
  <div ng-app="myApp" ng-controller="myCtrl">
    {{ firstName +" "+ lastName }}
  </div>
  <script>
  var app=angular.module("myApp",[]);
  app.controller("myCtrl", function($scope){
    $scope.firstName="nikita";
    $scope.lastName="nagpal";
  });
  </script>
</body>
</html>
