<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <h3>Layout Index</h3>
    <p> @yield('heading')</p>
    @yield('content')

    <div>
        <h4>This is our company info from Fixed Index Page</h4> 
        <p>Min ipsum dolor sit amet consectetur adipisicing elit. Odit laudantium nihil deserunt! Aperiam facilis nostrum quis voluptate voluptatum in neque quos, rerum, ullam corporis rem sequi, autem quae vero eaque.</p>
    </div>

    <i>@yield('footer')</i>

</body>
</html>