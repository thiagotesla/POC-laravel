<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Services\UserService;
use App\ServicesInterfaces\IBookService;

class BookController extends Controller
{
    private $bookService;
    private $userService;

    public function __construct(
        IBookService $bookService,
        UserService $userService
        )
    {
        $this->bookService = $bookService;
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = $this->bookService->index();
        return view('index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->userService->index();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $cadastro = $this->bookService->store($request);
        return $cadastro?
            redirect('books'):
                redirect('books/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $book= $this->bookService->show($id);
        $user=$this->bookService->relUsers($id);
        return view ('show', compact('book', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book= $this->bookService->show($id);
        $users= $this->userService->index();
        return view('create', compact('book', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $book = $this->bookService->update($request, $id);
        if($book)
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->bookService->destroy($id);
        return $del?
            "Sim":
                "Não";
    }
}
