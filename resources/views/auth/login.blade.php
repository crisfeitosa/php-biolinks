<div>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf
        <input name="email" type="email" value="{{ old('email') }}" placeholder="Email" />
        <input name="password" type="password" placeholder="Password" />
        <button type="submit">Login</button>
    </form>
</div>
