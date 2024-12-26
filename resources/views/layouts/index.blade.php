@extends('layouts.layout')

@section('title','Index Page')

@section('heading','My first Index Template')

@section('content')

    <div>
        <h4>My template name is {{$hay}}</h4> 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iusto fugiat ipsam perferendis maiores maxime cum eaque rem ratione incidunt, provident debitis unde illo recusandae id sint adipisci corporis quasi?
    </div>

@endsection

{{-- @section('footer','Thanks For using our Platform') --}}

{{-- @section('footer')
    <small>Thanks for using our platform</small>
@endsection --}}

@section('footer')
    <small>Copyright {{$getyear}}. Design by ABC Co.,Ltd.</small>
@endsection