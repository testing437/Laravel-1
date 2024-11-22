<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Platform As A Service</title>
    <!-- Tailwind CSS dan Flowbite CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#002633] min-h-screen">
    
    <div class="absolute top-4 left-4">
        <button class="text-white flex items-center">
            <img src="https://ucarecdn.com/4c40b536-90e4-4239-bf9d-da43bf5b1d41/icon_ft_bg__1_removebgpreview.png" alt="EN" class="w-8 h-8 mr-2">
            Platform as a Service
        </button>
    </div>

    <div class="min-h-screen flex flex-col items-center justify-center">

        {{-- <div class="mb-8">
            <h1 class="text-white text-3xl font-bold">Platform as a Service</h1>
        </div> --}}

        <!-- Login form -->
        <div class="w-full max-w-md px-6">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-semibold text-white mb-2">Login</h1>
                {{-- <p class="text-gray-300">gatau lah</p> --}}
            </div>

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <input type="text" name="Username" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                        placeholder="Username" required>
                </div>

                <div>
                    <input type="password" name="password" 
                        class="bg-[#003344] border-0 text-white text-sm rounded-lg focus:ring-[#00ff9d] focus:border-[#00ff9d] block w-full p-3 placeholder-gray-400"
                        placeholder="Password" required>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" type="checkbox" 
                            class="w-4 h-4 rounded bg-[#003344] border-gray-600 text-[#00ff9d] focus:ring-[#00ff9d]">
                        <label for="remember" class="ml-2 text-sm text-white">Ingat saya</label>
                    </div>
                    <a href="#" class="text-[#00ff9d] text-sm hover:underline">Lupa password?</a>
                </div>

                <button type="submit" 
                    class="w-full text-white bg-[#00ff9d] hover:bg-[#00dd85] focus:ring-4 focus:ring-[#00ff9d]/50 font-medium rounded-lg text-sm px-5 py-3 text-center mt-6">
                    Login
                </button>
            </form>
        </div>

        <div class="text-center text-sm text-white mt-3">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-[#00ff9d] hover:underline">Daftar disini</a>
        </div>
        
        {{-- <div class="mt-8 text-center text-gray-400 text-sm">
            <p>Nyoba halaman login, buat kelompok cc</p>
            <p>Designed by asep bensin</p>
        </div> --}}
    </div>

    <!-- Flowbite JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>