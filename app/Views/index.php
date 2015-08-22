<!DOCTYPE html>
<html ng-app="app">
<head>
    <title>Hero Box</title>
    <base href="/"/>
</head>

<body>
    <h1>Test</h1>

    <div ng-view>
    </div>

    <script type="text/javascript" src="/vendor/angular/angular.min.js"></script>
    <script type="text/javascript" src="/vendor/angular-route/angular-route.min.js"></script>
    <script type="text/javascript" src="/vendor/angular-resource/angular-resource.min.js"></script>

    <script type="text/javascript" src="/js/app/app.module.js"></script>
    <script type="text/javascript" src="/js/app/app.routes.js"></script>
    <script type="text/javascript" src="/js/app/components/home/homeController.js"></script>
</body>
</html>