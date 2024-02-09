@extends('layout.base')

@section('contenu')

    <div class="container mt-5 col-4">
        <h3 class="text-center">Veillez-vous inscrire!!</h3>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirm">
              </div>
              <div class="mb-3">
                <label for="" class="form-label"> Photo</label>
                <input type="file" class="form-control" id="">
              </div>
            <div class="mb-3 form-check">
            <button type="submit" class="btn btn-primary">Soumettre</button>
          </form>
    </div>

@endsection
