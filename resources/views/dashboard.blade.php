<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Platform As A Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-slate-100 flex flex-col min-h-screen">

    <nav class="bg-[#002633] border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://ucarecdn.com/fdc656a3-fce4-442b-8fe2-560beb9c6246/1732279541536.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Platform as a Service</span>
            </a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-black rounded-lg bg-black md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#002633]">
                    <li>
                        <a href="#" class="block py-2 px-3 rounded {{ request()->routeIs('earlysme') ? 'text-red-700' : 'text-gray-900' }} md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}" class="block py-2 px-3 rounded md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('/') }}" class="block py-2 px-3 rounded {{ request()->routeIs('posts.index') ? 'text-blue-800' : 'text-gray-900' }} md:bg-transparent md:p-0 dark:text-white md:dark:hover:text-blue-500">Framework</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="block py-2 px-3 rounded {{ request()->routeIs('login') ? 'text-blue-600' : 'text-gray-900' }}  md:hover:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
      
      <h1 class="text-center text-3xl font-normal text-black absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        Jam Manusia Terburu-Buru, Jam Tuhan Selalu Tepat Waktu
        <br>
        <p class="text-center text-sm font-extralight">-king mudrik</p>
    </h1>   

</body>
