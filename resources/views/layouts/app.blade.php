<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' />

    @vite('resources/css/app.css')
    @yield('head')
</head>

<body>
    <div class="flex flex-col justify-between" id="content">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @yield('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#home").addClass("text-[#44B156] active");
        })
    </script>
</body>

</html>
