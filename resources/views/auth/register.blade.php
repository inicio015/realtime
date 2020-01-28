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
              <b-form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf


                        <b-form-group
                            id="name"
                            label="Nombre"
                            label-for="name"
                            description="Ingresa tu nombre"
                          >
                            <b-form-input
                              type="text"
                              id="name"
                              name="name"
                              value="{{ old('name') }}" required autofocus
                              placeholder="Enter name"
                            ></b-form-input>
                        </b-form-group>
                        <b-form-group
                            id="email"
                            label="Correo electronico:"
                            label-for="email"
                            description="We'll never share your email with anyone else."
                          >
                            <b-form-input
                              type="email"
                              id="email"
                              name="email"
                              value="{{ old('email') }}" required 
                              placeholder="Enter email"
                            ></b-form-input>
                        </b-form-group>
                        <b-form-group
                            id="password"
                            label="Contraseña:"
                            label-for="password"
                          >
                            <b-form-input
                              type="password"
                              id="password"
                              name="password"
                              value="{{ old('password') }}" required 
                            ></b-form-input>
                        </b-form-group>
                        <b-form-group
                            id="password"
                            label="Confirmar Contraseña:"
                            label-for="password_confirmation"
                          >
                            <b-form-input
                              type="password"
                              id="password_confirmation"
                              name="password_confirmation"
                              value="{{ old('password_confirmation') }}" required 
                            ></b-form-input>
                        </b-form-group>

                    <b-button type="submit" variant="primary">
                        Registro
                    </b-button>
                     <b-button href="{{ route('login') }}"variant="link">
                        Ya te has registrado?
                    </b-button>
              </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
