<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/bootstap')
    <link rel="stylesheet" href="css/user_page.css">
    <link rel="stylesheet" href="css/calendar.css">
    <title>Profile</title>
</head>
<body>
    @include('layouts/left_navbar')
    @include('layouts/messages')
    <form action="/user_account/upload" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="profile_picture" /><br />
      <input type="submit" class="btn btn-success mt-3" />
  </form>
</body>

</html>

