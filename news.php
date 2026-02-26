<?php
require_once "asetukset.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if (!$id) {
    echo "Virheellinen uutinen";
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM news WHERE id = ?");
$stmt->execute([$id]);
$news = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$news) {
    echo "Uutista ei löytynyt";
    exit;
}
?>

<h1><?= htmlspecialchars($news["title"]) ?></h1>
<p><?= nl2br(htmlspecialchars($news["content"])) ?></p>

<a href="index.php">← Takaisin</a>
