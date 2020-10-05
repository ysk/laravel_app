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

<form action="/rest" method="post">
  <table>
    @csrf
    <tr>
      <th>message: </th>
      <td><input type="text" name="message" value="{{ old('message') }}"></td>
    </tr>
    <tr>
      <th>url: </th>
      <td><input type="text" name="url" value="{{ old('url') }}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </table>
  
</form>

</body>
</html>
