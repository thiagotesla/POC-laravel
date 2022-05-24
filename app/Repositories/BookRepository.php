<?php

namespace App\Repositories;

use App\Models\Book;
class BookRepository
{
	private $model;

	public function __construct(Book $model)
	{
		$this->model = $model;
	}

	public function all()
	{
		return $this->model->all();
	}

    public function create($request)
    {
        return $this->model->create($request);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($request, $id)
    {
        return $this->model->whereId($id)->update($request);
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}
