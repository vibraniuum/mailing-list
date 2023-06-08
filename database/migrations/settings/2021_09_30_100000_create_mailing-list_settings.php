<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateMailingListSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('mailing-list.enabled', false);
        // $this->migrator->add('mailing-list.url', '');
        // $this->migrator->addEncrypted('mailing-list.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('mailing-list.enabled');
        // $this->migrator->delete('mailing-list.url');
        // $this->migrator->delete('mailing-list.access_token');
    }
}
