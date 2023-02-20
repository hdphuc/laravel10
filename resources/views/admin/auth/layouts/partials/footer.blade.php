
<footer class="footer position-absolute bottom-2 py-2 w-100">
    <div class="container">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-12 col-md-6 my-auto">
          <div class="copyright text-center text-sm text-white text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart" aria-hidden="true"></i> by
            <a href="#" class="font-weight-bold text-white" target="_blank">Coppy</a>
            for a better web.
          </div>
        </div>
        <div class="col-12 col-md-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="{{ route('web.pages.show', 'about') }}" class="nav-link text-white">About Us</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('web.pages.show', 'about') }}" class="nav-link text-white">Blog</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('web.pages.show', 'about') }}" class="nav-link pe-0 text-white">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>