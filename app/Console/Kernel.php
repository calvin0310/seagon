<?php

namespace App\Console;

use App\Console\Commands\Talk;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        Talk::class,
    ];
}
