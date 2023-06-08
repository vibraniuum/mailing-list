<?php

namespace Vibraniuum\MailingList\Http\Livewire;

use Helix\Lego\Http\Livewire\Models\Index as BaseIndex;
use Vibraniuum\MailingList\Models\MailingList;

class MailingListIndex extends BaseIndex
{

    public function model(): string
    {
        return MailingList::class;
    }

    public function columns(): array
    {
        return [
            'email' => 'Email',
            'phone' => 'Phone',
            'updated_at' => 'Last updated',
        ];
    }

    public function mainSearchColumn(): string|false
    {
        return 'email';
    }

    public function render()
    {
        return view('mailing-list::models.mailinglist.index', [
            'models' => $this->getModels(),
        ])->extends('lego::layouts.lego')->section('content');
    }
}
