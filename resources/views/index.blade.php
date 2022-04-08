@extends('templates.template')

@section('content')

<h1 class="text-center">CRUD Laravel</h1>

<div class="col-8 m-auto">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
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
              </tr>
            @endforeach


        </tbody>
      </table>
</div>

@endsection
