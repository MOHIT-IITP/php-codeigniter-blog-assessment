<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h1 class="mb-4">Latest Blog Posts</h1>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title h4"><?= esc($post['title']) ?></h2>
                        <p class="card-text">
                            <?= esc(substr($post['content'], 0, 100)) ?>...
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                By <?= esc($post['author']) ?> | 
                                <?= date('F j, Y', strtotime($post['created_at'])) ?>
                            </small>
                            <a href="<?= base_url('post/' . $post['id']) ?>" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?> 