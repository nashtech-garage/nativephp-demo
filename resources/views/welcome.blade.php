<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NativePHP Demo</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 100px; }
        button { padding: 10px 20px; font-size: 16px; }
    </style>
</head>
<body>
    <h1>NativePHP Demo App</h1>
    <p>Click to button to receive the message</p>
    <button onclick="sendNotify()">Send Notify</button>

    <script>
        function sendNotify() {
            fetch('/notify')
                .then(res => res.text())
                .then(alert);
        }
    </script>
</body>
</html>
