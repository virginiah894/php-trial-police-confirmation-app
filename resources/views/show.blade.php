@extends('layouts.app')
@section('content')
<h1 class="title">Police List</h1>

@foreach ($police as $police)
<ul>
    <li>{{$police->name}}</li>
    <li>{{$police->force_number}}</li>
    <li>{{$police->station}}</li>
</ul>
@endforeach
@endsection