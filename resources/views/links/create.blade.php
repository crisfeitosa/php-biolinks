<x-layout.app>
    <div>
        <h1>Create a Link</h1>

        @if ($message = session('message'))
        <div>{{ $message }}</div>
        @endif

        <form action="{{ route('links.create') }}" method="post">
            @csrf

            <div>
                <input name="link" value="{{ old('link') }}" placeholder="New Link" />
                @error('link')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <br />

            <div>
                <input name="name" value="{{ old('name') }}" placeholder="Name" />
                @error('name')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <br />

            <button type="submit">Save</button>
        </form>
    </div>
</x-layout.app>