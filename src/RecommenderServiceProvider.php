<?php

declare(strict_types=1);

namespace LaravelRecommender\Recommender;

use Illuminate\Support\ServiceProvider;
use LaravelRecommender\Recommender\Console\Commands\RecommenderCommand;

class RecommenderServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-recommender.php', 'laravel-recommender');

        $this->app->singleton(Recommender::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-recommender.php' => config_path('laravel-recommender.php'),
        ], ['laravel-recommender', 'laravel-recommender-config']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-recommender', 'laravel-recommender-migrations']);

        $this->commands([
            RecommenderCommand::class,
        ]);
    }
}
