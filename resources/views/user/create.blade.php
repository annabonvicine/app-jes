<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Usuário</title>
</head>
<body>

    <a href="{{route('user.valter')}}">Página inicial</a>
    <h2>Cadastrar Usuário</h2>

    {{-- se ocorrer um erro chama as mensagens --}}
    @if ($errors->any())
    
        @foreach ($errors->all() as $error)
        <p style="color:red;">
            {{$error}}
        </p>
        
    @endforeach
    @endif

    <form action="{{route('user.store')}}" method="POST">
        @csrf
        @method('POST')

        <label>Nome:</label>
        <input type="text" name="name" placeholder="Nome do usuário" value="{{old('name')}}"> <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" placeholder="E-mail do usuário" value="{{old('email')}}"> <br><br>

        <label>Senha:</label>
        <input type="password" name="password" placeholder="Senha do usuário"> <br><br>

        <button type="submit">Cadastrar</button>
    </form>
    
</body>
</html>