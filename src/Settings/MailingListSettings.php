<?php

namespace Vibraniuum\MailingList\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Vibraniuum\MailingList\Actions\MailingListAction;

class MailingListSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
            // 'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     MailingListAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with MailingList.';
    }

    public static function group(): string
    {
        return 'mailing-list';
    }
}
