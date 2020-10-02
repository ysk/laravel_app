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
<h1>作成ページ</h1>
<form action="{{route('hello.create')}}" method="post">
@csrf
<table>
<tr>
  <th>name: </th>
  <td><input type="text" name="name" value=""></td>
</tr>
<tr>
  <th>mail: </th>
  <td><input type="text" name="mail" value=""></td>
</tr>
<tr>
  <th>age: </th>
  <td><input type="text" name="age" value=""></td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="submit" value="追加する"></td>
</tr>
</table>



<p><a href="{{route('hello.index')}}">TOPへ戻る</a></p>

</form>


</body>
</html>
