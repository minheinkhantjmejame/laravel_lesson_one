<!DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
</head>
<body>

    <h3>Employee Page</h3> 

    <hr/>

    <h4>Welcome to our site</h4>
    <p> This is employee page - index</p> 

    <?php 

        foreach($employeedatas as $employeedata){
            echo $employeedata."<br/>";
        }  
    ?>

    {{-- (or) de ne twae ka laravel mar bel thone lot ya thi. difference twae dot shi tel--}}

    @php 
        foreach($employeedatas as $employeedata){
            echo $employeedata."<br/>";
        }
    @endphp 

    {{-- (or) --}}

    @foreach($employeedatas as $employeedata)
    {{$employeedata}}."<br/>";
    @endforeach 

    {{-- (or) --}}


    @foreach($employeedatas as $employeedata)
    {!!$employeedata!!}."<br/>";// ! thone tar ka php area htae yout nay lot
    @endforeach 

    <ul> 
        @foreach($employeedatas as $employeedata)
        <li>{{$employeedata}}</li> 
        @endforeach 
    </ul> 

    <?php 
        $city  = "Mandalay";
    ?>

    @php 
        echo $city;
    @endphp 

    @if($city === "Yangon")
        <h3>You correct</h3>
    @else 
        <h3>You are wrong</h3> 
    @endif

    @php 
        echo "<pre>".print_r($employeedatas,true)."</pre>";
        echo $employeedatas['name']."<br/>";
        echo $employeedatas['email']."<br/>";
        echo $employeedatas['phone']."<br/>";
    @endphp 





</body>
</html>