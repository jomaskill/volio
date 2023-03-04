<x-template title="People">
    <x-table :headers="['Name', 'Phone', 'Email']">
        @forelse($people as $person)
            <x-table-row>
                <x-table-cell>
                    {{ $person->name }}
                </x-table-cell>
                <x-table-cell>
                    {{ $person->phone }}
                </x-table-cell>
                <x-table-cell>
                    {{ $person->email }}
                </x-table-cell>
            </x-table-row>
        @empty
            <x-table-row>
                <x-table-cell>
                    There's no people created yet
                </x-table-cell>
            </x-table-row>
        @endforelse
    </x-table>
    <x-slot:action>
        <x-button :action="route('person.create')">
            New
        </x-button>
    </x-slot:action>
    <div>
        {{ $people->links() }}
    </div>

</x-template>
