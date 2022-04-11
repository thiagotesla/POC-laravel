@extends('templates.template')

@section('content')

<h1 class="text-center">Visualizar</h1>


<div class="col-8 m-auto ">

    Título: {{}}<br>
    Autor: {{$user->name}} <br>
    Email: {{$user->email}} <br>
    Páginas: {{$book->pages}} <br>
    Preço: {{ $book->price}} <br>

</div>

<div class="col-8 m-auto">
    <table class="table text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
          </tr>
        </thead>
         <tbody>


            <tr>
                <th scope="row">{{}}</th>
                <td>{{ $book->title }}</td>
                <td>{{  }}</td>
                <td>{{ }}</td>
              </tr>


        </tbody>
      </table>
</div>

@endsection
