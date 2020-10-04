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
@if(count($errors) > 0)
  <div>
    <ul>
      @foreach($errors->all as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<br>

<form action="/person/add" method="post">
  <table>
    @csrf
    <tr>
      <th>name: </th>
      <td><input type="text" name="name" value="{{ old('name') }}"></td>
    </tr>
    <tr>
      <th>mail: </th>
      <td><input type="text" name="mail" value="{{ old('mail') }}"></td>
    </tr>
    <tr>
      <th>age: </th>
      <td><input type="text" name="age" value="{{ old('age') }}"></td>
    </tr>
  </table>
  <input type="submit" value="send">
</form>

</body>
</html>
