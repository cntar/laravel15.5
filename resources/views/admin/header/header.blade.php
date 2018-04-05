<header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Admin</b>panel</span>
    </a>
    <nav class="navbar navbar-static-top navbar-inverse">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">    
              <li class="dropdown">
               
                   <a href="#" class="dropdown-toggle" data-toggle = 'dropdown'><div class="btn btn-info">{{Auth::user()->name}}<span class="caret"></div></span></a>
                

                <ul class="dropdown-menu animated fadeInUp">
               
                  <li><a href="{{url('/screen')}}">HomeScreen</a></li>
                 <li> <a href="{{url('/logout')}}">Sign out</a></li>
               
                </ul>
              </li>
            </ul>
         
          
        
      </div>
    </nav>
  </header>