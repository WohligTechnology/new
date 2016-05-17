<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="firstapp">

<head ng-controller="headerctrl">
    <title ng-bind="template.title"></title>
    <!--    <link rel="shortcut icon" href="img/favicon.png" />-->
    <link rel="stylesheet" type="text.css" href="bower_components/angular-ui-select/dist/select.css" />
    <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="lib/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="lib/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="lib/css/ngDialog-theme-default.css" />
    <link rel="stylesheet" type="text/css" href="lib/css/ngDialog-theme-plain.css" />
    <link rel="stylesheet" type="text.css" href="lib/css/ngDialog.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="lib/js/ngDialog.js"></script>
    <script src="lib/js/angular-route.min.js"></script>
    <script src="lib/js/angular-animate.min.js"></script>
    <script src="lib/js/angular-file-upload.js"></script>
    <script src="lib/js/FileAPI.min.js"></script>
    <script src="lib/js/upload.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/lodash.min.js"></script>
    <script src="bower_components/angular-ui-select/dist/select.js"></script>
    <script type="text/javascript" src="bower_components/angular-ui-sortable/sortable.js"></script>

    <script src="lib/js/jstorage.js"></script>
    <script src="js/app.js"></script>
    <script src="js/controllers.js"></script>
    <script src="js/templateservice.js"></script>
    <script src="js/navigation.js"></script>
    <script src="lib/js/select2.min.js"></script>


</head>

<body>


    <div class="repeated-item" ng-view></div>


</html>
