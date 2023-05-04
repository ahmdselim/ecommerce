<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield("dashboardHead") </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/dashboard')}}/src/assets/img/favicon.ico"/>
    <link href="{{asset('assets/dashboard')}}/layouts/horizontal-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/dashboard')}}/layouts/horizontal-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/dashboard')}}/layouts/horizontal-dark-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('assets/dashboard')}}/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/dashboard')}}/layouts/horizontal-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/dashboard')}}/src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/dashboard')}}/layouts/horizontal-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/dashboard')}}/src/assets/css/dark/authentication/auth-cover.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    @yield("dashboardLinks")

</head>
<body class="form">
