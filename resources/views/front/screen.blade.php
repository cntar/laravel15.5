@extends('layouts.main')

@section('content')



<header>
    
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class=" col-sm-6 col-md-5 ">
                        <div class="logo">
                             <img src="images/mikono.png" class="img-circle col-sm-3">

                          <div class="col-sm-offset-4">
                            <h1><a href="#">Asili yetu</a></h1>
                        </div>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
          
            
              
                   <div class="top-header-left col-md-2 col-sm-4 " id = "kipepeo" >

                            <a href="{{route('register')}}" class="btn">Sign Up</a>
                            <a href=" {{route('login')}}" class="btn  col-sm-offset-1">Log In</a>
                        </div> <!-- /.top-header-left -->
              
                    
            
            
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->

    </header>

        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="list-menu">
                            <ul>


         <li class="dropdown">
      <a class="nav-link dropdown-toggle" href="{{'decor'}}" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
       decorations <span class="caret"></span></a>

    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>



      </li>

                          {{--       <li><a href="index.html">Shop</a></li> --}}
                                <li><a href="product-detail.html">Details</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div> <!-- /.list-menu -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="notification">
              {{--<span>Free Shipping on any order above $50</span> --}}
    <a class="col-sm-9 col-sm-offset-4" href="{{route('cart.index')}}"><i class="fa fa-shopping-cart fa-2x " aria-hidden = "true"></i>
       CART
   
    <span class="badge col-sm-offset-1"> {{Cart::count()}}</span>
    </a>
                        </div>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
 
 




    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3" id = "boda">
                    <div class="product-item-1">
                        <div class="product-thumb">
                            <img src="images/kikapu1.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content">
                            <h5><a href="#">Smart Vikapu</a></h5>
                            <span class="tagline"><b>Nature</b></span>
                            <span class="price">$15.00</span>
                            <p><b>Despite of endowing a lot of potentials, but we have fantastics cultural bags mades by special robes. And its approximated to lust almost 10years without get any kinds of demages</b></p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-5">
                    <div class="product-holder">
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/black.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Vinyago packages</a></h5>
                                <span class="tagline"><b>masaai culture</b></span>
                                <span class="price">$70.00</span>
                                <p>Carving is an art that are always perfoming by africans artisans in handicraft industries, and the output of this arts is vinyago(toys) made by wood materials and its represent masaai african culture in Tanzania,they can be in a single or more than one package </p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                       
                        <div class="clearfix"></div>
                    </div> <!-- /.product-holder -->
                </div> <!-- /.col-md-5 -->
                <div class="col-md-4">
                    <div class="product-item-3">
                        <div class="product-thumb">
                            <img src="images/bangili.jpg" alt="">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <h5><a href="#">Culture</a></h5>
                                    <span class="tagline"><b>Cultural decor</b></span>
                                    <span class="price">$6.00</span>
                                </div> <!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="full-row">
                                        
                                    </div>
                                    <div class="full-row">
                                        
                                    </div>
                                    <div class="full-row">
                                        <label for="cat2"><b>Color:<b></label>
                                        <select name="cat2" id="cat2" class="postform">
                                            <option value="-1">- Select -</option>
                                            <option class="level-0" value="2">Blue</option>
                                            <option class="level-0" value="3">Red</option>
                                            <option class="level-0" value="1">Brown</option>
                                            <option class="level-0" value="4">Black</option>
                                            <option class="level-0" value="4">Green</option>
                                        </select>
                                    </div>
                                </div> <!-- /.col-md-6 -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="button-holder" style="border-radius: 20px;">
                                        <a href="#"><i class="fa fa-angle-down"></i></a>
                                    </div> <!-- /.button-holder -->
                                </div> <!-- /.col-md-12 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-3 -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item-4">
                        <div class="product-thumb">
                            <img src="images/shanga21.jpg" alt="Product Title" style="height:235px">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">Shanga & bracelets</a></h5>
                            <span class="tagline"><b>Cultural accesories</b></span>
                            <span class="price">$20.00</span>
                            <p>Cultural accessories made by special materials and decor by mixer of colorful</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-4 -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item-4">
                        <div class="product-thumb">
                            <img src="images/tinga3.jpg" alt="Product Title">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay">
                            <h5><a href="#">TINGATINGA</a></h5>
                            <span class="tagline">Inspired pictures</span>
                            <span class="price">$30.00</span>
                            <p>TingaTinga pictures are attractive at homes and venue decorations</p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-4 -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="product-item-4">
                    <div class="product-thumb">
                        <img src="images/vijiko.jpg" alt="">
                    </div> 
                   <div class="product-content overlay">
                            <h5><a href="#">WOOD SPOON</a></h5>
                            <span class="tagline">Made by wood</span>
                            <span class="price">$10.00</span>
                            <p>Utensils made and designed by wood materials</p>
                            </div>
                           </div>
                        </div> <!-- /.ads-placement -->
                </div> <!-- /.col-md-4 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->

   @endsection

