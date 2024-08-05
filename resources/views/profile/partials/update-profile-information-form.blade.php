<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />   

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)"  autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
        <div>
            <x-input-label for="mobile_num" :value="__('Mobile Number')" />
            <x-text-input id="mobile_num" name="mobile_num" type="text" class="mt-1 block w-full" :value="old('mobile_num', $user->mobile_num)"  autofocus autocomplete="mobile_num" />
            <x-input-error class="mt-2" :messages="$errors->get('mobile_num')" />
        </div>
        <div>
            <x-input-label for="file" :value="__('Profile Image')"/>
            <img id="img" style="width:200px;height:200px"src="{{ url('storage/img/'. $user->file)      }}"  onchange="getImagePreview(event)" class="rounded" alt="..." >
            <x-text-input id="file" name="file" type="file" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('file')" />
        </div>


       
        <script>
        let profilePic = document.getElementById("img"); 
        let inputFile = document.getElementById("file");
        inputFile.onchange = function(){
             profilePic.src = URL.createObjectURL(inputFile.files[0]);
        }
       
        </script>
    

      

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>


