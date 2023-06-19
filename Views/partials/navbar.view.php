<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/" class="nav-link">
            Home
          </a>
        </li>
        <?php if (Core\Auth::check()) : ?>
          <li class="nav-item">
            <span class="nav-link">
              <?= $_SESSION['name'] ?>
            </span>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              <button class="btn btn-danger">Salir</button>
            </form>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a href="/login" class="nav-link">
              Entrar
            </a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>