<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">

        <Myheader></Myheader>{{--So, the other components will be burgured by head n foot--}}

            <div class="container">
                <router-view></router-view>

            </div>

        <Myfooter></Myfooter>

    </div>

    <script src="{{asset('js/app.js') }}"></script>
</body>
</html>