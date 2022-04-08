@extends('templates.template')

@section('content')

<h1 class="text-center">CRUD Laravel</h1>

<div class="text-center mt-3 mb-4"><a href=""><button class="btn btn-success">Cadastrar</button></a></div>

<div class="col-8 m-auto">
    <table class="table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $book as $books)
            @php
                $user=$books->find($books->id)->relUsers
            @endphp
            <tr>
                <th scope="row">{{ $books->id}}</th>
                <td>{{ $books->title }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $books->price }}</td>
                <td>
                    <a href=""><button class="btn btn-dark">Vizualizar</button></a>
                    <a href=""><button class="btn btn-primary">Editar</button></a>
                    <a href=""><button class="btn btn-danger">Excluir</button></a>
                </td>
              </tr>
            @endforeach


        </tbody>
      </table>
</div>

@endsection
