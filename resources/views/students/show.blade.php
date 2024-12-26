<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h3>Profile</h3>
    <hr/>

    <h4>Welcome to our site</h4>
    <p> This is profile page - show</p>

        <ul>
            <li><a href="{{URL::to("/students")}}">Index</a></li>
            <li><a href="{{URL::to("/students/show")}}">Show</a></li>
            <li><a href="{{route('students.edit')}}">Edit</a></li>
        </ul>
</body>
</html>