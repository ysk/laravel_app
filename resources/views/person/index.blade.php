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

    <table>
        <th>name</th>
        <th>mail</th>
        <th>age</th>
        @foreach($items as $item)
        <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
        </tr>
        @endforeach
    </table>

    <br>

@if(isset($item))
    <table>
        <th>Data</th>
        <th></th>
        <th></th>
        @if($item->boards != null)
        <th></th>
        @endif
        @foreach($items as $item)
        <tr>
        <td>{{$item->getDate()}}</td>
        @if($item->boards != null)
        <td>
            @foreach($item->boards as $obj)
            <table>
            <tr><td>{{ $obj->getData() }}</td></tr>
            </table>
            @endforeach
        </td>
        @endif
        <td><a href="{{route('person.edit')}}?id={{$item->id}}">編集</a></td>
        <td><a href="{{route('person.del')}}?id={{$item->id}}">削除</a></td>
        </tr>
        @endforeach
    </table>
@endif


<a href="{{ route('person.add') }}">追加する</a>
</body>
</html>
