<?php $this->layout('layout/blog', ['title' => $title]) ?>
<div class="row row-offcanvas row-offcanvas-right">
    <div class="col-xs-12 col-sm-9">
        <?= $content; ?>
    </div>

    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <?= $categories ?>
        </div>
    </div><!--/.sidebar-offcanvas-->
</div><!--/row-->