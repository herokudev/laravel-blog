<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    @auth
        <p>Congrats you are logged in.</p>
        <form action="/logout" method="post">
            @csrf
            <button>Log out</button>
        </form>
        <p></p>
        <div style="border: 3px solid black;">
        <h2>Create a new post</h2>
            <form action="/create-post" method="post">
                @csrf
                <input type="text" name="title" placeholder="enter post title">
                <textarea name="body" placeholder="enter post body"></textarea>
                <button>Save Post</button>
            </form>        
        </div>
        <p></p>
        <div style="border: 3px solid black;">
            <h2>All posts</h2>
            @foreach ($posts as $post)
                <div style="background-color: gray; padding: 10px; margin: 10px;">
                    <h3>{{$post['title']}}</h3>
                    {{$post['body']}}
                </div>
            @endforeach
        </div>
    @else
        <div style="border: 3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="post">
                @csrf
                <input type="text" name="name" placeholder="name">
                <input type="text" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
                <button>Register</button>
            </form>
        </div>
        <p></p>
        <div style="border: 3px solid black;">
            <h2>Login</h2>
            <form action="/login" method="post">
                @csrf
                <input type="text" name="loginname" placeholder="name">
                <input type="password" name="loginpassword" placeholder="password">
                <button>Register</button>
            </form>
        </div>        
    @endauth

</body>
</html>