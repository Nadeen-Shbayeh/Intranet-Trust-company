<x-guest-layout>
 
        <x-slot name="logo">
     
        </x-slot>

       
        <div class="at-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors as $error)
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



        <form method="POST" action="{{ route('enter.token.post') }}">
            @csrf
            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <div class="block">
                <x-label for="token" value="{{ __('Enter Token') }}" />
                <x-input id="token" class="block mt-1 w-full" type="text" name="token" :value="old('token')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('send Token') }}
                </x-button>
            </div>
            
        </form>
 
</x-guest-layout>
