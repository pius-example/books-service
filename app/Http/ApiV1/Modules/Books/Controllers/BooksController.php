<?php

namespace App\Http\ApiV1\Modules\Books\Controllers;

use App\Domain\Books\Actions\CreateBookAction;
use App\Domain\Books\Models\Book;
use App\Http\ApiV1\Modules\Books\Requests\CreateBookRequest;
use App\Http\ApiV1\Modules\Books\Resources\BooksResource;

class BooksController
{
    public function get(int $id): BooksResource
    {
        $book = Book::query()->findOrFail($id);

        return new BooksResource($book);
    }

    public function create(
        CreateBookRequest $request,
        CreateBookAction $action,
    ): BooksResource {
        $validate = $request->validated();
        $book = $action->execute($validate);

        return new BooksResource($book);
    }
}
