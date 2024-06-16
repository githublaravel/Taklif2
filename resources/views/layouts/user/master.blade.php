<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.user.head')
    <title>Document</title>
    @yield('style')
</head>

<body>
    @include('layouts.user.nav')

    @yield('body')

    @include('layouts.user.footer')

    @yield('end')
</body>

</html>
