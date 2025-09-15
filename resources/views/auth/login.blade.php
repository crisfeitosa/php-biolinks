<div>
    {{ auth()->id()}}
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <input name="email" type="email" value="{{ old('email') }}" placeholder="Email" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <input name="password" type="password" placeholder="Password" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <button type="submit">Login</button>
    </form>
</div>
