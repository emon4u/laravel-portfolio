<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Emon Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="@yield('body_class')">

@include('layouts.header')

@yield('page_title')

@yield('content')

</body>

</html>
