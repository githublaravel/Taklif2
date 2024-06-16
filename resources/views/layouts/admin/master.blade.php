<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.head')
    <title>Document</title>
    @yield('style')
</head>

<body>
    @include('layouts.admin.nav')

    @yield('body')

    @include('layouts.admin.footer')

    @yield('end')
</body>

</html>
