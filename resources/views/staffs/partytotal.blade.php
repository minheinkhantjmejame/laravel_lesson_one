<!DOCTYPE html>
<html>
<head>
    <title>Staff Page</title>
</head>
<body>

    <h3>Staff Page</h3> 

    <hr/>

    <h4>Welcome to our site</h4>
    <p> This is staff page - party total is {{$total}} </p> 

    <ul>
        <li><a href="{{URL::to('/staffs')}}">Home</a></li>
        {{-- <li><a href="{{URL::to('/staffs/party')}}">Party</a></li>[or] --}}
        {{-- route nae call ll ya tel  --}}
        <li><a href="{{route('staffs.party')}}">Party</a></li> 
        <li><a href="{{URL::to('/')}}">Edit</a></li>
    </ul>
</body>
</html>