<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{ route('home') }}">ANSELMI</a>
  <button class="navbar-toggler ninja-btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="bg-pseudo bg-app-inv"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-uppercase animated-button animated-h p-1 m-1 js-trigger b-app" data-target="#contact" data-mt-duration="1000" href="#contact">c o n t á c t a m e</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-uppercase animated-button animated-h p-1 m-1 js-trigger b-app" data-target="#contact" data-mt-duration="1000" href="#projects">p r o y e c t o s</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-uppercase animated-button animated-h p-1 m-1 js-trigger b-app" data-target="#contact" data-mt-duration="1000" href="#skill">c o n o c i m i e n t o s</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-uppercase animated-button animated-h p-1 m-1 js-trigger b-app" onclick="io(this);" href="#IO">I/O</a>
      </li>
    </ul>
  </div>
</nav>

<script>
  function io(e){
    // e.classList.toggle("bg-app");
    var element = document.getElementsByTagName("body")[0];
    element.classList.toggle("color");
  }
</script>