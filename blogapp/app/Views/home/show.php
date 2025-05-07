<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <a href="<?= base_url('/') ?>" class="btn btn-secondary mb-4">&larr; Back to Posts</a>

            <article class="blog-post">
                <h1 class="mb-3"><?= esc($post['title']) ?></h1>
                
                <div class="mb-4 text-muted">
                    <small>
                        By <?= esc($post['author']) ?> | 
                        Published on <?= date('F j, Y', strtotime($post['created_at'])) ?>
                    </small>
                </div>

                <div class="blog-content">
                    <?= nl2br(esc($post['content'])) ?>
                </div>
            </article>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 