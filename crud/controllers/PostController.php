<?php
// NO SPACE OR CHARS BEFORE THIS LINE!
require_once __DIR__ . '/../models/Post.php';

class PostController {
    private $post;

    public function __construct($pdo) {
        $this->post = new Post($pdo);
    }

    public function index() {
        $posts = $this->post->readAll();
        require __DIR__ . '/../views/posts/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->post->create($_POST['title'], $_POST['content'])) {
                header('Location: index.php?action=list');
                exit;
            }
        }
        require __DIR__ . '/../views/posts/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->post->update($id, $_POST['title'], $_POST['content']);
            header('Location: index.php?action=list');
            exit;
        }
        $post = $this->post->readOne($id);
        require __DIR__ . '/../views/posts/edit.php';
    }

    public function delete($id) {
        $this->post->delete($id);
        header('Location: index.php?action=list');
        exit;
    }
}