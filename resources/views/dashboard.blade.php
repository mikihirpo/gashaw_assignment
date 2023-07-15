<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            {{-- <x-button target="_blank" href="https://github.com/kamona-wd/kui-laravel-breeze" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button> --}}
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{-- {{ __("You're logged in!")  }} --}}
        <form method="POST" action="{{ route('register-property') }}">
            @csrf

            <div class="grid gap-6">
                <!-- Email Address -->
                <div class="space-y-2">
                    <x-form.label
                        for="name"
                        :value="__('name')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-fas-person aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="name"
                            class="block w-full"
                            type="text"
                            name="name"
                            :value="old('name')"
                            placeholder="name"
                            required
                            autofocus
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <x-form.label
                        for="type"
                        :value="__('type')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="type"
                            class="block w-full"
                            type="text"
                            name="type"
                            required
                            
                            placeholder="{{ __('type') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <div class="space-y-2">
                    <x-form.label
                        for="department"
                        :value="__('department')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-fas-book-open aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="department"
                            class="block w-full"
                            type="text"
                            name="department"
                            required
                            
                            placeholder="{{ __('department') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <div class="space-y-2">
                    <x-form.label
                        for="category"
                        :value="__('category')"
                    />

                    <x-form.input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-fas-layer-group aria-hidden="true" class="w-5 h-5" />
                        </x-slot>

                        <x-form.input
                            withicon
                            id="category"
                            class="block w-full"
                            type="text"
                            name="category"
                            required
                            
                            placeholder="{{ __('category') }}"
                        />
                    </x-form.input-with-icon-wrapper>
                </div>

                <!-- Remember Me -->
                {{-- <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input
                            id="remember_me"
                            type="checkbox"
                            class="text-purple-500 border-gray-300 rounded focus:border-purple-300 focus:ring focus:ring-purple-500 dark:border-gray-600 dark:bg-dark-eval-1 dark:focus:ring-offset-dark-eval-1"
                            name="remember"
                        >

                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Remember me') }}
                        </span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div> --}}

                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-fas-save class="w-6 h-6" aria-hidden="true" />

                        <span>{{ __('Submit') }}</span>
                    </x-button>
                </div>

                {{-- @if (Route::has('register'))
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Don’t have an account?') }}
                        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                            {{ __('Register') }}
                        </a>
                    </p>
                @endif --}}
            </div>
        </form>
    </div>
</x-app-layout>
