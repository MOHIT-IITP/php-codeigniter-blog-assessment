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

            <!-- Comments Section -->
            <div class="comments-section mt-5">
                <h3>Comments</h3>

                <?php if (session()->has('message')): ?>
                    <div class="alert alert-success">
                        <?= session('message') ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->has('errors')): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php foreach (session('errors') as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Comment Form -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Leave a Comment</h4>
                        <form action="<?= base_url('post/comment') ?>" method="POST">
                            <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= old('name') ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3" required><?= old('comment') ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>
                    </div>
                </div>

                <!-- Display Comments -->
                <h4 class="mb-3">All Comments</h4>
                <?php if (empty($comments)): ?>
                    <p class="text-muted">No comments yet. Be the first to comment!</p>
                <?php else: ?>
                    <?php foreach ($comments as $comment): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title"><?= esc($comment['name']) ?></h5>
                                    <small class="text-muted">
                                        <?= date('F j, Y g:i a', strtotime($comment['created_at'])) ?>
                                    </small>
                                </div>
                                <p class="card-text"><?= nl2br(esc($comment['comment'])) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?> 