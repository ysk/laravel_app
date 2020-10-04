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
<h1>メッセージ作成ページ</h1>
<form action="{{route('board.create')}}" method="post">
@csrf
<table>
<tr>
  <th>person id: </th>
  <td><input type="number" name="person_id" value=""></td>
</tr>
<tr>
  <th>title: </th>
  <td><input type="text" name="title" value=""></td>
</tr>
<tr>
  <th>message: </th>
  <td><input type="text" name="message" value=""></td>
</tr>
<tr>
  <th></th>
  <td><input type="submit" value="追加する"></td>
</tr>
</table>

</form>


</body>
</html>
