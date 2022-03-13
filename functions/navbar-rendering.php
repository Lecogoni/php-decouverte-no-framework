<?php include_once("./functions/generics.php") ?>

<?php 

  function displayNavbarItemsDesktop($file){

    ?>
      <?php if (!(empty($_GET["page"])) and (strtolower($_GET["page"]) == removePHPExtension($file))) : ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./?page=<?= removePHPExtension($file) ?>"><?= removePHPExtension($file) ?></a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./?page=<?= removePHPExtension($file) ?>"><?= removePHPExtension($file) ?></a>
        </li>
      <?php endif;?>
    <?php

  }

?>