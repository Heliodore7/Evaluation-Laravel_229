<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ConnexionRequest;
use App\Http\Requests\InscriptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function get_connexion(){
        return view('Auth.connexion');
    }

    public function connexion(ConnexionRequest $loginRequest){
           $access = $loginRequest->only('email','password', 'check');

            if(Auth::attempt($access)){
                return redirect()->route('home');
            }
            return back();
    }

    public function get_inscription(){
        return view('Auth.inscription');
    }
    public function inscription(InscriptionRequest $inscriptionRequest){
        User::create([
             'nom' =>$inscriptionRequest->nom,
             'prenom' =>$inscriptionRequest->prenom,
             'telephone'=>$inscriptionRequest->telephone,
             'email' =>$inscriptionRequest->email,
             'password' =>Hash::make($inscriptionRequest->password),
             'photo' =>$inscriptionRequest->photo,
            ]);
            return redirect()->route('get-login');


    }
}
