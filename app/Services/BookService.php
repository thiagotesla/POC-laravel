<?php

namespace App\Services;

use App\Models\Book;
use App\Http\Requests\BookRequest;

class BookService
{
    public function __construct(Book $books)
    {
        $this->books = $books;
    }


    public function index()
    {
        $book=Book::all()->sortBy('title');
        return $book;
    }

    public function create()
    {
        $book=Book::all()->sortBy('title');
        return $book;
    }

    public function store(BookRequest $request)
    {
        $cadastro=Book::create(
            [
                'user_id'=>$request->user_id,
                'title'=>$request->title,
                'pages'=>$request->pages,
                'price'=>$request->price,
            ]
        );

        return $cadastro;
    }

    public function show($id)
    {
        $book=Book::find($id);
        return $book;
    }

    public function relUsers($id){
        $book=Book::find($id);
        $user = $book->find($book->id)->relUsers;

        return $user;
    }

    public function update(BookRequest $request, $id){
        $book = Book::where(['id'=>$id])->update([
            'user_id'=>$request->user_id,
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
        ]);
        return $book;
    }

    public function destroy($id){
        $del = Book::destroy($id);
        return $del;
    }

}
