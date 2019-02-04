@extends('auth.main')
@section('title','Login')
@section('content')
     <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="POST" action="{{route('login')}}">
            {{csrf_field()}}
            <div class="form-group">
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" 
                class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" 
                name="email" 
                placeholder="Email address" required="required" autofocus="autofocus">
                @if($errors->has('email'))
                <div class="invalid-feedback">{{$errors->first('email')}}</div>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" 
                class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                name="password" 
                placeholder="Password" required="required">
                 @if($errors->has('password'))
                <div class="invalid-feedback">{{$errors->first('password')}}</div>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" {{old('remember') ? 'checked' : ''}}>
                  Remember Password
                </label>
              </div>
              </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          

          </form>
          <div class="text-center">
            <a class="d-block small" href="{{route('password.request')}}">Forgot Password?</a>
          </div>
        </div>
     </div>
@endsection

   