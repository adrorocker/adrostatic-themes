<!-- Categories Widget -->
<div class="card-body">
    <div class="row">
        <div class="col-lg-12">
          <ul class="list-unstyled mb-0">
            <?php foreach ($categories as $category) : ?>
                <li>
                    <a href="/blog/<?= $category ?>/"><?= \Illuminate\Support\Str::title($category) ?></a>
                </li>
            <?php endforeach; ?>
          </ul>
        </div>
    </div>
</div>
