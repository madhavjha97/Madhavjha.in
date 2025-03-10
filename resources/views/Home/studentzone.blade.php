<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Zone</title>
    <script>
        tailwind.config = {
            darkMode: 'class'
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
<!-- Header -->
<nav class="bg-white dark:bg-gray-800 shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">EduZone</span>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#courses" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Courses</a>
                <a href="#notes" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Notes</a>
                <a href="#career" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Career Path</a>
                <a href="#counseling" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">Counseling</a>
            </div>
            <div class="flex items-center space-x-4">
                <button id="theme-toggle" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400">
                    <i class="bx bx-sun text-xl dark:hidden"></i>
                    <i class="bx bx-moon text-xl hidden dark:block"></i>
                </button>
                <a href="/login" class="bg-blue-600 dark:bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">Login</a>
                <a href="/register" class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300 text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600">Register</a>
            </div>
        </div>
    </div>
</nav>

<!-- Courses Section -->
<section class="py-16 bg-blue-50 dark:bg-gray-800" id="courses">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">Featured Courses</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Course Card -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                <img src="https://via.placeholder.com/400x250" alt="Course" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 dark:text-white">Web Development Bootcamp</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Master full-stack web development</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 dark:text-blue-400 font-bold">₹2999</span>
                        <button class="bg-blue-600 dark:bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">Enroll Now</button>
                    </div>
                </div>
            </div>
            <!-- Add more course cards -->
        </div>
    </div>
</section>

<!-- Student Notes Section -->
<section class="py-16 bg-white dark:bg-gray-900" id="notes">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">Study Materials</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Note Card -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition">
                <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg mb-4">
                    <i class='bx bx-book text-3xl text-blue-600 dark:text-blue-400'></i>
                </div>
                <h3 class="font-bold mb-2 dark:text-white">Mathematics Notes</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Class 12 CBSE Complete notes</p>
                <button class="text-blue-600 dark:text-blue-400 hover:underline">Download PDF</button>
            </div>
            <!-- Add more note cards -->
        </div>
    </div>
</section>

<!-- Career Path Section -->
<section class="py-16 bg-blue-50 dark:bg-gray-800" id="career">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">Career Paths</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Career Card -->
            <div class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition">
                <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg mb-4">
                    <i class='bx bx-briefcase text-3xl text-blue-600 dark:text-blue-400'></i>
                </div>
                <h3 class="font-bold mb-2 dark:text-white">Engineering</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4">Explore various engineering disciplines</p>
                <button class="text-blue-600 dark:text-blue-400 hover:underline">View Details</button>
            </div>
            <!-- Add more career cards -->
        </div>
    </div>
</section>

<!-- Counseling Section -->
<section class="py-16 bg-white dark:bg-gray-900" id="counseling">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">Career Counseling</h2>
        <div class="max-w-2xl mx-auto bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md">
            <form class="space-y-6">
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                    <input type="text" class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-2">Email</label>
                    <input type="email" class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-300 mb-2">Preferred Career</label>
                    <select class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                        <option>Engineering</option>
                        <option>Medical</option>
                        <option>Arts</option>
                    </select>
                </div>
                <button class="w-full bg-blue-600 dark:bg-blue-700 text-white p-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">Book Session</button>
            </form>
        </div>
    </div>
</section>

<!-- Login Modal -->
<div id="login" class="fixed inset-0 bg-black bg-opacity-50 hidden dark:bg-opacity-70">
    <div class="max-w-md mx-auto mt-20 bg-white dark:bg-gray-800 p-8 rounded-xl">
        <h2 class="text-2xl font-bold mb-6 dark:text-white">Student Login</h2>
        <form>
            <div class="mb-4">
                <input type="email" placeholder="Email"
                       class="w-full p-3 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password"
                       class="w-full p-3 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <button class="w-full bg-blue-600 dark:bg-blue-700 text-white p-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">Login</button>
        </form>
    </div>
</div>

<script>
    // Dark Mode Toggle

        const themeToggle = document.getElementById('theme-toggle');
        const htmlElement = document.documentElement;
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');

        // Check saved theme in localStorage
        const savedTheme = localStorage.getItem('theme') || 'light';

        // Apply theme
        if (savedTheme === 'dark') {
        htmlElement.classList.add('dark');
        sunIcon.classList.add('hidden');
        moonIcon.classList.remove('hidden');
    }

        // Toggle theme
        themeToggle.addEventListener('click', () => {
        const isDark = htmlElement.classList.toggle('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');

        // Toggle icons
        sunIcon.classList.toggle('hidden', isDark);
        moonIcon.classList.toggle('hidden', !isDark);
    });


    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
</body>
</html>
