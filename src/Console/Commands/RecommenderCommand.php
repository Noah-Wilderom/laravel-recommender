<?php

declare(strict_types=1);

namespace LaravelRecommender\Recommender\Console\Commands;

use Illuminate\Console\Command;

class RecommenderCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-recommender:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-recommender.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('Recommender placeholder command executed.');

        return self::SUCCESS;
    }
}
