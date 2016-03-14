<html ng-app="coding-task">
<head>
    <title>
        Coding Task
    </title>

    <script src="https://code.jquery.com/jquery-2.2.1.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script >

        var baseUrl = "{{ url('/') }}";

    </script>
</head>
<body>

<div class="container">

    @yield('content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.2/angular.min.js" type="text/javascript"></script>


<script src="{!! asset('app/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('app/user/user.service.js') !!}" type="text/javascript"></script>
<script src="{!! asset('app/user/education.service.js') !!}" type="text/javascript"></script>
<script src="{!! asset('app/user/user.controller.js') !!}" type="text/javascript"></script>




</body>

</html>