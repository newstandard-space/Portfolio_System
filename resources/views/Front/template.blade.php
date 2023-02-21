<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>

<body class="footerFixed">


    <!-- ヘッダー -->
    @include('front.body.header')
    <!-- ヘッダー -->


    <!-- コンテンツ -->

    <main>
        @yield('content')
    </main>

    <!-- コンテンツ -->


    <!-- フッター -->
    @include('front.body.footer')
    <!-- フッター -->
    <script src="{{ asset('frontend/js/default.js') }}"></script>

</body>

</html>