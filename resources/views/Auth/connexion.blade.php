@extends('layout.base')


@section('contenu')



<div class="container mt-5 col-4">
    <h3 class="text-center">Connection</h3>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
        <button type="submit" class="btn btn-primary">S'inscrire</button>

      </form>
</div>






@endsection
