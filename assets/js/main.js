require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs' }});
let editor;
require(['vs/editor/editor.main'], function() {
    editor = monaco.editor.create(document.getElementById('editor-container'), {
        value: '',
        language: 'markdown'
    });
});

document.getElementById("convertBtn").addEventListener("click", function() {
    let markdownContent = editor.getValue(); // Monacoエディタからテキストを取得
    let outputType = document.getElementById("outputType").value;

    // サーバーにPOSTリクエストを送るロジックをここに追加
    // 応答に基づいて、HTMLを表示するか、ダウンロードを開始する
});
