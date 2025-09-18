<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex flex-col gap-4">
            <x-button info :href="route('profile')">Update profile</x-button>
            <x-button outline :href="route('links.create')">Create a new link</x-button>
            <x-button error :href="route('logout')">Logout</x-button>
        </div>

        <div class="text-center space-y-2 text-base-200">
            <x-img src='/storage/{{ $user->photo }}' alt='{{ $user->name }}' />
            <div class="font-bold text-2xl tracking-winder text-blue-50">{{ $user->name }}</div>
            <div class="text-sm italic text-blue-50 opacity-80 mb-7">{{ $user->description }}</div>

            <ul class="space-y-4">
                @foreach ($links as $link )
                <li class="flex justify-center items-center gap-4">

                    @unless($loop->last)
                    <x-form :route="route('links.down', $link)" patch>
                        <x-button outline>
                            <x-icons.down class="w-6 h-6" />
                        </x-button>
                    </x-form>
                    @else
                    <x-button disabled outline> <x-icons.down class="w-6 h-6" /></x-button>
                    @endunless

                    @unless($loop->first)
                    <x-form :route="route('links.up', $link)" patch>
                        <x-button outline>
                            <x-icons.up class="w-6 h-6" />
                        </x-button>
                    </x-form>
                    @else
                    <x-button disabled outline> <x-icons.up class="w-5 h-6" /></x-button>
                    @endunless

                    <x-button href="{{ route('links.edit', $link->id ) }}" block outline info>
                        {{ $link->name }}
                    </x-button>
                    <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm(' ')">
                        <x-button error>
                            <x-icons.trash class="w-6 h-6" />
                        </x-button>
                    </x-form>
                </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>