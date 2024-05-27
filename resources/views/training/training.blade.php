@extends('layouts/main_layout')

@section('container')
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">OceanPals Training Center</h1>

            <button class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>

        <hr class="my-8 border-gray-200 dark:border-gray-700">

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="/assets/training/training-1.png" alt="">

                <div class="mt-8">
                    <span class="text-blue-500 uppercase">Environment</span>

                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                        Proper Ways to Clean Beaches
                    </h1>

                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                        Cara membersihkan pantai yang benar dan efektif. Mulai dari pemilahan sampah, alat yang relevan, dan koordinasi tim.
                    </p>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a href="#" class="text-lg font-medium text-gray-700 dark:text-gray-300 hover:underline hover:text-gray-500">
                                Aurelia Puspita, Marketing Lead
                            </a>

                            <p class="text-sm text-gray-500 dark:text-gray-400">May 22, 2024</p>
                        </div>

                        <a href="/training/detail" class="inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                    </div>

                </div>
            </div>

            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="/assets/training/training-2.png" alt="">

                <div class="mt-8">
                    <span class="text-blue-500 uppercase">Technology</span>

                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                        Getting Started with OceanPals</h1>

                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                        Cara menggunakan aplikasi ini “OceanPals” untuk menemukan kegiatan sukarelawan yang sesuai bagi mu dan memaksimalkan kontribusi masyarakat
                    </p>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a href="#" class="text-lg font-medium text-gray-700 dark:text-gray-300 hover:underline hover:text-gray-500">
                                Christopher H.G, IT Team
                            </a>

                            <p class="text-sm text-gray-500 dark:text-gray-400">April 30, 2024</p>
                        </div>

                        <a href="/training/detail" class="inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                    </div>

                </div>
            </div>

            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="/assets/training/training-3.png" alt="">

                <div class="mt-8">
                    <span class="text-blue-500 uppercase">Environment</span>

                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                        Systems of Garbage Sorting
                    </h1>

                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                        Pemahaman mendalam tentang sistem pemilahan sampah, mulai dari sampah organik, anorganik, dan banyak kategori sampah lainnya.
                    </p>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a href="#" class="text-lg font-medium text-gray-700 dark:text-gray-300 hover:underline hover:text-gray-500">
                                Stanic Dylan, EO
                            </a>

                            <p class="text-sm text-gray-500 dark:text-gray-400">April 19, 2024</p>
                        </div>

                        <a href="/training/detail" class="inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection