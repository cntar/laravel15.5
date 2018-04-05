@extends('layouts.main')

@section('content')

<div class=container" id="back">
  <div class="row">
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
  <a class="navbar-brand col-sm-offset-1" href="{{('screen')}}">{{-- <i class="glyphicon glyphicon-home"></i> --}}<h3>ASILI Decor</h3></a>

  <div class="collapse navbar-collapse " id="navgat">
    <ul class="navbar-nav navbar-right col-sm-offset-3">
       <li class="nav-item ">
        <a class="col-sm-3" href={{"login"}}><b>Dashboard</b></a>
      </li>
                       
       <li class="nav-item ">
        <a class="col-sm-3" href="#">DECOR</a>
      </li>



      <li class="nav-item ">
        <a class="col-sm-3" href="#">CONTACT</a>
      </li> 
      <li class="nav-item" id="shop">
       <a class="col-sm-9 col-sm-offset-6" href="{{route('cart.index')}}"><i class="fa fa-shopping-cart fa-2x " aria-hidden = "true"></i>
       CART
       <span class="badge col-sm-offset-8"> {{Cart::count()}}</span>
       </a>

      </li>
    </ul>

  



  </div>
</nav>
     <div class="container" id="decor">
      <h1>hellow! Welcome to ASILI Store</h1>
      <a href="{{'decor'}}" class="btn btn-lg btn-info">Check out my Decor</a>
     </div>
  </div>
</div>


      <footer class="footer">
    <p><b>www.Asiliyetu.com&copy2017</b></p>
          <p><i>Created by Cntar</i></p>
    </footer>

      @endsection