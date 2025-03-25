<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Usuários - JES </title>
</head>
<body>
    <a href="{{route('user.create')}}">Página Cadastro</a>
    <h2>Lista de usuários cadastrados JES</h2>

    @if (session('sucess'))
        <p style="color: forestgreen;">
            {{ session ('sucess')}}
        </p>
    @endif

    @forelse ($user as $bduser)
        ID: {{$bduser->id}}<br>
        Nome: {{$bduser->name}}<br>
        E-mail: {{$bduser->email}}<br>
        {{-- <a href=" {{ route('user.show')}}" --}}
        <a href="{{route('user.show', ['user'=> $bduser->id])}}">Visualizar</a>
        <a href="{{route('user.edit', ['user'=> $bduser->id])}}">Editar</a>


        {{-- <a href="{{route('user.destroy', ['user'=> $bduser->id])}}">Excluir</a><br> --}}

        <form method="POST" action="{{ route('user.destroy', ['user'=> $bduser->id] )}}">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir o usuário {{$bduser->name}}?')">Apagar</button>
        </form>
        <hr>
        
    @empty
        
    @endforelse
</body>
</html>