<?php

namespace App\Domain\Books\Models;

use App\Domain\Books\Models\Tests\Factories\BookFactory;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $text
 * @property int $age
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Book extends Model
{
    protected $table = 'books';

    public static function factory(): BookFactory
    {
        return BookFactory::new();
    }
}
