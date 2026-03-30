<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Feed</title>
    <!-- Google Fonts for Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header-actions">
        <h1>Recent Posts</h1>
        <a href="?action=create" class="btn btn-primary">
            + Create New Post
        </a>
    </div>

    <?php if (empty($posts)): ?>
        <div class="empty-state">
            <h3>No posts found</h3>
            <p>Ready to share your thoughts? Create your first blog post now.</p>
            <a href="?action=create" class="btn btn-primary">Write Post</a>
        </div>
    <?php else: ?>
        <div class="post-list">
            <?php foreach ($posts as $post): ?>
                <div class="post-card">
                    <h2 class="post-title"><?= htmlspecialchars($post['title']) ?></h2>
                    <div class="post-meta">
                        <span>🗓️ <?= date('F j, Y', strtotime($post['created_at'])) ?></span>
                    </div>
                    <div class="post-content">
                        <?= nl2br(htmlspecialchars($post['content'])) ?>
                    </div>
                    <div class="post-actions">
                        <a href="?action=edit&id=<?= $post['id'] ?>" class="btn btn-secondary btn-sm">Edit</a>
                        <a href="?action=delete&id=<?= $post['id'] ?>" 
                           class="btn btn-danger btn-sm" 
                           onclick="return confirm('Are you sure you want to delete this post?');">
                           Delete
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
