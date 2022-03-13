<?php include_once("./functions/navbar-rendering.php") ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php foreach (getContentFolderFiles() as $file) : ?>
          <?php displayNavbarItemsDesktop($file); ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>