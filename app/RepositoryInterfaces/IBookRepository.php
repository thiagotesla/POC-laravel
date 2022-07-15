<?php

namespace App\RepositoryInterfaces;

interface IBookRepository
{
    public function all();
    public function create(array $request);
    public function find($id);
    public function update(array $request, $id);
    public function destroy($id);
}
