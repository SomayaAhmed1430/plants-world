<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            {{-- <x-input-label for="name" :value="__('Name')" /> --}}
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Enter your password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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
    #name,
    #email,
    #password,
    #password_confirmation
    {
        height: 60px;
        border-radius: 0;
        border: 0;
        background: #eff2ff;
        border-bottom: 1px solid #05796c42;
        transition: .5s border;
    }
    #name:focus,
    #email:focus,
    #password:focus,
    #password_confirmation:focus
    {
        border-radius: 0;
        border: none;
        background: #eff2ff;
        border-bottom: 1px solid #05796b;
        --tw-ring-color: #0000;
    }
    #name::placeholder,
    #email::placeholder,
    #password::placeholder,
    #password_confirmation::placeholder
    {
        color: #05796c
    }
    .ml-4{
        background: #0000;
        border: 1px solid #05796b;
        color: #05796b;
    }
    .ml-4:hover{
        background: #05796b;
        border: 1px solid #05796b;
        color: #fff;
    }
</style>