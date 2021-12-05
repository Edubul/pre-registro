
<div class="p-1">
    <div class="flex gap-4">
        <x-jet-button class="float-right bg-yellow-500 rounded font-bold text-xs hover:bg-yellow-600" wire:click="openModalCreateGameAccount" wire:loading.attr="disabled">
            {{ __("New Account") }}
        </x-jet-button>
    </div>

    <div class="w-10/12">
        {{-- <x-alert.message/> --}}
    </div>

    <x-jet-dialog-modal wire:model="openModal">
        <x-slot name='title'>
            <h3 class="text-black">
                {{__('Create a Game Account')}}
            </h3>
        </x-slot>
        {{-- Content --}}
        <x-slot name='content'>
            <section class="container">
                @if ($errors->any())
                    @foreach ($errors->all() as $item)
                        <ul class="text-red-500 mt-0">
                            <li>{{ $item }}</li>
                        </ul>
                    @endforeach
                @endif
                <form class="flex flex-col text-black" wire:submit.prevent="store" id="SubmitForm">
                    @csrf
                    <x-jet-label for="accountID" value="{{ __('Username ID') }}" />
                    <x-jet-input id="accountID" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="state.userid" name="userid" required autofocus />
                    
                    <x-jet-label for="password" value="{{ __('Game account password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password"  wire:model.defer="state.user_pass" name="password" required autofocus />
                    
                    <x-jet-label for="password" value="{{ __('Confirm game account password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" wire:model.defer="state.user_pass_confirmation" required autofocus />                    
                </form>
            </section>
        </x-slot>
            
        {{-- Footer --}}
        <x-slot name='footer'>
            {{-- Create Button --}}
            <x-jet-button wire:target="store" 
                          wire:loading.attr="disabled" 
                          form="SubmitForm "
                          class="bg-yellow-500 rounded font-bold text-xs hover:bg-yellow-600">
            {{__('Create Account')}}
            </x-jet-button>

            {{-- Cancel Button --}}
            <x-jet-secondary-button wire:click="$toggle('openModal')">
                {{__('Cancel')}}
            </x-jet-secondary-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>