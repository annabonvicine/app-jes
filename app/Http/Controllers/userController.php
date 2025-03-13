<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        //mostrar a lista de uduário pela ordem id
        $user = User::orderbyDesc('id')->get();

        //Retorna a lista de user no index.php
        return view ('user.index', ['user' => $user]);
    }

    public function entrar(){
        return view('user.entrar');
    }

    public function store(UserRequest $request){
        $request->validated();

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);
        
    //redirecionar para página de cadastro
    return redirect()->route('user.index')->with('sucess', 'Usuário cadastrado com sucesso');
    }
}
?>
