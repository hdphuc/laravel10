<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 bg-warning" id="mainNav">
  <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="{{ route('web.homepage') }}">
          <img src="{{ asset('assets/web/img/logo.png') }}" width="150" alt="smartptecht.top">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
              <li class="nav-item"><a class="nav-link" href="{{ route('web.pages.show', 'about') }}">About</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('web.pages.show', 'services') }}">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('web.pages.show', 'portfoio') }}">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('web.pages.show', 'contact') }}">Contact</a></li>
          </ul>
      </div>
  </div>
</nav>