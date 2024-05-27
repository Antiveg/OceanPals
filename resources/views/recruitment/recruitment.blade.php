@extends('layouts/main_layout')

@section('container')
<section class="bg-gradient-to-tr from-teal-50 to-blue-200 py-10">
    <div class="py-16 bg-white">
        <div  class="container m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20">
            <div class="justify-center text-center gap-6 md:text-left md:flex lg:items-center  lg:gap-16">
                <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                    <div class="flex flex-col gap-5">
                        <h1 class="text-4xl text-gray-700 font-bold lg:text-5xl xl:text-6xl">Join <span class="bg-gradient-to-r from-violet-500 to-blue-500 bg-clip-text text-transparent">OceanPals</span></h1>
                        <h1 class="text-4xl text-gray-700 font-bold lg:text-5xl xl:text-6xl">Become <span class="bg-gradient-to-r from-violet-500 to-blue-500 bg-clip-text text-transparent">Volunteer</span></h1>
                    </div>
                    <p class="text-xl text-black">Are you ready to join and become our next volunteer on OceanPals? If you have interest on nature, then OceanPals are the perfect choice for you!</p>
                </div>
                <div class="grid grid-cols-5 grid-rows-4 gap-4 md:w-5/12 lg:w-6/12">
                    <div class="col-span-2 row-span-4">
                        <img src="/assets/volunteer/volunteer-1.png" class="rounded-full" width="640" height="960" alt="shoes" loading="lazy">
                    </div>
                    <div class="col-span-2 row-span-2">
                        <img src="/assets/volunteer/volunteer-2.png" class="w-full h-full object-cover object-top rounded-xl" width="640" height="640" alt="shoe" loading="lazy">
                    </div>
                    <div class="col-span-3 row-span-3">
                        <img src="/assets/volunteer/volunteer-3.png" class="w-full h-full object-cover object-top rounded-xl" width="640" height="427" alt="shoes" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 overflow-hidden">
        <div class="container m-auto px-6 space-y-8 text-gray-500 md:px-12">
            <div>
                <span class="text-gray-600 text-lg font-semibold">Volunteer Division</span>
                <h2 class="mt-4 text-2xl text-gray-900 font-bold md:text-4xl">Choose 1 of 4 OceanPals Volunteer Division</h2>
            </div>
            <div class="mt-16 grid border divide-x divide-y rounded-xl overflow-hidden sm:grid-cols-2 lg:divide-y-0 lg:grid-cols-3 xl:grid-cols-4">
                <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="/assets/volunteer/marketing-icon.svg" class="w-10" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-2xl text-gray-800 font-medium transition group-hover:text-blue-700">Marketing Division</h5>
                            <p class="text-lg text-gray-600">This division represents the face of OceanPals. Your task is to promote the OceanPals activity and recruit new volunteers!</p>
                        </div>
                        <a href="/recruitment/detail" class="flex justify-between items-center group-hover:text-blue-700">
                            <span class="text-sm">Read more</span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="/assets/volunteer/beach-icon.svg" class="w-10" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-2xl text-gray-800 font-medium transition group-hover:text-blue-700">Beach Combing Division</h5>
                            <p class="text-lg text-gray-600">Participate as the representative of OceanPals on cleaning the beach! Benefits you get are exclusive merchandise, bonus fees, and more!</p>
                        </div>
                        <a href="/recruitment/detail" class="flex justify-between items-center group-hover:text-blue-700">
                            <span class="text-sm">Read more</span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="/assets/volunteer/computer-icon.svg" class="w-10" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-2xl text-gray-800 font-medium transition group-hover:text-blue-700">IT Development</h5>
                            <p class="text-lg text-gray-600">Help us maintain the integrity structures of our website! Ensuring there are no bugs and uneaseness for users</p>
                        </div>
                        <a href="/recruitment/detail" class="flex justify-between items-center group-hover:text-blue-700">
                            <span class="text-sm">Read more</span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
                <div class="relative group bg-white transition hover:z-[1] hover:shadow-2xl">
                    <div class="relative p-8 space-y-8">
                        <img src="/assets/volunteer/event-icon.svg" class="w-10" width="512" height="512" alt="burger illustration">

                        <div class="space-y-2">
                            <h5 class="text-2xl text-gray-800 font-medium transition group-hover:text-blue-700">Event Organizer</h5>
                            <p class="text-lg text-gray-600">Envision your own plans by creating OceanPals events for beach cleaning! You could ask cooperation with other companies or by yourself</p>
                        </div>
                        <a href="/recruitment/detail" class="flex justify-between items-center group-hover:text-blue-700">
                            <span class="text-sm">Read more</span>
                            <span class="-translate-x-4 opacity-0 text-2xl transition duration-300 group-hover:opacity-100 group-hover:translate-x-0">&RightArrow;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection