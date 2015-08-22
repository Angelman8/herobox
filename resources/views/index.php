<!DOCTYPE html>
<html ng-app>
<head>
    <title>Hero Box</title>
</head>

<body ng-controller="MainController">
    <h1>Test</h1>

    <ul>
        <li ng-repeat="test in tests">{{ test.name }}</li>
    </ul>

    <!-- <script type="text/javascript" src="/vendor/angular/angular.js"></script> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
    <script type="text/javascript" src="/js/angular/main/controllers/main.js"></script>
</body>
</html>