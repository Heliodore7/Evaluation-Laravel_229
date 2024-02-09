@extends('layout.base')
@section('contenu')
<div class="container mt-5 col-4">
    <h4>Bienvenue chers utilisateurs</h4>
    <p> Si vous etes un nouveau </p>
    <ul class="nav nav-pills nav-center">
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="{{route('register')}}">Cliquez sur le bouton pour vous inscrire?</a>
       </li>
    </ul>
</div>

@section('contenu')
