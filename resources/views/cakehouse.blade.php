<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Cake House  </h1>
    <h2>Customised Home Made Cakes</h2>
    <h2>cupcakes popsticks and popsicles</h2>
    <h2>dun</h2>
    @yield('content')
    <a href="{{ route ( 'add') }}">address</a><br><br>
    <a href="{{ route ( 'hi' ) }}">click</a><br><br>
    <a href="{{ route ( 'flav' ) }}">flavours</a>
    <img src="{{asset('images/flower.jpg')}}" alt="">
    
</body>
</html>
