<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Blog Posts</h1>
        <a href="<?= base_url('admin/blog-posts/create') ?>" class="btn btn-primary">Add New Post</a>
    </div>

    <?php if (session()->has('message')): ?>
        <div class="alert alert-success">
            <?= session('message') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= esc($post['title']) ?></td>
                        <td><?= esc($post['author']) ?></td>
                        <td><?= date('Y-m-d H:i', strtotime($post['created_at'])) ?></td>
                        <td>
                            <a href="<?= base_url('admin/blog-posts/edit/' . $post['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?= base_url('admin/blog-posts/delete/' . $post['id']) ?>" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?> 