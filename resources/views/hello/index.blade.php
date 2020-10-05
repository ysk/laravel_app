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
.pagination{
  font-size: 14px;
}
.pagination li{
  display: inline-block;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<h1>一覧</h1>


@if(Auth::check())
  <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
  <p>※ログインしていません(<a href="/login">ログイン</a>) | <a href="/register">登録</a>
@endif
<table>
<tr>
<th>id</th>
  <th><a href="/hello?sort=name">name</a></th>
  <th><a href="/hello?sort=mail">mail</a></th>
  <th><a href="/hello?sort=age">age</a></th>
   <th></th>

</tr>
@foreach($items as $item)
<tr>
<td>{{$item->id}}</td>
  <td>{{$item->name}}</td>
  <td>{{$item->mail}}</td>
  <td>{{$item->age}}</td>
  <td><a href="{{route('hello.show')}}?id={{$item->id}}">詳細ページ</a></td>
</tr>
@endforeach

</table>
{{ $items->appends(['sort' => $sort])->links() }}


<p><a href="{{route('hello.add')}}">新規登録</a></p>


</body>
</html>
