<x-fab::layouts.page
    title="Mailing List"
    :breadcrumbs="[
        ['title' => 'Home', 'url' => route('lego.dashboard')],
        ['title' => 'Mailing List','url' => route('lego.mailing-list.emails.index')],
    ]"
    x-data="{ showColumnFilters: false }"
>

    @include('lego::models._includes.indexes.filters')

    <x-fab::lists.table>

        <x-slot name="headers">
            @include('lego::models._includes.indexes.headers')
        </x-slot>
        @include('lego::models._includes.indexes.header-filters')
        <x-fab::lists.table.header x-show="showColumnFilters" x-cloak class="bg-gray-100" />

        @foreach($models as $record)
            <x-fab::lists.table.row :odd="$loop->odd">
                @if($this->shouldShowColumn('email'))
                    <x-fab::lists.table.column primary full>
                        {{ $record->email }}
                    </x-fab::lists.table.column>
                @endif

                @if($this->shouldShowColumn('phone'))
                    <x-fab::lists.table.column align="right">
                        {{ $record->phone }}
                    </x-fab::lists.table.column>
                @endisset


                @if($this->shouldShowColumn('updated_at'))
                    <x-fab::lists.table.column align="right">
                        {{ $record->updated_at->toFormattedDateString() }}
                    </x-fab::lists.table.column>
                @endisset

            </x-fab::lists.table.row>
        @endforeach
    </x-fab::lists.table>

    @include('lego::models._includes.indexes.pagination')
</x-fab::layouts.page>
