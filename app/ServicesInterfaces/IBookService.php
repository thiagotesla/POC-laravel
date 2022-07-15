<?php

namespace App\ServicesInterfaces;

use App\Http\Requests\BookRequest;

interface IBookService
{
    public function index();
    public function create();
    public function store(BookRequest $request);
    public function show($id);
    public function update(BookRequest $request, $id);
    public function destroy($id);
    public function relUsers($id);
}
