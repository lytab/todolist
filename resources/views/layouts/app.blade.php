<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo List - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
    <script src="js/app.js"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright &copy; 2019 TodoList</p>
    </footer>
</body>
</html>