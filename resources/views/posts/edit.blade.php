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
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <dev class='title'>
                <h2>Title</h2>
                <input type='text' name="post[title]" placeholder="タイトル" value={{ $post->title }}>
                <p class='title_error' style="color:red">{{$errors->first('post.title')}}</p>
            </dev>
            <dev class="body">
                <h2>body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れ様でした。">{{ $post->body }}</textarea>
                <p class='body_error' style="color:red">{{$errors->first('post.body')}}</p>
            </dev>
        　　<input type="submit" value="update">
        </form>
        <div class="footer">
            <a href="/posts/{{$post->id}}">戻る</a>
        </div>
    </body>
</html>