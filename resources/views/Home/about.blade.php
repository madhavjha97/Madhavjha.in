@extends('Home.Layout.otherpageLayout')
@section('title', 'About Us - Madhav Jha')

@section('content')

<div class="container mx-auto px-4 py-8 max-w-4xl">

    <!-- Header Section -->
    <header class="text-center mb-8 animate-fade-in">
        <h1 class="text-4xl font-bold text-indigo-600 mb-2">Madhav Jha</h1>
        <p class="text-xl text-gray-600">Fullstack Developer</p>
        <div class="mt-4 flex justify-center space-x-4">
            <a href="tel:+917420989796" class="flex items-center text-gray-600 hover:text-indigo-600">
                <i class='bx bx-phone mr-2'></i>+91-7420989796
            </a>
            <a href="mailto:madhavjha@gmail.com" class="flex items-center text-gray-600 hover:text-indigo-600">
                <i class='bx bx-envelope mr-2'></i>madhavjha@gmail.com
            </a>
        </div>
    </header>


    <!-- Main Content Grid -->
    <div class="grid md:grid-cols-3 gap-8">


        <!-- Left Column -->
        <div class="md:col-span-1 space-y-8">
            <!-- Personal Details -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <h2 class="text-xl font-semibold mb-4 text-indigo-600">Personal Details</h2>
                <ul class="space-y-2">
                    <li><strong>Experience:</strong> 4+ Years</li>
                    <li><strong>DOB:</strong> Aug 02, 1997</li>
                    <li><strong>Languages:</strong> English, Hindi, Maithili, Marathi</li>
                </ul>
            </div>

            <!-- Skills Cloud -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                <h2 class="text-xl font-semibold mb-4 text-indigo-600">Tech Stack</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Laravel</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">React.js</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">AWS</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Docker</span>
                    <!-- Add remaining skills similarly -->
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="md:col-span-2 space-y-8">
            <!-- Experience -->
            <section>
                <h2 class="text-2xl font-bold mb-6 text-indigo-600">Experience</h2>

                <!-- Experience Item -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow mb-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="font-semibold text-lg">Full Stack Developer</h3>
                            <p class="text-indigo-600">CSI Computech</p>
                        </div>
                        <span class="text-gray-500">Jan 2024 - Present</span>
                    </div>
                    <ul class="mt-4 list-disc pl-5 space-y-2">
                        <li>Designed and developed end-to-end web applications</li>
                        <li>Built and integrated RESTful APIs</li>
                        <li>Optimized database performance</li>
                    </ul>
                </div>

                <!-- Add other experience items similarly -->
            </section>

            <!-- Education -->
            <section>
                <h2 class="text-2xl font-bold mb-6 text-indigo-600">Education</h2>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between">
                        <div>
                            <h3 class="font-semibold">M.Sc (Computer Science)</h3>
                            <p class="text-gray-600">Nagpur University</p>
                        </div>
                        <span class="text-gray-500">2024</span>
                    </div>
                    <!-- Add other education items -->
                </div>
            </section>

            <!-- Skills Section -->
            <section class="my-12" id="skills">
                <h2 class="text-3xl font-bold mb-6 text-indigo-600">Technical Skills</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="skill-card p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <i class='bx bx-code-alt text-2xl text-indigo-600'></i>
                        <h3 class="font-semibold mt-2">Frontend</h3>
                        <p class="text-sm">React, Vue, HTML/CSS</p>
                    </div>
                    <div class="skill-card p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <i class='bx bx-server text-2xl text-indigo-600'></i>
                        <h3 class="font-semibold mt-2">Backend</h3>
                        <p class="text-sm">PHP, Laravel, MySQL</p>
                    </div>
                    <!-- Add more skill cards -->
                </div>
            </section>

            <!-- Projects Section -->
            <section class="my-12" id="projects">
                <h2 class="text-3xl font-bold mb-6 text-indigo-600">Projects</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="project-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                        <h3 class="text-xl font-semibold">E-commerce Platform</h3>
                        <p class="text-gray-600 mt-2">Built with Laravel and React.js, integrated payment gateways</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="tech-tag px-2 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Laravel</span>
                            <span class="tech-tag px-2 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">React</span>
                        </div>
                    </div>
                    <div class="project-card bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition">
                        <h3 class="text-xl font-semibold">LMS System</h3>
                        <p class="text-gray-600 mt-2">Learning Management System with WordPress integration</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="tech-tag px-2 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">WordPress</span>
                            <span class="tech-tag px-2 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">PHP</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>




@endsection
