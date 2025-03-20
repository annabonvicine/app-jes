<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function valter(){
        //mostrar a lista de uduário pela ordem id
        $user = User::orderbyDesc('id')->get();

        //Retorna a lista de user no index.php
        return view ('user.valter', ['user' => $user]);
    }

    public function show(User $user){

        return view ('user.show', ['user' => $user]);

    }

    public function edit(User $user){

        return view ('user.edit', ['user' => $user]);

    }

    public function update(UserRequest $request , User $user){
        $request->validated();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('user.valter')->with('sucess', 'Usuário atualizado com sucesso');
    }

    public function entrar(){
        return view('user.entrar');
    }

    public function banco(){
        return view('user.store');
    }

    public function index(){
        return view('user.index');
    }

    public function create(){
        return view('user.create');
    }

    public function store(UserRequest $request){
        $request->validated();

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);
        
    //redirecionar para página de cadastro
    return redirect()->route('user.valter')->with('sucess', 'Usuário cadastrado com sucesso');
    }
}
?>
