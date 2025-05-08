<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="display-5 fw-bold mb-2">Create New Post</h1>
            <p class="lead text-muted">Add a new blog post to your collection</p>
        </div>
    </div>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <?= session('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('admin/blog-posts/store') ?>" method="post">
                <div class="mb-4">
                    <label for="title" class="form-label fw-medium">Title</label>
                    <input type="text" 
                           class="form-control form-control-lg" 
                           id="title" 
                           name="title" 
                           value="<?= old('title') ?>" 
                           required>
                </div>

                <div class="mb-4">
                    <label for="content" class="form-label fw-medium">Content</label>
                    <textarea class="form-control" 
                              id="content" 
                              name="content" 
                              rows="10" 
                              required><?= old('content') ?></textarea>
                </div>

                <div class="mb-4">
                    <label for="author" class="form-label fw-medium">Author</label>
                    <input type="text" 
                           class="form-control" 
                           id="author" 
                           name="author" 
                           value="<?= old('author') ?>" 
                           required>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-2"></i>Save Post
                    </button>
                    <a href="<?= base_url('admin/blog-posts') ?>" class="btn btn-outline-secondary">
                        <i class="bi bi-x-lg me-2"></i>Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 