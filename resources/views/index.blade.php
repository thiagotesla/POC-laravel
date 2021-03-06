@extends('templates.template')

@section('content')

<h1 class="text-center">CRUD Laravel</h1>

<div class="text-center mb-3"><a href="{{url("/books/create")}}"><button class="btn btn-success">Casdastrar Novo</button></a></div>

<div class="col-8 m-auto">
    @csrf
    <table class="table text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col"> Preço</th>
            <th scope="col"> Ativo</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $book as $books)
            @php
                $user=$books->find($books->id)->relUsers
            @endphp
            <tr>
                <th scope="row">{{$books->id}}</th>
                <td>{{ $books->title }}</td>
                <td>{{ $user->name }}</td>
                <td> R$ {{ $books->price }}</td>
                <td> {{ $books->active }}</td>
                <td>
                    <a href="{{url("books/$books->id")}}"><button class="btn btn-dark">Visualizar</button></a>
                    <a href="{{url("books/$books->id/edit")}}"><button class="btn btn-primary">Editar</button></a>
                    <a href="{{url("books/$books->id")}}" class="js-del"><button class="btn btn-danger">Excluir</button></a>
                </td>
              </tr>
            @endforeach


        </tbody>

      </table>


</div>

@endsection
