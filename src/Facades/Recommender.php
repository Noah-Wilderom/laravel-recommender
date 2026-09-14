<?php

declare(strict_types=1);

namespace LaravelRecommender\Recommender\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelRecommender\Recommender\Recommender
 */
class Recommender extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelRecommender\Recommender\Recommender::class;
    }
}
