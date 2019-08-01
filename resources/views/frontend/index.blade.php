<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Brown Paper Bag')">
        <meta name="author" content="@yield('meta_author', 'Nathan Antwi')">
        @yield('meta')

    <style>
    
   body { 
  background: url(img/frontend/placeholders/bagtwoloadingscreen.gif) no-repeat  50% 50% fixed; 
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
} 



    
    </style>
</head>
<body>

</body>
</html>