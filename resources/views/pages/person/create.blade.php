<x-template title="Create Person">
    <x-forms.form :action="route('person.store')">
        <x-forms.input name="name" label="Name"/>
        <x-forms.error name="name"/>
        <x-forms.input name="phone" label="Phone Number"/>
        <x-forms.error name="phone"/>
        <x-forms.input name="email" label="Email" type="email"/>
        <x-forms.error name="email"/>
        <x-forms.text-area name="body" label="Email Content"/>
        <x-forms.error name="body"/>
    </x-forms.form>
    <x-slot:action>
        <x-button :action="route('person.index')">
            Back
        </x-button>
    </x-slot:action>
</x-template>
