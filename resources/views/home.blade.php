@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Welcome to Laravel ToDo App</h1>
        <hr/>

        @include('partials.flash_notification')

        <p>For any query please contact</p>

        <h3>Ehtesham Mehmood</h3>
        <h4><a href="https://www.facebook.com/shami17">Ehtesham</a></h4>
    </div>
@endsection