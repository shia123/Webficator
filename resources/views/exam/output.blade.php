@extends('exam.app')

    
@section('title','Output')

@section('content')

<div class="card-body">
<form method="POST"  action="/activity"> 
    <div class="modal-body mx-3">
      <div class="md-form mb-5">
         @csrf
          <ul class="col-8">

          </ul>
        <input  type="text" class="form-control"  placeholder="Enter Num1" style="color:black"   name='num1'>
        <label data-error="wrong" data-success="right" for="defaultForm-email" style="color:black" >Num1</label>
         
      </div>
    
      <div class="md-form mb-4">
      
        <input type="text" id="defaultForm-pass" class="form-control " placeholder="Enter Num2" style="color:black" name='num2'>
        <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color:black">Num2</label>

      </div>
  
    </div>
    <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-outline-primary">Submit</button>

    </div>
  </form>
</div>

<h1>Output</h1>

@foreach ($output as $item)


    <h2>{{$item}} <h2>   

@endforeach




@endsection