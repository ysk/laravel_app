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

<form action="{{ route('person.del') }}" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr>
      <th>name: </th>
      <td>{{ $form->name }}</td>
    </tr>
    <tr>
      <th>mail: </th>
      <td>{{ $form->mail }}</td>
    </tr>
    <tr>
      <th>age: </th>
      <td>{{ $form->age }}</td>
    </tr>
  </table>
  <input type="submit" value="delete">
</form>

</body>
</html>
