@extends('layouts.app')

@section('content')

<b-container fluid>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card
              header="Inicio de Session"
              header-tag="header"
              title=""
            >
              <b-alert show>Por favor ingresa tus datos mi amor</b-alert>
              <b-card-text>Header and footers using props.</b-card-text>
              <b-button href="#" variant="primary">Go somewhere</b-button>
              <b-form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf


                        <b-form-group
                            id="email"
                            label="Correo electronico:"
                            label-for="input-1"
                            description="We'll never share your email with anyone else."
                          >
                            <b-form-input
                              id="email"
                              type="email"
                              name="email"
                              value="{{ old('email') }}" required autofocus
                              placeholder="Enter email"
                            ></b-form-input>
                        </b-form-group>
                            <!--label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div-->

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
              </b-form>
            </b-card>
           
        </b-col>
    </b-row>
</b-container>

@endsection
