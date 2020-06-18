@extends('owner.app')

    
@section('title','Owner')

@section('content')


    <div id="app" >
        {{-- <form action="/Owner/logout" method="GET">
            @csrf

            <button class="btn btn-success">logout</button>

        </form> --}}

       
       
          <ownerdash-component></ownerdash-component>
    
     
           
         
        
        
       


    </div>



@endsection