<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Service at Doorstep</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>

    <style>
        .menu-hidden {
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.3s ease-in-out;
        }
        .menu-visible {
            transform: scaleY(1);
        }
    </style>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('menu-hidden');
            menu.classList.toggle('menu-visible');
        }

        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobile-menu');
            const button = document.getElementById('menu-button');
            if (!menu.contains(event.target) && !button.contains(event.target)) {
                menu.classList.add('menu-hidden');
                menu.classList.remove('menu-visible');
            }
        });
    </script>
</head>
<body class="font-roboto bg-gray-100">

<!-- Header -->
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Service at Doorstep</h1>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-6">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">Services</a>
            <a href="#" class="hover:underline">About Us</a>
            <a href="#" class="hover:underline">Contact</a>

            @if (auth()->check())
                <span class="text-gray-200">Welcome, {{ auth()->user()->name }}!</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-400 hover:text-red-500">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:underline">Login</a>
            @endif
        </nav>

        <!-- Mobile Menu Button -->
        <button id="menu-button" class="md:hidden text-white text-2xl" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-menu" class="menu-hidden md:hidden absolute w-full bg-blue-700 text-white text-center p-4">
        <ul class="space-y-4">
            <li><a href="#" class="block hover:underline">Home</a></li>
            <li><a href="#" class="block hover:underline">Services</a></li>
            <li><a href="#" class="block hover:underline">About Us</a></li>
            <li><a href="#" class="block hover:underline">Contact</a></li>

            @if (auth()->check())
                <div class="flex items-center space-x-2">
                    @if(auth()->user()->profile_image)
                        <!-- Show user profile image -->
                        <img src="{{ asset(auth()->user()->profile_image) }}" alt="User Image" class="w-10 h-10 rounded-full object-cover border-2 border-white">
                    @else
                        <!-- Show initials if no profile image -->
                        @php
                            $nameParts = explode(' ', trim(auth()->user()->name));
                            $initials = strtoupper(substr($nameParts[0], 0, 1) . (isset($nameParts[1]) ? substr($nameParts[count($nameParts) - 1], 0, 1) : ''));
                        @endphp
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-700 text-white font-bold text-lg">
                            {{ $initials }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-400 hover:text-red-500">Logout</button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="hover:underline">Login</a>
            @endif

        </ul>
    </nav>
</header>

<!-- Hero Section -->
<section class="py-20 text-center bg-white">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-4">Find the Best Local Workers and Craftsmen</h2>
        <p class="text-lg mb-8">Hire skilled professionals for any job, big or small, at your convenience.</p>
        <button class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700">Get Started</button>
    </div>
</section>

<!-- Services Section -->
<section class="container mx-auto py-20">
    <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4">
        @php
        $services = [
            ['Plumbing', 'https://storage.googleapis.com/a1aa/image/ztlgs4O5ahHuy_bipmNlciR6C2iB3Fy823KWzlH6jl0.jpg'],
            ['Electrical', 'https://storage.googleapis.com/a1aa/image/5fczmX1s1_iUfdBXArz04u8EJ8o8szCAv6Wg2oItJjQ.jpg'],
            ['Carpentry', 'https://storage.googleapis.com/a1aa/image/WxVo92JFmUG51WDgLZUnuuul3d8Fc4jbBJFvrTDjxhc.jpg'],
            ['Cleaning', 'https://storage.googleapis.com/a1aa/image/b22t3dlpi0sssUJDVadlX5QKkvF41ugYRhDWl7Z8SXU.jpg'],
            ['Painting', 'https://storage.googleapis.com/a1aa/image/jjFmqSW5zP4Ne58vTLUo69hpew0dUljBh0Ofyh96rnM.jpg'],
            ['Gardening', 'https://storage.googleapis.com/a1aa/image/ZJsabNIzDjqnwcIInSLTtZPK4FyrEA_K464oDxuWCys.jpg']
        ];
        @endphp

        @foreach ($services as $service)
            <a href="{{ route('services.show', ['slug' => Str::slug($service[0])]) }}" class="block">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition-shadow cursor-pointer">
                    <img src="{{ $service[1] }}" alt="{{ $service[0] }}" class="mx-auto mb-4 w-24 h-24 object-cover"/>
                    <h3 class="text-xl font-bold mb-2">{{ $service[0] }}</h3>
                    <p>Professional services available at your doorstep.</p>
                </div>
            </a>
        @endforeach



    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-600 text-white py-8">
    <div class="container mx-auto text-center">
        <p>© 2023 Service at Doorstep. All rights reserved.</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
            <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
            <a href="#" class="hover:text-gray-300"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</footer>

</body>
</html>
