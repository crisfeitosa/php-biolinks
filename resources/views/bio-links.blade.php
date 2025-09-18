<x-layout.app>
    <x-container>
        <div class="text-center space-y-2 text-base-200">
            <x-img src='/storage/{{ $user->photo }}' alt='{{ $user->name }}' />
            <div class="font-bold text-2xl tracking-winder text-blue-50">{{ $user->name }}</div>
            <div class="text-sm italic text-blue-50 opacity-80 mb-7">{{ $user->description }}</div>

            <ul class="space-y-4">
                @foreach ($user->links as $link )
                    <li class="flex justify-center items-center">
                        <x-button href="{{ $link->link }}" block outline info target="_blank">
                            {{ $link->name }}
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>