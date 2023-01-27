<?php

namespace Mahmoudmhamed\InertiaVueHelpers\Commands;

use Illuminate\Console\Command;

class InertiaVueHelpersCommand extends Command
{
    public $signature = 'inertia-vue-helpers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
