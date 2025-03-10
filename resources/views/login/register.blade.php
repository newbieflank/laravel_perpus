<x-guest-layout>
    <form method="POST" action="{{ route('daftar') }}">
        @csrf

        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="phone" :value="__('No Telpon')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')"
                required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="salary" :value="__('Gaji Pokok')" />
            <x-text-input id="salary" class="block mt-1 w-full" type="number" name="salary" :value="old('salary')"
                required autocomplete="off" />
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="loan" :value="__('Pinjaman')" />
            <x-text-input id="loan" class="block mt-1 w-full" type="number" name="loan" :value="old('loan')"
                required autocomplete="off" />
            <x-input-error :messages="$errors->get('loan')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <x-primary-button class="ms-3">
            {{ __('Register') }}
        </x-primary-button>
    </form>
</x-guest-layout>
