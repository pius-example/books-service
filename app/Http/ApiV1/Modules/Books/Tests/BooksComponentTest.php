<?php

use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\getJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component', 'api');

test('GET /api/v1/books/{id} 200', function () {
    $book = \App\Domain\Books\Models\Book::factory()->create();

    getJson('/api/v1/books/' . $book->id)
        ->assertStatus(200)
        ->assertJsonPath('data.age', $book->age);
});

test('GET /api/v1/books/{id} 404', function () {
    getJson('/api/v1/books/1333')
        ->assertStatus(404);
});
