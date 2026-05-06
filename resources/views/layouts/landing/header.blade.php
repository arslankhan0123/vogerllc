<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('welcome')}}" class="logo d-flex align-items-center">
      <!-- <h1 class="sitename">Voger LLC</h1> -->
      <img src="{{ asset('voger_logo.png') }}" height="65" alt="Voger LLC">
    </a>

    <!-- Centered Nav -->
    <nav id="navmenu" class="navmenu mx-auto">
      <ul class="justify-content-center mb-0">
        <li><a href="{{route('welcome')}}#hero" class="active">Home</a></li>
        <li><a href="{{route('welcome')}}#about">About</a></li>
        <li><a href="{{route('welcome')}}#services">Services</a></li>
        <li><a href="{{route('welcome')}}#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Right Side Button -->
    <a class="btn-getstarted" href="tel:+18335367944">(833) 536-7944</a>

  </div>
</header>
