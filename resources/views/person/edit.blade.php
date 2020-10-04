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
@if(count($errors) > 0)
  <div>
    <ul>
      @foreach($errors->all as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form action="{{ route('person.edit') }}" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr>
      <th>name: </th>
      <td><input type="text" name="name" value="{{ $form->name }}"></td>
    </tr>
    <tr>
      <th>mail: </th>
      <td><input type="text" name="mail" value="{{ $form->mail }}"></td>
    </tr>
    <tr>
      <th>age: </th>
      <td><input type="text" name="age" value="{{ $form->age }}"></td>
    </tr>
  </table>
  <input type="submit" value="edit">
</form>


</body>
</html>
