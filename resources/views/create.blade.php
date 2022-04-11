@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1>
    @if (@isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger" >
            @foreach ( $errors->all() as $error )
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <div class="text-center form-control">
        <form name="formCadastro" id="FormCadastro" method="post" action="{{url('/books')}}">
            @csrf
            <select class="form-control" name="user_id" id="user_id" required>
                <option class="form-control" value="" selected disabled>Autor</option><br>
                @foreach ( $users as $user )
                    <option class="form-control" value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select> <br>
            <input class="form-control" type="text" name="title" id="title" placeholder="Título" required><br>
            <input class="form-control" type="text" name="pages" id="pages" Placeholder="Número de páginas" required><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço" required><br>
            <input class="btn btn-primary mb-3" type="submit" value="Cadastrar">
        </form>
    </div>
    <div class="text-center mt-3"> <a href="{{url("/books")}}"><button class="btn btn-dark">Voltar</button></a></div>

@endsection
