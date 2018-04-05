<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asili</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style2.css">
{{--    <link rel="stylesheet" href="css/style1.css"> --}}

</head>

<body>
     <div class="content-container">
        <div class="row">
        @include('front.navbar')
          @yield('content')
         @include('front.footer')
     </div>
   </div>
  
    <!-- Core JavaScript Files -->
   
    <script src="js/jquery.min.js"></script>
        <!--this script bellow its surely collect the credit card information-->
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
