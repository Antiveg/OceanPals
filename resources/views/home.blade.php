@extends('layouts/main_layout')

@section('container')
<section class="bg-gradient-to-tr from-teal-50 to-blue-200">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        {{-- Card Above --}}
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Event
            </a>
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">My Current Events</h1>
            {{-- <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Currently you don't have any active events right now</p> --}}
            
            {{-- masukin active event --}}
            <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 mb-6">
                <div class="px-4 py-2">
                    <h1 class="text-xl font-bold text-gray-800 dark:text-white">Ancol Beach Cleaning</h1>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quos quidem sequi illum facere recusandae voluptatibus</p>
                </div>
            
                <img class="object-cover w-full h-48 mt-2" src="/assets/volunteer/volunteer-1.png" alt="NIKE AIR">
            
                <div class="flex items-center justify-between px-4 py-2 bg-blue-700">
                    <h1 class="text-lg font-bold text-white">100 Points</h1>
                    {{-- <button class="px-2 py-1 text-xs font-semibold text-gray-900    transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none"><a href="/events/dashboard">Go to Event</a></button> --}}
                </div>
            </div>
            
            {{-- tombol event --}}
            <a href="/events/dashboard" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Go to Event
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>

        {{-- Card Below (2) --}}
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    Points
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">My Points</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">See your cumulative points count</p>
                <p class="text-7xl font-normal text-gray-500 dark:text-gray-400 mb-4">{{ Auth::user()->points }}</p>
                <a href="/store" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Redeem your points
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                </a>
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
                    </svg>
                    Ranking
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">My Ranking</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">See your current ranking compare to other volunteer!</p>
                <p class="text-7xl font-normal text-gray-500 dark:text-gray-400 mb-4">
                    @php
                        use Illuminate\Support\Facades\Auth;
                        use App\Models\Rankings;
                        use App\Models\User;

                        $userID = Auth::id(); // Mendapatkan ID pengguna yang saat ini login
                        // dd($userID)
                        $userRanking = Rankings::where('UserID', $userID)->first(); // Mengambil peringkat berdasarkan ID pengguna
                        $totalUsers = User::count(); // Count the total number of users

                        if ($userRanking) {
                            echo $userRanking->Position . "/" . $totalUsers; // Menampilkan peringkat
                        } else {
                            echo "NULL"; // Menampilkan pesan jika pengguna tidak memiliki peringkat
                        }
                    @endphp
                </p>
                <a href="/ranking" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">View Ranking
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection