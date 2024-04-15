<?php

namespace App\Domain\Books\Models\Tests\Factories;

use App\Domain\Books\Models\Book;
use Ensi\LaravelTestFactories\BaseModelFactory;

class BookFactory extends BaseModelFactory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'text' => $this->faker->text(),
            'age' => $this->faker->numberBetween(0, 120),
        ];
    }
}
