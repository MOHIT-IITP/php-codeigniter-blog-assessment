<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div>
                <h1 class="display-5 fw-bold mb-2">Blog Posts</h1>
                <p class="lead text-muted">Manage your blog posts</p>
            </div>
            <a href="<?= base_url('admin/blog-posts/create') ?>" class="btn btn-primary">
                <i class="bi bi-plus-lg me-2"></i>Create New Post
            </a>
        </div>
    </div>

    <?php if (session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <?= session('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Created</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post): ?>
                            <tr>
                                <td>
                                    <h6 class="mb-0"><?= esc($post['title']) ?></h6>
                                </td>
                                <td>
                                    <span class="badge bg-primary bg-opacity-10 text-primary">
                                        <i class="bi bi-person-circle me-1"></i><?= esc($post['author']) ?>
                                    </span>
                                </td>
                                <td>
                                    <small class="text-muted">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        <?= date('F j, Y', strtotime($post['created_at'])) ?>
                                    </small>
                                </td>
                                <td class="text-end">
                                    <a href="<?= base_url('admin/blog-posts/edit/' . $post['id']) ?>" 
                                       class="btn btn-sm btn-outline-primary me-2">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="<?= base_url('admin/blog-posts/delete/' . $post['id']) ?>" 
                                          method="post" 
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 