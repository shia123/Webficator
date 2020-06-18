@extends('secretary.app')

    
@section('title','Secretary')

@section('content')

<div id="app">
<h1>This is Secretary Page</h1>
    
<form action="/Secretary/logout" method="GET">
    @csrf

    <button class="btn btn-success">logout</button>

    </div>  

@endsection