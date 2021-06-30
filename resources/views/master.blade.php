<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>

    <meta name="viewport" content="width = device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>

    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

<style>
    .custom-login {
        height: 450px;
        padding-top: 100px;
    }

</style>

</html>
