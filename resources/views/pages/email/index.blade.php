<x-template title="Emails">
    <x-table :headers="['Name', 'Email', 'Content', 'Deliver date']">
        @forelse($emails as $email)
            <x-table-row>
                <x-table-cell>
                    {{ $email->person->name }}
                </x-table-cell>
                <x-table-cell>
                    {{ $email->to }}
                </x-table-cell>
                <x-table-cell>
                    {{ $email->body }}
                </x-table-cell>
                <x-table-cell>
                    {{ $email->created_at }}
                </x-table-cell>
            </x-table-row>
        @empty
            <x-table-row>
                <x-table-cell>
                    There's no emails sent yet
                </x-table-cell>
            </x-table-row>
        @endforelse
    </x-table>
    <div>
        {{ $emails->links() }}
    </div>
</x-template>
