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

    <link rel="stylesheet" href="css/style1.css">
   {{--  <link rel="stylesheet" href="css/asili.css"> --}}
</head>

<body>

     <div class="content-container">
     @include('front.navbar')
          @yield('content')
     @include('front.footer')

     
   </div>
  
    <!-- Core JavaScript Files -->
   
    <script src="js/jquery.min.js"></script>
<!--this script bellow its surely collect the credit card information-->
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/JavaScript">
        //Your publishable API key identifies your website to Stripe during communications. Set your publishable key with setPublishableKey, after including Stripe.js and before making any requests to Stripe
        var stripe = Stripe('pk_test_qvnccg0FI0ztemzi2ZEduJGB');
        var elements = stripe.elements();

    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
