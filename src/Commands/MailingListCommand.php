<?php

namespace Vibraniuum\MailingList\Commands;

use Illuminate\Console\Command;

class MailingListCommand extends Command
{
    public $signature = 'mailing-list';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
