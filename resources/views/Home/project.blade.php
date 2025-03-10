@extends('Home.Layout.otherpageLayout')
@section('title', 'Projects - Madhav Jha')
<style>
    .project-card {
        transition: transform 0.3s, box-shadow 0.3s;
        background: linear-gradient(145deg, #ffffff, #f8f9ff);
    }
    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(79, 70, 229, 0.1);
    }
    .tech-tag {
        position: relative;
        overflow: hidden;
    }
    .tech-tag::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
        transition: 0.3s;
    }
    .tech-tag:hover::after {
        left: 100%;
    }
    .project-modal {
        background: rgba(0,0,0,0.8);
        backdrop-filter: blur(5px);
    }
</style>
@section('content')

    <!-- Projects Section -->
    <div class="container mx-auto px-4 py-12 max-w-7xl">
        <h1 class="text-4xl font-bold text-indigo-600 mb-8 text-center animate-slide-in">
            My <span class="text-gray-800">Projects</span>
        </h1>

        <!-- Project Filters -->
        <div class="flex flex-wrap gap-3 mb-12 justify-center">
            <button class="filter-btn px-4 py-2 rounded-full bg-indigo-600 text-white">All</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-indigo-100 text-indigo-800">Web Apps</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-indigo-100 text-indigo-800">E-commerce</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-indigo-100 text-indigo-800">WordPress</button>
        </div>

        <!-- Project Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="project-card relative p-6 rounded-2xl cursor-pointer" data-category="web-apps">
                <div class="relative overflow-hidden rounded-xl mb-4">
                    <img src="project-placeholder.jpg" alt="LMS Project"
                         class="w-full h-48 object-cover transform transition duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-indigo-600 opacity-0 hover:opacity-20 transition-opacity"></div>
                </div>
                <h3 class="text-xl font-bold mb-2">Learning Management System</h3>
                <p class="text-gray-600 mb-4">Custom LMS platform with course management and student tracking</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tech-tag px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Laravel</span>
                    <span class="tech-tag px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">React</span>
                    <span class="tech-tag px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">MySQL</span>
                </div>
                <div class="flex justify-between items-center">
                    <a href="#" class="text-indigo-600 hover:underline">Live Demo</a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600">
                        <i class='bx bxl-github text-xl'></i>
                    </a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card relative p-6 rounded-2xl cursor-pointer" data-category="e-commerce">
                <div class="relative overflow-hidden rounded-xl mb-4">
                    <img src="project-placeholder.jpg" alt="E-commerce Platform"
                         class="w-full h-48 object-cover transform transition duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-indigo-600 opacity-0 hover:opacity-20 transition-opacity"></div>
                </div>
                <h3 class="text-xl font-bold mb-2">E-commerce Platform</h3>
                <p class="text-gray-600 mb-4">Full-featured online shopping platform with payment integration</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tech-tag px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">PHP</span>
                    <span class="tech-tag px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Vue.js</span>
                    <span class="tech-tag px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">AWS</span>
                </div>
                <div class="flex justify-between items-center">
                    <a href="#" class="text-indigo-600 hover:underline">Case Study</a>
                    <a href="#" class="text-gray-500 hover:text-indigo-600">
                        <i class='bx bxl-github text-xl'></i>
                    </a>
                </div>
            </div>

            <!-- Add more projects following the same pattern -->
        </div>
    </div>

    <!-- Project Modal -->
    <div id="projectModal" class="project-modal fixed inset-0 hidden z-50 bg-black bg-opacity-50">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white rounded-2xl p-8 max-w-3xl w-full mx-4 relative">
                <button id="closeModal" class="absolute top-4 right-4 text-2xl text-gray-500 hover:text-indigo-600">
                    &times;
                </button>
                <div id="modalContent">
                    <!-- Dynamic content will be injected here via JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Project Filter
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.textContent.toLowerCase();
                document.querySelectorAll('.project-card').forEach(card => {
                    const cardCategory = card.dataset.category;
                    if (category === 'all' || cardCategory.includes(category)) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });
        });

        // Modal Handling
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('click', () => {
                const title = card.querySelector('h3').textContent;
                const description = card.querySelector('p').textContent;
                const techs = Array.from(card.querySelectorAll('.tech-tag')).map(t => t.textContent).join(', ');

                const modalContent = `
                <h2 class="text-3xl font-bold mb-4">${title}</h2>
                <p class="text-gray-600 mb-6">${description}</p>
                <div class="mb-6">
                    <h3 class="font-semibold mb-2">Technologies Used:</h3>
                    <p class="text-indigo-600">${techs}</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Live Demo</a>
                    <a href="#" class="px-6 py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50">GitHub</a>
                </div>
            `;

                document.querySelector('#modalContent').innerHTML = modalContent;
                document.querySelector('#projectModal').classList.remove('hidden');
            });
        });

        // Close Modal Function
        function closeModal() {
            document.querySelector('#projectModal').classList.add('hidden');
        }

        // Close Modal Button
        document.addEventListener('click', (event) => {
            const modal = document.querySelector('#projectModal');
            if (event.target.matches('#closeModal') || event.target === modal) {
                closeModal();
            }
        });

    </script>



@endsection


