@extends('homepage.app')

    
@section('title','Home')

@section('content')

<div id="app">

    <nav-component  :webcontents="{{$webcontents}}"></nav-component>
    <hbody-component :webcontents="{{$webcontents}}"></hbody-component>
    <footer-component :webcontents="{{$webcontents}}"></footer-component>
   
</div>
    



@endsection