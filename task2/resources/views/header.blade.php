<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TheWeighter</title>

        @vite(['resources/js/app.js', 'resources/css/app.css'])
    </head>
    <body>
    <div class="flex w-full h-[7vh] justify-between items-center border-b-2 border-gray-300">
      <div class="flex h-[6vh] justify-center items-center ml-7 cursor-pointer">
        <a href="/dashboard">
        <img src="{{URL::asset('/images/title.png')}}" class="flex h-[6vh]"></img>
        </a>
      </div>
      <div class="flex justify-center items-center mr-7">
        <a href="/info" class="flex w-36 h-[4vh] justify-center items-center border-b-2 border-menuitem mr-7 text-[15px] font-[550]">기능 소개</a>
        <a href="{{ url('/barcode') }}"  type="button" class="flex w-36 h-[4vh] justify-center items-center border-b-2 border-menuitem mr-7 text-[15px] font-[550]">BARCODE</a>
        <button class="flex w-36 h-[4vh] justify-center items-center border-b-2 border-menuitem mr-7 text-[15px] font-[550]">MENU</button>
        <button class="flex w-36 h-[4vh] justify-center items-center border-b-2 border-menuitem mr-7 text-[15px] font-[550]">MENU</button>
        <a href="{{ url('/qna') }}" type="button" class="flex w-36 h-[4vh] justify-center items-center border-b-2 border-menuitem mr-7 text-[15px] font-[550]">고객 지원</a>
        @if (Route::has('login'))
          @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex w-36 h-[4vh] justify-center items-center border-b-2 border-menuitem mr-7 text-[15px] font-[550]">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
          @else
          <a href="{{ route('login') }}"    type="button" class="flex w-40 h-[4vh] justify-center items-center border-2 border-black mr-5 text-menu font-menu font-[550]">로그인</a>
          @if (Route::has('register'))
          <a href="{{ route('register') }}" type="button" class="flex w-40 h-[4vh] justify-center items-center border-2 border-black mr-5 text-menu font-menu font-[550]">회원가입</a></a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
    </div>
    </body>
</html>