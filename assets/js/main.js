//Monacoエディタの読み込み
require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs' }});
let editor;
require(['vs/editor/editor.main'], function() {
    editor = monaco.editor.create(document.getElementById('editor-container'), {
        value: '',
        language: 'markdown'
    });
});

 // ボタンクリック時の処理
document.getElementById("previewBtn").addEventListener("click", function() {
    handleConversion("display");
});

document.getElementById("htmlBtn").addEventListener("click", function() {
    handleConversion("html");
});

document.getElementById("downloadBtn").addEventListener("click", function() {
    handleConversion("download");
});

function handleConversion(outputType) {
    let markdownContent = editor.getValue();
    fetch("../../Convert/ConvertHTML.php", {
        method: "POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'markdownContent': markdownContent,
            'outputType': outputType
        })
    })
    .then(response => {
        if (outputType === 'download') {
            return response.blob();
        }
        return response.text();
    })
    .then(data => {
        if (outputType === 'download') {
            // ここでのデータはblob形式
            const a = document.createElement('a');
            const url = URL.createObjectURL(data);
            a.href = url;
            a.download = 'converted.html';
            a.click();
            URL.revokeObjectURL(url);
        } else if (outputType === 'html') {
            const contentArea = document.getElementById('contentArea');
            contentArea.textContent = data; // HTMLエスケープして表示
        } else {
            const contentArea = document.getElementById('contentArea');
            contentArea.innerHTML = data;
            // ここでhighlight.jsを使ってシンタックスハイライトを適用
            contentArea.querySelectorAll('pre code').forEach((block) => {
                hljs.highlightBlock(block);
            });
        }
    })
    .catch(error => {
        console.error(error);
    });
}