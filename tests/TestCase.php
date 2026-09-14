<?php

declare(strict_types=1);

namespace LaravelRecommender\Recommender\Tests;

use LaravelRecommender\Recommender\RecommenderServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            RecommenderServiceProvider::class,
        ];
    }
}
