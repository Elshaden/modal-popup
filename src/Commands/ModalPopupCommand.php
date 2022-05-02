<?php

namespace Elshaden\ModalPopup\Commands;

use Illuminate\Console\Command;

class ModalPopupCommand extends Command
{
    public $signature = 'modal-popup';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
