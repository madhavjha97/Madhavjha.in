<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Madhav Jha')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

<!-- Header Menu -->
<!-- Header Menu -->
<nav class="sticky top-0 bg-indigo-600 shadow-lg z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4 relative">

            <!-- Logo (Left) -->
            <div class="text-white font-bold text-lg">Madhav Jha</div>

            <!-- Centered Menu -->
            <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 space-x-6">
                <a href="#home" class="text-white hover:text-indigo-200 transition">Home</a>
                <a href="#skills" class="text-white hover:text-indigo-200 transition">Skills</a>
                <a href="#experience" class="text-white hover:text-indigo-200 transition">Experience</a>
                <a href="#projects" class="text-white hover:text-indigo-200 transition">Projects</a>
            </div>

            <!-- Right Buttons -->
            <div class="ml-auto flex space-x-4">

                <a href="#contact" class="px-4 py-2 bg-cyan-500 text-white rounded-lg hover:bg-cyan-800">Contact</a>
                <a href="/login" class="px-4 py-2 bg-white text-indigo-600 rounded-lg hover:bg-gray-200">Login</a>
                <a href="/register" class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-700">Register</a>
            </div>
        </div>
    </div>
</nav>


@yield('content')




<!-- Social Media Section -->
<section class="my-12 text-center" id="contact">
    <h2 class="text-3xl font-bold mb-6 text-indigo-600">Connect With Me</h2>
    <div class="flex justify-center space-x-6">
        <a href="https://linkedin.com" target="_blank" class="social-icon p-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">
            <i class='bx bxl-linkedin text-2xl'></i>
        </a>
        <a href="https://github.com" target="_blank" class="social-icon p-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">
            <i class='bx bxl-github text-2xl'></i>
        </a>
        <a href="https://madhavjha.in" target="_blank" class="social-icon p-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">
            <i class='bx bx-globe text-2xl'></i>
        </a>
    </div>
</section>


<!-- Social Links -->
<div class="mt-8 text-center">
    <a href="https://madhavjha.in" target="_blank"
       class="inline-flex items-center px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
        <i class='bx bx-globe mr-2'></i> Portfolio Website
    </a>
</div>
</div>

<br>


<footer class="bg-indigo-600 text-white py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex space-x-4">
            <button onclick="window.history.back()" class="hover:text-indigo-200 transition">
                <i class='bx bx-arrow-back mr-2'></i>Back
            </button>
            <a href="#home" class="hover:text-indigo-200 transition">
                <i class='bx bx-home mr-2'></i>Home
            </a>
        </div>
        <div class="text-sm">
            © 2024 Madhav Jha
        </div>
    </div>
</footer>


<script>
    // Simple hover effect for interactive elements
    document.querySelectorAll('.hover-effect').forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.classList.add('shadow-lg');
        });
        item.addEventListener('mouseleave', () => {
            item.classList.remove('shadow-lg');
        });
    });
</script>
</body>
</html>
