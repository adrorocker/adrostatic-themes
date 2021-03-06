<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"><?=$this->e($brand)?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php foreach ($items as $key => $item) : ?>
            <a class="nav-item nav-link" href="<?= $item->getLink() ?>"><?= $item->getName() ?></a>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>