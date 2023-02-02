@section('header')
<head>
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<header class="text-gray-600 body-font bg-red-300">
    <div class="mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" class="w-10 h-10 text-white p-1 bg-emerald-500 rounded-full" viewBox="0 0 22 22">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
        </svg>
        <span class="ml-3 text-2xl">EFT WeponCustom</span>
      </a>
        <button class="border-2 border-black rounded-full bg-green-400 w-24" onclick="location.href='/register'" >
          新規登録
        </button>
      @guest
        <button class="border-2 border-black rounded-full bg-green-400 w-24" onclick="location.href='/login'"　>
          ログイン
        </button>
      @endguest
      @auth
      <form action="/logout" method="POST">
        @csrf
        <input class="border-2 border-black rounded-full bg-green-400 w-24" type="submit" value="ログアウト">
      </form>
      @endauth
    </div>
</header>
@endsection