<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TajTameez') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    
    @vite([ 'resources/css/app.css','resources/admin/assets/css/bootstrap.min.css',
    'resources/admin/assets/css/all.min.css',
    'resources/admin/assets/css/style.css']
    )
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
    
 </head>

 