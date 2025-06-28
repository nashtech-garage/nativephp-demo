<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-do App - NativePHP</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        input { padding: 5px; font-size: 16px; }
        button { padding: 5px 10px; }
        li { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>✅ To-do App (NativePHP)</h1>

    <form method="POST" action="/todos">
        @csrf
        <input type="text" name="todo" placeholder="Type the task..." required>
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $item)
            <li>📌 {{ $item['task'] }}</li>
        @endforeach
    </ul>
</body>
</html>
