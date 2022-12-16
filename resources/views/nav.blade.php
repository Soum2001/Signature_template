<nav class="main-header navbar navbar-expand-md navbar-light navbar-navy">
    <div class="container">
        <a href="{{url('/')}}" class="navbar-brand">
            <i class="fas fa-envelope" style="color:white;font-size:30px;"></i>
            <span class="brand-text font-weight-light"><i><b style="color:white;font-size:30px;">mail signature</b></i></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            @if(Session::has('id'))
            <li class="nav-item dropdown">
                <a class="nav-link" href="../logout" id="logout" name="logout"><b style="color:white">Logout</b></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="../template" id="template" name="template"><b style="color:white">Template</b></a>
            
              
             
            </li>
            @endif
            @if(!(Session::has('id')))
            <li class="nav-item dropdown">
                <a class="nav-link" href="../login_page" id="login" name="login"><b style="color:white">Login</b></a>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link" href="registeration_page" id="registeration_page" name="registeration_page"><b style="color:white">Register</b></a>
            </li>
        </ul>
    </div>
</nav>