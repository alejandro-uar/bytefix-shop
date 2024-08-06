@php
  $value = true;    
@endphp

<nav class="navbar navbar-expand-lg" style="background:#6610f2;">
    <div class="container-fluid">      
      <a class="navbar-brand badge text-bg-dark p-2 " href="{{route('index')}}" style="font-size:1.2em">ByteFix product list</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @auth    
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('category')}}">+New category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('product')}}">+New Product</a>
            </li>
            <li class="nav-item">
              <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-light ">Logout</button>
              </form>
            </li>
          </ul>
        </div>
      @endauth
    </div>
</nav>