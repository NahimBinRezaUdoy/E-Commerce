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
    img.slider-img{
        height:400px !important;
        margin-left: 150px;
    }
    .slider-text{
        /* 
        font-weight: bold;
        margin-top: -200px; */
        background: linear-gradient(0.25turn, #3f87a6, #ebf8e1, #f69d3c);        padding: 20px;
    }
    .custom-product{
        height: 600px;
    }
    .tranding-image{
        height: 150px;

    }
    .tranding-item{
        float: left;
        width: 20%;
    }
    .tranding-wrapper{
        margin:30px;
        margin-top: 60px;
        margin-bottom: 60px;
    }
    .single-page-img{
        height: 400px;
    }

    .search-item{
        width:500px;
        text-align: center;
    }


</style>

</html>
