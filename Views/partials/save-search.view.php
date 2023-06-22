<form action="search" method="POST" class="d-flex flex-column align-items-start my-4">
  <div class="row g-3">
    <div class="col-auto">
      <input type="hidden" class="form-control" name="keywords" value="<?= input('keywords') ?>">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-warning mb-3">Guardar Busqueda</button>
    </div>
  </div>
</form>
