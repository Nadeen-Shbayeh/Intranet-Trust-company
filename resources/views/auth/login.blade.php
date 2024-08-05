<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="at-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors as $error)
                        <div class="alert atert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success" style="color:green">{{session('success') }}</div>
            @endif
        </div>



    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Employee ID Address -->
        <div>
            <x-input-label for="emp_id" :value="__('Employee ID')" />
            <x-text-input id="emp_id" class="block mt-1 w-full" type="text" name="emp_id" :value="old('emp_id')" required autofocus autocomplete="emp_id" />
            <x-input-error :messages="$errors->get('emp_id')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
      
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('forgot-password') }}">
                    {{ __('Forgot your password?') }}
                </a>
        

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
