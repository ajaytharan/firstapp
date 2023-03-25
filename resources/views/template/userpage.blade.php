<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>First App</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="template/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="template/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="template/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="template/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('template.header')

        <!-- slider section -->
        @include('template.slider')

    </div>

    <!-- why section -->
    @include('template.why')


    <!-- arrival section -->
    @include('template.arrival')


    <!-- product section -->
    @include('template.product')


    <!-- subscribe section -->
    @include('template.subscribe')


    <!-- client section -->
    @include('template.client')


    <!-- footer start -->
    @include('template.footer')
    <!-- footer end -->

    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="template/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="template/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="template/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="template/js/custom.js"></script>
</body>

</html>
