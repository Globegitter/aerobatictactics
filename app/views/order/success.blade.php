@extends('templates.main')

@section('page-meta')
Booking
@stop

@section('content')

@if(Session::has('message'))
<p>{{ Session::get('message')}}</p>
@endif

@stop