<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .container{
            display: flex;
            flex-direction: column;
            max-width: 900px;
            margin: 0 auto ;
            gap: 40px;
        }
        /* .registeration-area{
            display: flex;
            gap: 10px;
        } */
    </style>
    <title>Simple Crud App</title>
</head>
<body>
    <div class="container">
    @auth
    <div style="border: 3px solid rgb(179, 172, 213) ;padding:10px" class="registeration-area">
        <p>
            Congrats You are logged in.
        </p>
    <form action="{{url('logout')}}" method="post">
        @csrf
        <input type="submit" value="Logout">
    </form>
</div>

        {{-- create post form --}}
    <div style="border: 3px solid rgb(22, 1, 142) ;padding:10px" class="registeration-area">
        <h2>Create Post</h2>
        <form action="{{url('create-post')}}" method="post">
            @csrf
            <input type="text" name="post_title" class="title" placeholder="Post title">
            <textarea name="post_body" placeholder="Post content....." ></textarea>
            <input type="submit" value="Create Post" name="submit">
        </form>
    </div>

        {{-- view posts --}}
    <div style="border: 3px solid rgb(255, 7, 160) ;padding:10px" class="registeration-area">
        <h2>All User Posts</h2>
        @foreach ($posts as $post)
<div class="post" style="background-color: #decece; padding:10px; margin:10px;">
    <h3>{{$post['post_title']}}</h3>
    {{$post['post_body']}}
    <p><a href="{{url('edit-post')}}/{{$post->id}}">Edit</a></p>
    <form action="{{url('delete-post')}}/{{$post->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
</div>
        @endforeach
     </div>


     @else
 {{-- register form --}}
     <div style="border: 3px solid rgb(216, 195, 198) ;padding:10px" class="registeration-area">
        <h2>Register</h2>
        <form action="{{url('register')}}" method="post">
            @csrf
            <input type="text" name="name" class="name" placeholder="yourn name">
            <input type="email" name="email" class="email" placeholder="email">
            <input type="password" name="password" class="password" placeholder="password">
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
{{-- login form --}}
     <div style="border: 3px solid rgb(61, 234, 93) ;padding:10px" class="registeration-area">
        <h2>Login</h2>
        <form action="{{url('login')}}" method="post">
            @csrf
            <input type="text" name="loginname" class="name" placeholder="your name">
             <input type="password" name="loginpassword" class="password" placeholder="password">
            <input type="submit" value="Login" name="submit">
        </form>
    </div>
    @endauth
    </div>
</body>
</html>
