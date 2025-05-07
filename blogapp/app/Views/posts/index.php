<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <h1 class="mb-4">Blog Posts</h1>
        <a href="/posts/create" class="btn btn-primary mb-4">Create New Post</a>

        <?php if (empty($posts)): ?>
            <div class="alert alert-info">No posts found.</div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($post['title']) ?></h5>
                                <p class="card-text"><?= substr(esc($post['content']), 0, 150) ?>...</p>
                                <div class="d-flex justify-content-between">
                                    <a href="/posts/edit/<?= $post['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="/posts/delete/<?= $post['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?> 