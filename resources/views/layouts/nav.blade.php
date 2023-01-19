
    <div class="navbr" style="background-color:rgb(0, 51, 102);color:white;height:120px;width:auto;">
    <div class="img" style="width:100px">
        <img src="images/kitchen.png" alt="logo" style="height:115px;width:100px;">
    </div>
    <div class="rname" style="position:absolute;margin-left:100px;margin-top:-80px;font-size:60px;font-family:Brush Script MT, cursive">Dee's Kitchen
    </div>
        
    </div>
    @if (Route::has('user/login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('user/register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif