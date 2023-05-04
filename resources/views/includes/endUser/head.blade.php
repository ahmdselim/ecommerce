<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <!--=====================================
                    META-TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="Mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="name" content="Classicads">
        <meta name="type" content="Classified Advertising">
        <meta name="title" content="Classicads - Classified Ads HTML Template">
        <meta name="keywords" content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- FOR WEBPAGE TITLE -->
        <title>@yield('title')</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="{{ asset('assets/endUser') }}/images/favicon.png">

        <!-- FONTS -->
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/fonts/font-awesome/fontawesome.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/vendor/slick.min.css">
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/vendor/bootstrap.min.css">

        <!-- CUSTOM -->
        @yield("headLinks")
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
