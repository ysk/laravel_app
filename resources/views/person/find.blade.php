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
<form action="{{ route('person.find') }}" method="post">
@csrf
<input type="text" name="input" value="{{$input}}">
<input type="submit" value="find">

</form>
@if(isset($item))
    <table>
        <th>Data</th>
        <tr>
        <td>{{$item->getDate()}}</td>
        </tr>

    </table>
@endif

</body>
</html>
