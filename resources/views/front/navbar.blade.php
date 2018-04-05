<div class=container" id="back">
  <div class="row">
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
  <a class="navbar-brand col-sm-offset-1" href="{{('screen')}}"><h3>ASILI Yetu</h3></a>

  <div class="collapse navbar-collapse " id="navgat">
    <ul class="navbar-nav navbar-right ">
       <li class="nav-item ">
        <a class="col-sm-3" href={{"dashboard"}}><b>Dashboard</b></a>
      </li>
                       
       <li class="nav-item ">
        <a class="col-sm-3" href="#">Products</a>
      </li>



      <li class="nav-item ">
        <a class="col-sm-3" href="#">Contacts</a>
      </li>
      <li class="nav-item">
       <a class="col-sm-1" href="{{route('cart.index')}}"><i class="fa fa-shopping-cart fa-2x" aria-hidden = "true"></i>
       Carts<span class="badge"> {{Cart::count()}}</span>
    

       </a>
      </li>
    </ul>

  



  </div>
</nav>
  </div>
</div>

