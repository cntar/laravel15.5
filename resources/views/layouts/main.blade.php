<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <title>Asili</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/asili.css">
{{--     <link rel="stylesheet" href="css/style.css"> --}}
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>



     <div class="content-container">
          @yield('content')      
    </div>




       <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span>Copyright &copy; 2018 <a href="#">www.asiliyetu.com</a> <br>
                         Designed by: <p>Cntar</p></span>
                
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.bottom-footer -->
    </footer> <!-- /.site-footer -->

    
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"></script></script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- Core JavaScript Files -->
   
    <script src="js/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/JavaScript">
        //Your publishable API key identifies your website to Stripe during communications. Set your publishable key with setPublishableKey, after including Stripe.js and before making any requests to Stripe
        var stripe = Stripe('pk_test_qvnccg0FI0ztemzi2ZEduJGB');
        var elements = stripe.elements();

    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!--this script bellow its surely collect the credit card information-->
    <script src="https://js.stripe.com/v3/"></script>

</body>
</html>




















