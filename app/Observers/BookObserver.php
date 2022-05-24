<?php

namespace App\Observers;
use App\Models\Book;

class BookObserver
{
    public function created(Book $book)
    {
        {
            $book->active = 1;
            $book->save();
        }
    }
}
