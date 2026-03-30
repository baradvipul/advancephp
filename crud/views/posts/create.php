<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header-actions">
        <h1>Create New Post</h1>
        <a href="?action=list" class="btn btn-secondary">
            &larr; Back to Feed
        </a>
    </div>

    <form method="POST" action="?action=create" class="post-form">
        <div class="form-group">
            <label class="form-label" for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Enter post title..." required />
        </div>
        
        <div class="form-group">
            <label class="form-label" for="content">Write your thoughts</label>
            <textarea id="content" name="content" class="form-control" placeholder="What's on your mind?..." required></textarea>
        </div>
        
        <div style="display: flex; gap: 1rem; margin-top: 2rem;">
            <button type="submit" class="btn btn-primary">Publish Post</button>
            <a href="?action=list" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

</body>
</html>
