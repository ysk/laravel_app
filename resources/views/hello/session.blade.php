<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>

<style>
th{
  background-color:#999;
  color: #fff;
  padding: 5px 10px;
}
td{
  border: solid 1px #aaa;
  color: #999;
  padding: 5px 10px;
}
</style>
</head>
<body>

<h1>sessionページ</h1>

<p>{{ $session_data }}</p>
<form action="/hello/session" method="post">
@csrf

<p><input type="text" name="input"></p>
<p><input type="submit" value="send"></p>
</form>

</body>
</html>
