<?php
require 'db.php';
$id = $_GET['id'] ?? 0;

$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title><?= $post ? $post['title'] : 'Error' ?> - নিউজ ময়মনসিংহ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="header-container"><a href="index.php" class="logo">NEWS <span>MYMENSINGH</span></a></div></header>
<div class="single-post-container">
    <?php if($post): ?>
        <h1><?= $post['title'] ?></h1>
        <div class="meta-info">তারিখ: <?= $post['publish_date'] ?> | লেখক: <?= $post['author'] ?></div>
        <img src="<?= $post['image_url'] ?>" style="width:100%">
        <div class="content-area"><p><?= nl2br($post['content']) ?></p></div>
    <?php else: ?>
        <h1>নিবন্ধটি পাওয়া যায়নি</h1>
    <?php endif; ?>
    <br><a href="index.php" style="color:#F47932">← হোমে ফিরে যান</a>
</div>
</body>
</html>