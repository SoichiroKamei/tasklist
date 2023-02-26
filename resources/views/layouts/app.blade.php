<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome/css/solid.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- ナビバーの内容 -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ToDo List
                </a>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
