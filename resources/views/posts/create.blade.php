<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class='antialiased'>
        <h1>BlogName</h1>
        <form action="/posts" method="POST">
            @csrf
            <dev class='title'>
                <h2>Title</h2>
                <input type='text' name="post[title]" placeholder="タイトル">
            </dev>
            <dev class="body">
                <h2>body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れ様でした。"></textarea>
            </dev>
        　　<input type="submit" value="store">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>