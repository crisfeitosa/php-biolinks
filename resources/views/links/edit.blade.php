<div>
    <h1>Edit Link :: {{ $link->name }}</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="post">
        @csrf
        @method('put')

        <div>
            <input name="link" value="{{ old('link', $link->link) }}" placeholder="Link" />
            @error('link')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <input name="name" value="{{ old('name', $link->name) }}" placeholder="Name" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <a href="{{ route('dashboard') }}">Cancel</a>
        <button type="submit">Save</button>
    </form>
</div>
