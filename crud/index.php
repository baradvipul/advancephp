<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/models/Post.php';
require_once __DIR__ . '/controllers/PostController.php';

$controller = new PostController($GLOBALS['pdo']);
$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'create': $controller->create(); break;
    case 'edit': $controller->edit($_GET['id'] ?? 0); break;
    case 'delete': $controller->delete($_GET['id'] ?? 0); break;
    default: $controller->index();
}
?>