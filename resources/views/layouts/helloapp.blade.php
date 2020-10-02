<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
</head>
<body>

<p>{{$msg}}</p>
<p>{{ $view_message }}</p>

<form method="POST" action="{{ route('hello.post') }}">
@csrf

<div>
<input type="text" name="msg">
<input type="submit">
</div>

</form>

</body>
</html>
