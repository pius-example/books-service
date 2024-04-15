<?php

namespace App\Http\ApiV1\Modules\Books\Resources;

use App\Domain\Books\Models\Book;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin Book
 */
class BooksResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'age' => $this->age,
        ];
    }
}
