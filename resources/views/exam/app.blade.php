<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('css/img/homeicon.jpg')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    @yield('content')
    {{-- <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="loginImage">

        <img  src="{{asset('css/img/logoTrack.png')}}" alt="">
    </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          
          <input type="text" id="defaultForm-email" class="form-control validate @error('username') is-invalid @enderror" name="username">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Username</label>
        </div>
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
        <div class="md-form mb-4">
        
          <input type="password" id="defaultForm-pass" class="form-control validate @error('password') is-invalid @enderror">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
        </div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
       @enderror
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-outline-primary">Login</button>
        <button class="btn btn-outline-danger">Forgot Password</button>
      </div>
    </div>
  </div>
</div --}}

</body>
</html>


<script src="{{ asset('js/app.js') }}" defer></script>
<script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>