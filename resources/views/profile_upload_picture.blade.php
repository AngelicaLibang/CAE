<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts/bootstap')
@include('layouts/head')
@include('layouts/left_navbar')
@include('layouts/navbar')
  <title>Upload Profile Picture</title>
</head>
<body>
  <form action="/user_account/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="profile_picture" /><br />
    <input type="submit" class="btn btn-success mt-3" />
</form>
</body>
</html>
