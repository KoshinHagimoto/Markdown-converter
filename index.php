<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php"); 
spl_autoload_register();

// composerの依存関係のオートロード
require_once 'vendor/autoload.php';
?>

<?php require 'vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markdown to HTML</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.min.js"></script>
</head>
<body>
<header>
    <h1>Markdown to HTML Converter</h1>
</header>

<div id="container">
    <div id="editor-container">
        <h2>Markdown Editor</h2>
    </div>
    <div id="displayArea">
        <div id="displayAreaHeader">
            <button id="previewBtn"><i class="fas fa-eye"></i>Preview</button>
            <button id="htmlBtn"><i class="fas fa-code"></i>HTML</button>
            <button id="downloadBtn"><i class="fas fa-download"></i>Download</button>
        </div>
        <div id="contentArea">
            <h2>Output</h2>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
