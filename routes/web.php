<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Native\Laravel\Facades\Notification;

Route::get('/', function () {
    return redirect('/todos');
});

Route::get('/todos', function () {
    $todos = json_decode(File::get(storage_path('todos.json')), true) ?? [];
    return view('todos', ['todos' => $todos]);
});

Route::post('/todos', function (Request $request) {
    $todo = $request->input('todo');
    $filePath = storage_path('todos.json');

    $todos = File::exists($filePath)
        ? json_decode(File::get($filePath), true)
        : [];

    $todos[] = ['task' => $todo, 'done' => false];

    File::put($filePath, json_encode($todos, JSON_PRETTY_PRINT));

    Notification::title('Đã thêm công việc')
        ->message($todo)
        ->show();

    return redirect('/todos');
});
