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
<h1>編集ページ</h1>
<form action="{{route('hello.update')}}" method="post">
@csrf
<input type="hidden" name="id" value="{{$form->id}}">
<table>
<tr>
  <th>name: </th>
  <td><input type="text" name="name" value="{{$form->name}}"></td>
</tr>
<tr>
  <th>mail: </th>
  <td><input type="text" name="mail" value="{{$form->mail}}"></td>
</tr>
<tr>
  <th>age: </th>
  <td><input type="text" name="age" value="{{$form->age}}"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="編集する"></td>
</tr>
</table>

</form>

<p><a href="{{route('hello.index')}}">TOPへ戻る</a></p>

</body>
</html>
