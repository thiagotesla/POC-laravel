<?php

namespace App\Services;

use App\Http\Requests\BookRequest;
use App\RepositoryInterfaces\IBookRepository;

class BookService
{
    private $bookRepo;
    
    public function __construct(IBookRepository $bookRepo)
    {
        $this->bookRepo = $bookRepo;
    }


    public function index()
    {
        $book=$this->bookRepo->all()->sortBy('title');
        return $book;
    }

    public function create()
    {
        $book=$this->bookRepo->all()->sortBy('title');
        return $book;
    }

    public function store(BookRequest $request)
    {
        $cadastro=$this->bookRepo->create(
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
        $book=$this->bookRepo->find($id);
        return $book;
    }

    public function relUsers($id){
        $book=$this->bookRepo->find($id);
        $user = $book->find($book->id)->relUsers;

        return $user;
    }

    public function update(BookRequest $request, $id){
        $book = $this->bookRepo->update([
            'user_id'=>$request->user_id,
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
        ], $id);
        return $book;
    }

    public function destroy($id){
        $del = $this->bookRepo->destroy($id);
        return $del;
    }

}
