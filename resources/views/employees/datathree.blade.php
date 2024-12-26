<!DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
</head>
<body>

    <h3>Employee Page</h3> 

    <hr/>

    <h4>Welcome to our site</h4>
    <p> This is employee page - datathree</p> 
    
    <h3>Hi There .{{$greeting}}, {{$hifi}}</h3> 

    @php  
        echo "<pre>".print_r($employees,true)."</pre>";
        echo $employees[0]."<br/>";
        echo $employees[1]."<br/>";
        echo $employees[2]."<br/>";
    @endphp 

    {{-- compact nae call htar lot variable name twae a ti a kya pyan thone pay ya tel  --}}

    <ul>
        @foreach($employees as $employee)
            <li>{{$employee}}</li> 
        @endforeach 
    </ul>




</body>
</html>