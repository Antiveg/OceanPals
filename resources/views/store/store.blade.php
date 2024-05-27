@extends('layouts/main_layout')

@section('container')
<section class="bg-gradient-to-tr from-teal-50 to-blue-200 py-10">
    <h1 class="text-center mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-7xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">OceanPals Store</span> Items</h1>
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All categories</button>
        <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Merchandise</button>
        {{-- <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Vouchers</button> --}}
        {{-- <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Perks</button> --}}
        <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Electronics</button>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-5">
        {{-- 1 --}}
        <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url('/assets/store/store-1.png')"></div>
        
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">Macbook Air M2</h3>
        
                <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                    <span class="font-bold text-gray-800 dark:text-gray-200">40000 pt</span>
                    <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-700 rounded hover:bg-blue-800 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Redeem</button>
                </div>
            </div>
        </div>
        {{-- 2 --}}
        <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url('/assets/store/store-2.png')"></div>
        
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">Samsung Galaxy S24</h3>
        
                <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                    <span class="font-bold text-gray-800 dark:text-gray-200">35000 pt</span>
                    <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-700 rounded hover:bg-blue-800 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Redeem</button>
                </div>
            </div>
        </div>
        {{-- 3 --}}
        <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url('/assets/store/store-3.png')"></div>
        
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">Sony Wireless XM4</h3>
        
                <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                    <span class="font-bold text-gray-800 dark:text-gray-200">37500 pt</span>
                    <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-700 rounded hover:bg-blue-800 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Redeem</button>
                </div>
            </div>
        </div>
        {{-- 4 --}}
        <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url('/assets/store/store-4.png')"></div>
        
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">OceanPals Totebag</h3>
        
                <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                    <span class="font-bold text-gray-800 dark:text-gray-200">7500 pt</span>
                    <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-700 rounded hover:bg-blue-800 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Redeem</button>
                </div>
            </div>
        </div>
        {{-- 5 --}}
        <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url('/assets/store/store-5.png')"></div>
        
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">OceanPals Plushie</h3>
        
                <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                    <span class="font-bold text-gray-800 dark:text-gray-200">10000 pt</span>
                    <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-700 rounded hover:bg-blue-800 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Redeem</button>
                </div>
            </div>
        </div>
        {{-- 6 --}}
        <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url('/assets/store/store-6.png')"></div>
        
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">OceanPals T-Shirt</h3>
        
                <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                    <span class="font-bold text-gray-800 dark:text-gray-200">5000 pt</span>
                    <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-blue-700 rounded hover:bg-blue-800 dark:hover:bg-blue-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Redeem</button>
                </div>
            </div>
        </div>
        {{-- @include('/partials/cards')
        @include('/partials/cards')
        @include('/partials/cards') --}}
    </div>
</section>
@endsection