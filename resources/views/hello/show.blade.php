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

<h1>詳細ページ</h1>
<table>
<tr>
<th>id</th>
  <th>name</th>
  <th>mail</th>
  <th>age</th>
  <th></th>
  <th></th>
</tr>

@foreach($items as $item)
<tr>
<td>{{$item->id}}</td>
  <td>{{$item->name}}</td>
  <td>{{$item->mail}}</td>
  <td>{{$item->age}}</td>
  <td><a href="{{route('hello.edit')}}?id={{$item->id}}">編集</a></td>
  <td><a href="{{route('hello.del')}}?id={{$item->id}}">削除</a></td>
</tr>
@endforeach
</table>

<p><a href="{{route('hello.index')}}">TOPへ戻る</a></p>


</body>
</html>
