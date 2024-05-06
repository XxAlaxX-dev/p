@extends('layout')
@section('title',$title)
@section('content')
<h1>Service bancaires</h1>
<ul>
    @foreach($services as $s)
    <li>{{$s}}</li>
    @endforeach
</ul>
@endsection