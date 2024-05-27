@extends('layouts/main_layout')

@section('container')
<section class="bg-gradient-to-tr from-teal-50 to-blue-200 py-10 px-4">
    <h1 class="text-center mb-10 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-7xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Create Event</span> List</h1>
    @include('/partials/newform')
</section>
@endsection