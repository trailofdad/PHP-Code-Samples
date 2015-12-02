<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>About Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"/>


</head>

<body>

    @include('partials.nav')

    <div class="container" style="padding-top: 60px">

        @include('flash::message')

       @yield('content')

    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script>
       $('#flash-overlay-modal').modal();
// $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    @yield('footer')

</body>
</html>