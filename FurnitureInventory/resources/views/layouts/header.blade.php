<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/products">Home</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              
                <li class="nav-item">
                <a href="/login" class="btn btn-outline-success my-2 my-sm-0">Login</a>
                </li>
                <li class="nav-item">
                <a href="/register" class="btn btn-outline-secondary my-2 my-sm-0" style="margin-left: 20px;">Register</a>
                </li>

            </ul>
          <div class="btn btn-outline-secondary">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="GET" >
                  @csrf
              </form>
              </div>
         
            
        </div>
    </div>
</nav>
