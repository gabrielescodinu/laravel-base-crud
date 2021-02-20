<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
            }
            a {
                text-decoration: none;
                background: orange;
                border-radius: 5px;
                padding: 5px;
                color: white;
            }
            p a {
                text-decoration: none;
                background: green;
                border-radius: 5px;
                padding: 5px;
                color: white;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<body>

    <a href="{{route('posts.create')}}">Create a new post</a>
    <a href="/">Back Home</a>

    @foreach($posts as $post)
        <p>{{$post->title}}</p>
        <p>{{$post->body}}</p>
        <p> 
            <a href="{{route('posts.show', ['post'=> $post->id] )}}">View</a> 
            <a href="{{route('posts.edit', ['post'=> $post->id] )}}">Edit</a> 
            <form action="{{route('posts.destroy', ['post'=> $post->id] )}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </p>
        <hr>
    @endforeach
    
</body>
</html>