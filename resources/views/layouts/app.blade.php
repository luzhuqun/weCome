<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <!-- 引入样式 -->
    <link rel="stylesheet" href="//unpkg.com/iview/dist/styles/iview.css">
    <!-- 引入组件库 -->
    <script src="//unpkg.com/iview/dist/iview.min.js"></script>--}}
    <style scoped>
        .layout-content{
            min-height: 200px;
            margin: 15px;
            overflow: hidden;
            background: #fff;
            border-radius: 4px;
        }
        .layout-content-main{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div id="app">
        <head-bar></head-bar>
        <div class="layout-content">
            <Row>
                <i-col span="5">
                    <menu-bar></menu-bar>
                </i-col>
                <i-col span="19">
                    <div class="layout-content-main">
                        @yield('content')
                    </div>
                </i-col>
            </Row>
        </div>
        <foot-bar></foot-bar>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
