<?php

namespace Vibraniuum\MailingList;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vibraniuum\MailingList\MailingList
 */
class MailingListFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailing-list';
    }
}
