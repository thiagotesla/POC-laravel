@extends('templates.template')

@section('content')
    <h1 class="text-center">
        @if (@isset($book))
            Editar
        @else
            Cadastrar
        @endif
    </h1>
    @if (@isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    @if (@isset($book))
        <form name="formEdicao" id="formEdicao" method="post" action="{{ url("/books/$book->id") }}">
            @method('PUT')
        @else()
            <form name="formCadastro" id="FormCadastro" method="post" action="{{ url('/books') }}">
    @endif

    <div class="text-center form-control">

        @csrf
        <select class="form-control" name="user_id" id="user_id" required>
            <option class="form-control" value="{{ $book->relUsers->id ?? '' }}"
                @if (@isset($book))
            @else{
                selected disabled
            } @endif>

                {{ $book->relUsers->name ?? 'Autor' }}</option><br>
            @foreach ($users as $user)
                <option class="form-control" value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select> <br>
        <input class="form-control" type="text" name="title" id="title" placeholder="Título"
            value="{{ $book->title ?? '' }}" required><br>
        <input class="form-control" type="text" name="pages" id="pages" Placeholder="Número de páginas"
            value="{{ $book->pages ?? '' }}" required><br>
        <input class="form-control" type="text" name="price" id="price" placeholder="Preço"
            value="{{ $book->price ?? '' }}" required><br>
        <input class="btn btn-primary mb-3" type="submit"
            value="@if (@isset($book)) Salvar edição @else Finalizar cadastrar @endif">
        </form>
    </div>
    <div class="text-center mt-3"> <a href="{{ url('/books') }}"><button class="btn btn-dark">Voltar</button></a></div>

@endsection
