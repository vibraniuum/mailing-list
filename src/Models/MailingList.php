<?php

namespace Vibraniuum\MailingList\Models;

use Astrogoat\Storefront\Models\Product;
use Helix\Fabrick\Icon;
use Helix\Lego\Models\Contracts\Searchable;
use Helix\Lego\Models\Model as LegoModel;
use Illuminate\Support\Str;

class MailingList extends LegoModel
{

    protected $table = 'mailing_list';

    public static function icon(): string
    {
        return Icon::COLLECTION;
    }

    public static function getDisplayKeyName(): string
    {
        return 'email';
    }
}
