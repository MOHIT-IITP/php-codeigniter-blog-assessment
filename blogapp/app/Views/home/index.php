<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-5 fw-bold mb-3">Latest Blog Posts</h1>
            <p class="lead text-muted">Discover our most recent articles and insights</p>
        </div>
    </div>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <?= session('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row g-4">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary">
                                <i class="bi bi-person-circle me-1"></i><?= esc($post['author']) ?>
                            </span>
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>
                                <?= date('F j, Y', strtotime($post['created_at'])) ?>
                            </small>
                        </div>
                        <h2 class="card-title h5 fw-bold mb-3"><?= esc($post['title']) ?></h2>
                        <p class="card-text text-muted mb-4">
                            <?= esc(substr($post['content'], 0, 100)) ?>...
                        </p>
                        <a href="<?= base_url('post/' . $post['id']) ?>" 
                           class="btn btn-primary w-100">
                            <i class="bi bi-arrow-right me-2"></i>Read More
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?> 