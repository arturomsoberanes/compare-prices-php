<?php require_once('partials/head.view.php') ?>

<div class="container-fluid d-flex flex-column align-items-center mt-3">
  <h1>Web Scraper</h1>

  <?php require_once('partials/search-input.view.php') ?>

  <div class="row w-50">
    <div class="col-6">
      <h2>Mis busquedas</h2>
      <div class="mt-4 d-flex justify-content-between">
        <ul class="list-group w-100 list-group-flush">
          <?php foreach ($searches as $search) : ?>
            <li class="list-group-item list-group-item-warning">
              <a class="nav-link" href="search?keywords=<?= $search->keywords ?>">
                <?= $search->keywords ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</div>


<?php require_once('partials/footer.view.php') ?>