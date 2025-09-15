<div>
    {{ auth()->id()}}
    <h1>Register</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <input name="name" value="{{ old('name') }}" placeholder="Name" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <input name="email" type="email" value="{{ old('email') }}" placeholder="Email" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <input name="email_confirmation" placeholder="Email Confirmation" />
        </div>

        <br />

        <div>
            <input name="password" type="password" placeholder="Password" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <button type="submit">Register</button>
    </form>
</div>
