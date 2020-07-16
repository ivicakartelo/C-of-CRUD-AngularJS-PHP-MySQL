<html ng-app="crudApp">  
<head>  
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>  
</head>  
<body>             
<div ng-controller="crudCtrl">
    <form ng-submit="createRow()">
        <table>
        <thead>
        <tr>
        <th>Name</th>
        <th>Phone</th>
        </tr>
        </thead>

        <tbody>
        <tr>
        <td><input type="text" ng-model="addField.name" placeholder="Enter Name" ng-required="true" /></td>
        <td><input type="text" ng-model="addField.phone"  placeholder="Enter Phone" ng-required="true" /></td>
        <td><button type="submit">Add</button></td>
        </tr>
        </tbody>
        </table>
    </form>     
</div>  
</body>  
</html>

<script>
var app = angular.module('crudApp', []);

app.controller('crudCtrl', ["$scope", "$http", function($scope, $http){
    $scope.createRow = function(){
        $http({
            method:"POST",
            url:"create.php",
            data:$scope.addField,
        });
    };
}]);
</script>
