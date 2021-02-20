<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit post</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
    <a href="{{route('posts.index')}}">Back to posts</a>
    <a href="/">Back Home</a>

    <h1>Edit {{$post->title}}</h1>

    <form action="{{route('posts.update', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
        </div>

        <div class="form-group">
        <label for="body">Body</label>
        <input type="body" name="body" id="body" value="{{$post->body}}">
        </div>

        <button type="submit">Submit</button>    
    </form>

    <div>
    <a href="{{route('posts.index')}}">Back to posts</a>
    </div>
</body>
</html>