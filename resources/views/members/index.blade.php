@extends('layouts.layout')

@section('title','Member Page')

@section('heading')
{{$header}}
@endsection

@section('content')

    @php 
        echo count($students)
    @endphp

     {{-- if there is $students, the following will be express --}}
    @if(count($students)) 
       <ul>
           @foreach($students as $student)
                <li>{{$student}}</li> 
           @endforeach
       </ul>
    @endif

    <hr/>

{{-- @endsection --}}

{{-- or --}}

@stop

@section('footer')
    Copyright. Thank for using our platform.
@endsection 