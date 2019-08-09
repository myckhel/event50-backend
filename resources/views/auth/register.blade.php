@extends('layouts.app')

@section('content')
<style>
input:invalid + span:after {
  content: '✖';
  color: #f00;
  padding-left: 5px;
}

input:valid + span:after {
  content: '✓';
  color: #26b72b;
  padding-left: 5px;
}
</style>
<!-- register -->
<div class="register segments-page">
  <div class="container">
          <div class="wrap-title">
              <h3>Register</h3>
          </div>
      <div class="content">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <input class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus type="text" placeholder="First Name">
          <span class="validity"></span>
          @if ($errors->has('firstname'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('firstname') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required type="text" placeholder="Last Name">
          <span class="validity"></span>
          @if ($errors->has('lastname'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('lastname') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required type="text" placeholder="Username">
          <span class="validity"></span>
          @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required type="email" placeholder="Email" pattern="{5,40}">
          <span class="validity"></span>
          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required type="tel" placeholder="Phone e.g 08123456789" pattern="[0]{1}[0-9]{10}">
          <span class="validity"></span>
          @if ($errors->has('phone'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('phone') }}</strong>
              </span>
          @endif
          <select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role" required style="display:block">
            <option value="" disabled selected>Role</option>
            <option value="ushering">Ushering</option>
            <option value="choir">Choir</option>
            <option value="protocol">Protocol</option>
            <option value="children Teacher">Children Teacher</option>
          </select>
          <span class="validity"></span>
          @if ($errors->has('role'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('role') }}</strong>
              </span>
          @endif
          <select class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="gender" required style="display:block">
            <option value="" disabled selected>Gender</option>
            <option value="1">Male</option>
            <option value="0">Female</option>
          </select>
          <span class="validity"></span>
          @if ($errors->has('gender'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('gender') }}</strong>
              </span>
          @endif
          <!-- <input class="form-control{{ $errors->has('adddress1') ? ' is-invalid' : '' }}" name="address1" value="{{ old('address1') }}" required type="text" placeholder="Address1">
          <span class="validity"></span>
          @if ($errors->has('address1'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('address1') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('address2') ? ' is-invalid' : '' }}" name="address2" value="{{ old('address2') }}"  type="text" placeholder="Address2">
          <span class="validity"></span>
          @if ($errors->has('address2'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('address2') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}"  type="text" placeholder="City">
          <span class="validity"></span>
          @if ($errors->has('city'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('city') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}"  type="text" placeholder="State">
          <span class="validity"></span>
          @if ($errors->has('state'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('state') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" name="postalcode" value="{{ old('postalcode') }}"  type="text" placeholder="Postalcode">
          <span class="validity"></span>
          @if ($errors->has('postalcode'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('postalcode') }}</strong>
              </span>
          @endif
          <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}"  type="text" placeholder="Country">
          <span class="validity"></span>
          @if ($errors->has('country'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('country') }}</strong>
              </span>
          @endif -->
          <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password" placeholder="password">
          <span class="validity"></span>
          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <input class="form-control" name="password_confirmation" required type="password" placeholder="Confirm Password">
          <span class="validity"></span>
          @if ($errors->has('password_confirmation'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
          @endif
            <div class="info">
                <ul>
                    <li>
                        Have an account?
                        <a href="{{route('login')}}">Login</a>
                    </li>
                </ul>
            </div>
          <button type="submit" class="button">Register</button>
        </form>
        <!-- <div class="wrap-media">
          <h5>Register with</h5>
          <div class="row">
            <div class="col s6">
              <button class="button-full button-facebook">Facebook</button>
            </div>
            <div class="col s6">
              <button class="button-full button-google">Google+</button>
            </div>
          </div>
        </div> -->
      </div>
  </div>
</div>
<!-- end register -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
