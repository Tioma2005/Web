<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет предложений и абзацев</title>
    <style>
        textarea { width: 100%; height: 200px; }
        button { margin-top: 14px; }
    </style>
</head>
<body>

<form method="post">
    <textarea name="text"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea><br>
    <button type="submit">Подсчитать</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["text"])) {
    $text = trim($_POST["text"]);

    $sentences = preg_split('/[.!?]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    $sentenceCount = count($sentences);

    $paragraphs = preg_split('/\n\s*\n/', $text, -1, PREG_SPLIT_NO_EMPTY);
    $paragraphCount = count($paragraphs);

    echo "<p>Количество предложений: <strong>$sentenceCount</strong></p>";
    echo "<p>Количество абзацев: <strong>$paragraphCount</strong></p>";
}
?>

</body>
</html>
