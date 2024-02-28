<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{asset('confirm')}}" method="post">
        @csrf
        <input type="text" name="user_otp" id="user_otp">
        <input type="hidden" name="old_otp" id="old_otp" value="{{$otp}}">
        <button type="submit">verify</button>
    </form>
</body>
</html>