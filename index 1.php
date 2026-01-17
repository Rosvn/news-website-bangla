<?php
require 'db.php';

// Get Latest Article (Hero)
$stmt = $pdo->query("SELECT * FROM articles ORDER BY publish_date DESC LIMIT 1");
$hero = $stmt->fetch();

// Get next 3 articles for Sidebar
$stmt = $pdo->query("SELECT * FROM articles ORDER BY publish_date DESC LIMIT 1, 3");
$side_items = $stmt->fetchAll();

// Get the rest for the Grid
$stmt = $pdo->query("SELECT * FROM articles ORDER BY publish_date DESC LIMIT 4, 10");
$grid_items = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>নিউজ ময়মনসিংহ - ব্রেকিং নিউজ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="header-container"><a href="index.php" class="logo">NEWS <span>MYMENSINGH</span></a></div></header>
<nav><ul><li><a href="index.php">মূলপাতা</a></li><li><a href="#">রাজনীতি</a></li><li><a href="#">ময়মনসিংহ</a></li><li><a href="#">খেলা</a></li></ul></nav>

<div class="main-wrapper">
    <section class="hero-article">
        <a href="article.php?id=<?= $hero['id'] ?>"><img src="<?= $hero['image_url'] ?>"></a>
        <h1><a href="article.php?id=<?= $hero['id'] ?>"><?= $hero['title'] ?></a></h1>
        <p><?= mb_substr($hero['content'], 0, 160, "UTF-8") ?>...</p>
    </section>

    <section class="side-stories">
        <?php foreach($side_items as $item): ?>
        <a href="article.php?id=<?= $item['id'] ?>" class="mini-card">
            <img src="<?= $item['image_url'] ?>">
            <div><h3><?= $item['title'] ?></h3><small><?= $item['publish_date'] ?></small></div>
        </a>
        <?php endforeach; ?>
    </section>
</div>
<footer><p>&copy; ২০২৪ নিউজ ময়মনসিংহ</p></footer>
</body>
</html>