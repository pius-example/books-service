<?php

use App\Console\Commands\DeleteAllBooksCommand;
use App\Domain\Books\Actions\CreateBookAction;
use App\Domain\Books\Models\Book;

use function Pest\Laravel\artisan;

use function Pest\Laravel\assertDatabaseEmpty;
use function Pest\Laravel\assertModelMissing;

use Tests\IntegrationTestCase;

uses(IntegrationTestCase::class);
uses()->group('integration', 'console');

test('DeleteAllBooksCommand success', function () {
    /** @var IntegrationTestCase $this */

    $books = Book::factory()->count(10)->create();

    $this->mock(CreateBookAction::class)
        ->shouldReceive('execute')
        ->once();

    artisan(DeleteAllBooksCommand::class)->execute();

    foreach ($books as $book) {
        assertModelMissing($book);
    }

    assertDatabaseEmpty(Book::class);
});
