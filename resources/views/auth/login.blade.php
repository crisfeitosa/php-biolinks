<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" id="email" value="{{ old('email') }}" placeholder="E-mail" />
                <x-input type="password" name="password" id="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('register')">I need to create a new account!</x-a>
                <x-button type="submit" form="login-form">Login</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>

    <div class="mx-auto max-w-screen-md flex items-center justify-center py-20">
        <div class="card bg-base-100 w-96 shadow-xl">
            <div class="card-body">

                <h1 class="card-title">Login</h1>

                <form action="{{ route('login') }}" method="post" id="login-form" class="mt-4 space-y-4">
                    @csrf

                    <div>
                        <input class="input input-bordered w-full" name="email" type="email" value="{{ old('email') }}" placeholder="Email" />
                        @error('email')
                        <div class="text-sm text-error">{{ $message }}</div>
                        @enderror
                    </div>

                    <br />

                    <div>
                        <input class="input input-bordered w-full" name="password" type="password" placeholder="Password" />
                        @error('password')
                        <div class="text-sm text-error">{{ $message }}</div>
                        @enderror
                    </div>
                </form>

                <div class="card-actions justify-end mt-4">
                    <button type="submit" class="btn btn-primary" form="login-form">Login</button>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>