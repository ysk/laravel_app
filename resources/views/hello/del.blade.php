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
<h1>削除ページ</h1>
<form action="/hello/del" method="post">
@csrf
<input type="hidden" name="id" value="{{$form->id}}">
<table>
<tr>
  <th>name</th>
  <th>mail</th>
  <th>age</th>
</tr>

<tr>
  <td>{{$form->name}}</td>
  <td>{{$form->mail}}</td>
  <td>{{$form->age}}</td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" value="削除する"></td>
</tr>
</table>
</form>


<p><a href="{{route('hello.index')}}">TOPへ戻る</a></p>
</body>
</html>
