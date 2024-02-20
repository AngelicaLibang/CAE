<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="/js/admin.js"></script>
    <link rel="stylesheet" href="/css/admin.css"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="card">
        <div class="card-body">
            <h2>Personal information</h2>
            <ul>
                <li>Full name: {{$students -> last_name}}, {{$students -> first_name}}</li>
                <li>Birthdate: {{$students -> birthdate}}</li>
                <li>Gender: {{$students -> gender}}</li>
                <li>Year Level: {{$students -> year_level}}</li>
                <li>Department: {{$students -> department}}</li>
            </ul>
            <h2>Contact information</h2>
            <ul>
                <li>Mobile number: {{$students -> mobile_number}}</li>
                <li>Email address: {{$students -> email_address}}</li>
            </ul>
        </div>
    </div>
</body>
</html>
