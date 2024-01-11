<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Crud App</title>
</head>
<body>
    <div class="container">
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
    </div>
</body>
</html>
