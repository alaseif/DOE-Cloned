<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> @yield('title')</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="{{URL :: secure('Boot-CSS\css\bootstrap.css')}}">
    @yield('styles')
  </link>
</head>

<body>
  <script src="js/scripts.js"></script>
  <div class ="main">
      @yield('content')
      
  </div>
</body>
</html>