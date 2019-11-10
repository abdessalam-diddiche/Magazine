@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md_10 col-md-offset-2 mx-auto">
        <h1 style="color:red">Ouuups Cette page est non Autoriser!!!</h1>
        <a href="{{ url('articles') }}">Retour</a>
        
        </div>
    </div>
</div>



@endsection