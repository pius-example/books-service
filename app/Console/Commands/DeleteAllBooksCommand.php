<?php

namespace App\Console\Commands;

use App\Domain\Books\Actions\CreateBookAction;
use App\Domain\Books\Models\Book;
use Illuminate\Console\Command;

class DeleteAllBooksCommand extends Command
{
    protected $signature = 'books:delete';

    protected $description = 'Delete all book';

    public function handle(CreateBookAction $action): void
    {
        Book::query()->delete();

        $book = $action->execute(['text' => 'qweqwe', 'age' => 12]);

        # $book = (new CreateBookAction())->execute(['text' => 'qweqwe', 'age' => 12]);
    }
}
