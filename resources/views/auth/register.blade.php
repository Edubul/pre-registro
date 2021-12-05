<x-guest-layout>
    <div class="my-auto">
        <div class="flex flex-col p-3">
            <div class="text-pre text-center">               
                <h2 class="text-5xl font-medium text-yellow-500 arcaneStyle">PRE-REGISTER</h2>
           <p class="text-xl arcaneStyle">All roArc players will receive a starter reward for early pre-registration! </p>
        </div>
        
       <div class="box-register bg-blue-800 bg-opacity-30 p-4 md:w-full lg:w-2/4 rounded shadow-sm my-3 mx-auto border-b-2 border-yellow-400">
           <form method="POST" action="{{ route('register') }}">
               @csrf
               <p class="font-mono text-sm tracking-tighter font-bold">Please create a master account to pre-register or <a class="text-yellow-500 underline" href="{{route('login')}}">login</a>.</p>
               <div class="h-full mt-3 text-black">
                    <input class="p-2 w-full mt-3 rounded-sm border-none" value="{{old('email')}}" type="email" placeholder="Email" name="email" id="">
                    <input class="p-2 w-full mt-3 rounded-sm border-none" value="{{old('username')}}" type="text" placeholder="Master Account Username" name="username" id="">
                    <input class="p-2 w-full mt-3 rounded-sm border-none" type="password" placeholder="Password" name="pass" id="">
                    <input class="p-2 w-full mt-3 rounded-sm border-none" type="password" placeholder="Repeat Password" name="pass_confirmation" id="">
                    <x-question-select/>
                    <input class="p-2 w-full mt-3 rounded-sm border-none" type="text" placeholder="Answer question" name="question_response" id="">
                </div>
    
                <div class="checkbox flex mb-3 mt-2 items-center">
                    <input type="checkbox" name="confirm_rules" id="confirm" class="border-none rounded-full">
                    <label for="confirm" class="font-mono text-sm ml-2 tracking-tighter font-bold">I have read and agree to the <a class="text-yellow-500" href="https://discord.com/channels/838866246086426664/871895994655199343/909939556407722055">reglament server</a></label>
                </div>
                <button type="submit" class="btn-register rounded p-2 flex mx-auto border-2 border-white hover:bg-white hover:text-blue-600 arcaneStyle">Pre-register NOW!</button>
            </form>
        </div>
        <h3 class="text-pre text-center text-3xl arcaneStyle"> <span class="text-yellow-500 arcaneStyle">{{$usersCount}}</span> Players are register, What are you waiting for!</h3>
    </div>
</x-guest-layout>
