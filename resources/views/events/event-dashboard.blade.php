@extends('layouts/main_layout')

@section('container')
<section class="bg-gradient-to-tr from-teal-50 to-blue-200">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">

        {{-- Card Upper --}}
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
                    </svg>
                    Event
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Event Description</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Details of the current event</p>
                <img src="/assets/event/ancol-beach-map.png" alt="" class="rounded-xl">
                <p class="mt-4 text-4xl font-normal text-gray-500 dark:text-gray-400 mb-2">
                    Ancol Beach Cleanup
                </p>
                <p class="mt-2 text-xl font-normal text-black dark:text-gray-400 mb-4">
                    Ancol, Daerah Khusus Ibu Kota Jakarta
                </p>
                <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                    <li>Points : 100</li>
                    <li>Date : 24 May 2024</li>
                    <li>Time : 09:30 WIB</li>
                </ul>
                {{-- <a href="/ranking" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">View Ranking
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a> --}}
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    Guide
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">OceanPals Guide</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Here are the guides to finish the event</p>
                <ol class="mb-5 max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">
                    <li>
                        Ensure that <span class="font-semibold text-gray-900 dark:text-white">you are on the correct beach cleaning event</span>. If not then the points will not be sanctioned to your account
                    </li>
                    <li>
                        If the event is correct, then you may proceed to the next step
                    </li>
                    <li>
                        There are <span class="font-semibold text-gray-900 dark:text-white">4 dashboard cards</span> that you need to pay attention:
                        <ul class="ps-5 mt-2 space-y-1 list-disc list-inside">
                            <li><span class="font-semibold text-gray-900 dark:text-white">Event Description</span> : Lets you know what current event you are in</li>
                            <li><span class="font-semibold text-gray-900 dark:text-white">OceanPals Guide</span> : Full guide for you to success the event</li>
                            <li><span class="font-semibold text-gray-900 dark:text-white">My Task</span> : List of task that you need to do to get full points</li>
                            <li><span class="font-semibold text-gray-900 dark:text-white">Team Performance</span> : See other users who participate current event</li>
                        </ul>
                    </li>
                    <li>
                        Don't forget to <span class="font-semibold text-gray-900 dark:text-white">finish the task that was given</span> to get full points
                    </li>
                    <li>
                        You could <span class="font-semibold text-gray-900 dark:text-white">join the OceanPals forum</span> to coordinate with other users
                    </li>
                    <li>
                        If you have any questions, <span class="font-semibold text-gray-900 dark:text-white">don't hesitate to ask help</span> for OceanPals admin
                    </li>
                    <li>
                        Lastly, have <span class="font-semibold text-gray-900 dark:text-white">fun</span> and become one with nature!
                    </li>
                </ol>
                <a href="/events/forum" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Go to forum
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
            
        </div>
        
        {{-- Card Middle--}}
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Task
            </a>
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">My Task</h1>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Finish the following task to get points</p>
            
            {{-- Task Report --}}
            @include('/events/partials/task')
        </div>

        {{-- Card Below --}}
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Statistics
            </a>
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Team Performance</h1>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Lets you see the current progress</p>
            
            {{-- Performance Report --}}
            @include('/events/partials/performance')
        </div>
    </div>
</section>
@endsection