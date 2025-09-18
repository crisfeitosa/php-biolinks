<x-layout.app>
    <x-container>
        <x-card title="Editing link :: {{ $link->id }}">
            <x-form :route="route('links.edit', $link)" put id="edit-form-link">
                <x-input name="link" id="link" value="{{ old('link',$link->link) }}" placeholder="Link" />
                <x-input name="name" id="name" placeholder="Name" value="{{ old('name',$link->name)}}" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('dashboard')">Back to Dashboard</x-a>
                <x-button type="submit" form="edit-form-link">Save</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>