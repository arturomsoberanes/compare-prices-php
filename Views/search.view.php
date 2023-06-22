<?php require_once('partials/head.view.php') ?>

<div class="container d-flex flex-column align-items-center mt-3">
  <h1>Web Scraper</h1>

  <?php require_once('partials/search-input.view.php') ?>

  <?php if (Core\Auth::check()) : ?>
    <?php require_once('partials/save-search.view.php') ?>
  <?php endif ?>

  <div class="row">
    <div class="col-6">
      <h2>Amazon</h2>
      <div class="mt-4 d-flex flex-column align-content-between">
        <?php foreach ($amazonResults as $result) : ?>
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center p-3">
                <img src="<?= $result['image'] ?>" class="img-fluid rounded-start" alt="Producto">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $result['title'] ?></h5>
                  <p class="card-text">MXN <?= $result['price'] ?></p>
                  <a class="btn btn-primary" href="https://amazon.com<?= $result['url'] ?>" target="_blank">Ver en tienda</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <div class="col-6">
      <h2>Ebay</h2>
      <div class="mt-4 d-flex flex-column align-content-between">
        <?php foreach ($ebayResults as $result) : ?>
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 d-flex align-items-center p-3">
                <img src="<?= $result['image'] ?>" class="img-fluid rounded-start" alt="Producto">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $result['title'] ?></h5>
                  <p class="card-text">MXN <?= $result['price'] ?></p>
                  <a class="btn btn-primary" href="<?= $result['url'] ?>" target="_blank">Ver en tienda</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>


<?php require_once('partials/footer.view.php') ?>