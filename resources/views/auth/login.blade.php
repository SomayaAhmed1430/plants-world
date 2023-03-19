<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Enter your password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Forget Password -->
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<style>
    form{
        min-height: 80vh;
        width: 100%;
        padding: var(--page--padding);
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    #email,
    #password
    {
        height: 60px;
        border-radius: 0;
        border: 0;
        background: #eff2ff;
        border-bottom: 1px solid #05796c42;
        transition: .5s border;
    }
    #email:focus,
    #password:focus
    {
        border-radius: 0;
        border: none;
        background: #eff2ff;
        border-bottom: 1px solid #05796b;
        --tw-ring-color: #0000;
    }
    #email::placeholder,
    #password::placeholder
    {
        color: #05796c
    }
    .ml-3{
        background: #0000;
        border: 1px solid #05796b;
        color: #05796b;
    }
    .ml-3:hover{
        background: #05796b;
        border: 1px solid #05796b;
        color: #fff;
    }
</style>
