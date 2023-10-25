# Markdown-converter
Markdown Converterは、Markdown形式のテキストを綺麗なHTML形式に変換できるWebアプリケーション. 更に、変換されたHTMLを簡単にダウンロード可能.<br>
<img width="863" alt="スクリーンショット 2023-09-13 11 48 46" src="https://github.com/KoshinHagimoto/Markdown-converter/assets/127278864/4add585b-80c4-45ba-8071-eefb8114e3e0">
## URL
https://markdown.hagitech.net/
## 機能
- Markdowm変換: Markdown形式で入力されたテキストをHTMLに即時変換
- HTMLプレビュー：変換後のHTMLをプレビュー表示
- HTML表示：HTMLで表示
- HTMLダウンロード：一つのボタンでHTMLをダウンロード
## 使用技術
- Frontend
  - HTML
  - CSS
  - JavaScript：変換を行うPHPファイルに入力内容をPOSTで送信
- Backend
  - PHP：Markdown形式のファイルを変換
- Hosting
  - AWS EC2
  - NGINX　：リバースプロキシとして利用し、クライアントからのPHPに関するリクエストをFastCGIプロトコルでPHP-FPMに転送
  - PHP-FPM：PHPコードを実行するアプリケーションサーバ

<img width="729" alt="スクリーンショット 2023-09-12 12 05 15" src="https://github.com/KoshinHagimoto/Markdown-converter/assets/127278864/0c6677d7-ecf8-4a7b-a2f8-e73612ad45ed">

