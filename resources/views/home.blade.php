@extends('layouts.app')

@section('content')
<!--maquetacion con bootstrapvue-->
<b-container fluid style=" height: calc(100vh - 56px)">   

    <b-row class="h-100" no-gutters>
        <b-col cols="4 ">

                
            <contact-list-component>
                
            </contact-list-component>
        </b-col>
        <b-col cols="8">
           <active-conversation-component>

           </active-conversation-component>
        </b-col>
    </b-row>
</b-contaier>

@endsection