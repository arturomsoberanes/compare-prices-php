<?php require_once('partials/head.view.php') ?>
<div class="login container my-3 justify-content-center align-items-center flex-column">
  <form class="p-2" action="/login" method="post">
    <h1 class="my-2">Iniciar Sesión</h1>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
</div>
<?php require_once('partials/footer.view.php') ?>