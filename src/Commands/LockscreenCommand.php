<?php

namespace Kepsondiaz\Lockscreen\Commands;

use Illuminate\Console\Command;

class LockscreenCommand extends Command
{
    public $signature = 'lockscreen';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
