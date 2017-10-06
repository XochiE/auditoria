@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 fondo"></div>

    <!--LOGIN-->
    <div class="col-md-4">
      <!-- Form login -->
      <br />
      <!--Panel-->
      <div class="card">
          <div class="card-header blue-gradient lighten-1 white-text">
            Iniciar Sesion
          </div>
          <div class="card-body">

            <form  role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" >E-Mail Address</label>

                            <div class="md-form">
                                <input  id="defaultForm-email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="">Password</label>

                            <div class="md-form">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
<br />
                                <button type="submit" class="btn btn-block blue-gradient">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                            <a class="btn btn-block btn-danger peach-gradient " href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>


                    </form>
            <!-- Form login -->
          </div>
      </div>
      <!--/.Panel-->
    </div>
<div class="col-md-4">
  
</div>
  </div>
</div>
@endsection
