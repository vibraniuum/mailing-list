<?php

namespace Vibraniuum\MailingList\Actions;

use Helix\Lego\Apps\Actions\Action;

class MailingListAction extends Action
{
    public static function actionName(): string
    {
        return 'MailingList action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
