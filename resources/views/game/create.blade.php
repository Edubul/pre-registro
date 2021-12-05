<x-app-layout>
    <div class="my-auto">
        <div class="flex flex-col p-3">
            <div class="text-pre text-center">
                <h2 class="text-5xl font-medium text-yellow-500 arcaneStyle"><span class="text-white">{{ ucfirst(Auth::guard('master')->user()->username) }}</span> create a game account !</h2>
                <p class="text-xl arcaneStyle">With your master account you can create the accounts you need and manage it from one
                    place!</p>
            </div>
    
            <div
                class="box-register bg-blue-800 bg-opacity-30 p-4 md:w-full lg:w-full rounded shadow-sm my-3 mx-auto border-b-2 border-yellow-400">
                <div class="container mx-auto ">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl leading-tight arcaneStyle">Game Account's</h2>
                        <div class="flex w-4/3 ">        
                            <livewire:create-game-account/>
                            <div class="p-1">
                                <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{route('logout.master_account')}}">LogOut</a>
                                {{-- <x-jet-button class="p-3" type="button" href="{{route('logout.master_account')}}">
                                    {{ __("LogOut") }}
                                </x-jet-button> --}}
                            </div>
                        </div>
                    </div>
                    {{-- Accounts Table --}}
                    <livewire:account-table/>
                </div>
            </div>
            <h3 class="text-pre text-center text-3xl arcaneStyle">Have <span class="text-yellow-500">fun</span> playing and remembering
                the best moments of ragnarok, with <span class="text-yellow-500">Arcane RO</span> own mechanics!</h3>
        </div>
    </div>    
</x-app-layout>
