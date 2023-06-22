<form action="search" method="GET" class="d-flex flex-column align-items-start my-4">
  <div class="row g-3">
    <div class="col-auto">
      <label for="keyword" class="visually-hidden">Search</label>
      <input type="text" class="form-control" name="keywords" value="<?= input('keywords') ?>" placeholder="Buscar...">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-warning mb-3">🔍</button>
    </div>
  </div>
  <div class="row g-3 ms-0">
    <select name="sort" class="form-select">
      <option <?= input('sort') == 'normal' ? 'selected' : ''?> value="normal">Normal</option>
      <option <?= input('sort') == 'asc' ? 'selected' : ''?> value="asc">Más barato primero</option>
      <option <?= input('sort') == 'desc' ? 'selected' : ''?> value="desc">Más caro primero</option>
    </select>
  </div>
</form>