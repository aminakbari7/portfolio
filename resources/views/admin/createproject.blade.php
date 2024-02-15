<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="../styles/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css')}}">
</head>

<body>
@include('layouts.navigation')
@livewire('createp')

  <script src="{{asset('assets/js/jquery-2.min.js')}}"></script>

  <!-- Bootstrap -->
  <script src="{{ asset('assets/js/popper.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Plugins -->
  <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{ asset('assets/js/accordions.js')}}"></script>
  <script src="{{ asset('assets/js/datepicker.js')}}"></script>
  <script src="{{ asset('assets/js/scrollreveal.min.js')}}"></script>
  <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('assets/js/imgfix.min.js')}}"></script> 
  <script src="{{ asset('assets/js/slick.js')}}"></script> 
  <script src="{{ asset('assets/js/lightbox.js')}}"></script> 
  <script src="{{ asset('assets/js/isotope.js')}}"></script> 
  
  <!-- Global Init -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>
  <script>
  
      $(function() {
          var selectedClass = "";
          $("p").click(function(){
          selectedClass = $(this).attr("data-rel");
          $("#portfolio").fadeTo(50, 0.1);
              $("#portfolio div").not("."+selectedClass).fadeOut();
          setTimeout(function() {
            $("."+selectedClass).fadeIn();
            $("#portfolio").fadeTo(50, 1);
          }, 500);
              
          });
      });
  
  </script>
<script type="text/javascript">

</script>
</body>
</html>