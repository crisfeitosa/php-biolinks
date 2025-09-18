<div>
    <h1>Profile</h1>

    @if ($message = session('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('profile') }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <textarea name="description" placeholder="Description">{{ old('description', $user->description) }}</textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <span>biolinks.com.br/</span>
            <input name="handler" placeholder="@yourLink" value="{{ old('handler', $user->handler) }}" />
            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />
        
        <a href="{{ route('dashboard') }}">Cancel</a>
        <button>Update</button>
    </form>
</div>
