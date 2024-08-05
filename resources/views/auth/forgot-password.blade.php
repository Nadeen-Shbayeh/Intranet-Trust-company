<x-guest-layout>
 
        <x-slot name="logo">
     
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <div class="at-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->att() as $error)
                        <div class="alert atert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session( 'error' )}}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success" style="color:green">{{session('success') }}</div>
            @endif
        </div>



        <form method="POST" action="{{ route('forgot.password.post') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Send Token') }}
                </x-button>
            </div>
            
        </form>
 
</x-guest-layout>
