<?php

namespace BernskioldMedia\LaravelScrive\Commands;

use Illuminate\Console\Command;

class LaravelScriveCommand extends Command
{
    public $signature = 'laravel-scrive';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
