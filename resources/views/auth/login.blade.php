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
              @if($errors->any())
                  <b-alert show variant="danger">
                      <ul class="mb-0">
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                  </b-alert>
              @else
                <b-alert show>Por favor ingresa tus datos mi amor</b-alert>

              @endif
              
              <b-form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf


                        <b-form-group
                            id="email"
                            label="Correo electronico:"
                            label-for="input-1"
                            description="We'll never share your email with anyone else."
                          >
                            <b-form-input
                              type="email"
                              id="email"
                              name="email"
                              value="{{ old('email') }}" required autofocus
                              placeholder="Enter email"
                            ></b-form-input>
                        </b-form-group>
                        <b-form-group
                            id="password"
                            label="Contraseña:"
                            label-for="input-1"
                          >
                            <b-form-input
                              type="password"
                              id="password"
                              name="password"
                              value="{{ old('password') }}" required 
                            ></b-form-input>
                        </b-form-group>
                        <b-form-group>
                            <b-form-checkbox 
                            
                            name="remember"

                            {{ old('remember') ? 'checked="true"' : '' }}>
                            Recordar Session
                            </b-form-checkbox>
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

                        <!--div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div-->

                    <b-button type="submit" variant="primary">
                        {{ __('Login') }}
                    </b-button>
                     <b-button href="{{ route('password.request') }}"variant="link">
                        ¿Olvidaste tu contraseña?
                    </b-button>
              </b-form>
            </b-card>
           
        </b-col>
    </b-row>
</b-container>

@endsection
