<?php

declare(strict_types=1);

use LaravelRecommender\Recommender\Recommender;

it('resolves the singleton', function () {
    expect(app(Recommender::class))->toBeInstanceOf(Recommender::class);
});

it('returns the same instance from the container', function () {
    expect(app(Recommender::class))->toBe(app(Recommender::class));
});

it('merges the package config', function () {
    expect(config('laravel-recommender.placeholder'))->toBe('default');
});

it('registers the artisan command', function () {
    $this->artisan('laravel-recommender:placeholder')
        ->expectsOutputToContain('Recommender placeholder command executed.')
        ->assertSuccessful();
});
