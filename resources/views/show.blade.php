@extends('templates.template')

@section('content')

<h1 class="text-center">Visualizar</h1>

<div class="col-8 m-auto">
    <table class="table text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">N° páginas</th>
            <th scope="col">Email autor</th>
          </tr>
        </thead>
         <tbody>


           <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->pages }}</td>
                <td>{{ $user->email }}</td>
            </tr>


        </tbody>
      </table>
</div>
<div class="text-center mt-3"> <a href="{{url("/books")}}"><button class="btn btn-dark">Voltar</button></a></div>

@endsection
