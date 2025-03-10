@extends('Home.Layout.otherpageLayout')
@section('title', 'Contact - Madhav Jha')

@section('content')

    <!-- Add this section above the footer -->
    <section class="py-16 bg-blue-50 dark:bg-gray-800" id="contact">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 dark:text-white">Contact Us</h2>


            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md">
                    <form class="space-y-6" action="{{ route('savecontact') }}" method="POST">
                        @csrf
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                            <input type="text" name="name"
                                   class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <input type="email" name="email"
                                   class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2">Mobile</label>
                            <input type="phone" name="phone"
                                   class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                            <input type="text" name="subject"
                                   class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                   required>
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2">Message</label>
                            <textarea rows="5" name="message"
                                      class="w-full p-3 border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-white"
                                      required></textarea>
                        </div>
                        <button class="w-full bg-blue-600 dark:bg-blue-700 text-white p-3 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Details & Social Media -->
                <div class="space-y-8">
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold mb-6 dark:text-white">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class='bx bx-phone text-2xl text-blue-600 dark:text-blue-400 mr-4'></i>
                                <div>
                                    <p class="font-medium dark:text-gray-300">Phone</p>
                                    <p class="text-gray-600 dark:text-gray-400">+91 74209 89796</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class='bx bx-envelope text-2xl text-blue-600 dark:text-blue-400 mr-4'></i>
                                <div>
                                    <p class="font-medium dark:text-gray-300">Email</p>
                                    <p class="text-gray-600 dark:text-gray-400">madhavjha@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class='bx bx-map text-2xl text-blue-600 dark:text-blue-400 mr-4'></i>
                                <div>
                                    <p class="font-medium dark:text-gray-300">Address</p>
                                    <p class="text-gray-600 dark:text-gray-400">Nagpur, Maharashtra, India</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md">
                        <h3 class="text-xl font-bold mb-6 dark:text-white">Connect on Social Media</h3>
                        <div class="flex space-x-6">
                            <a href="https://linkedin.com" target="_blank"
                               class="p-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 dark:hover:bg-blue-500 transition">
                                <i class='bx bxl-linkedin text-2xl'></i>
                            </a>
                            <a href="https://github.com" target="_blank"
                               class="p-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 dark:hover:bg-blue-500 transition">
                                <i class='bx bxl-github text-2xl'></i>
                            </a>
                            <a href="https://madhavjha.in" target="_blank"
                               class="p-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 dark:hover:bg-blue-500 transition">
                                <i class='bx bx-globe text-2xl'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


