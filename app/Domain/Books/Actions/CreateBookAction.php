<?php

namespace App\Domain\Books\Actions;

use App\Domain\Books\Models\Book;

class CreateBookAction
{
    public static function execute(array $data): Book
    {
        $book = new Book();
        $book->text = $data['text'];
        $book->age = $data['age'];
        $book->save();

        return $book;
    }
}
