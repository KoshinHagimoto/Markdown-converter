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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.min.js"></script>
</head>
<body>

<div id="editor-container" style="width:800px;height:600px;border:1px solid grey"></div>

<select name="output_type" id="outputType">
    <option value="display">Display</option>
    <option value="download">Download</option>
</select>

<button id="convertBtn">Convert</button>

<script src="assets/js/main.js"></script>

</body>
</html>
