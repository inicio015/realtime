@extends('layouts.app')

@section('content')
<!--maquetacion con bootstrapvue-->
<messenger-component :user-id="{{ auth()->id() }}" >
    
</messenger-component>

@endsection
