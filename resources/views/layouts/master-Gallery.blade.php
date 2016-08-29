<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title> @yield('title')</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />
  <link rel="stylesheet" type="text/css" href="resources/colorbox/1/colorbox.css" />
   <link rel="stylesheet" href="{{URL :: secure('Boot-CSS\css\bootstrap.css')}}">
  
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
  });
  
  </script>

</head>

<body>
  <script src="js/scripts.js"></script>
  <div class ="main">
      @yield('content')
      
  </div>
</body>
</html>