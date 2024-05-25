@if ($events->isEmpty())
        <h1 class="text-9xl">No Events</h1>
@else 
    @foreach ($events as $event)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://images.pexels.com/photos/457882/pexels-photo-457882.jpeg?cs=srgb&dl=pexels-asadphoto-457882.jpg&fm=jpg" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="lg:text-3xl md:text-xl sm:text-lg font-semibold tracking-tight text-gray-900 dark:text-white">{{ $event->EventName }}</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">{{ $event->EventLocation }}</span>
                        @if($event->IsSpecial == 1)
                            <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-1">Special</span>
                        @else
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800 ml-1">Custom</span>
                        @endif

                        @if($event->IsFinished == 1)
                            <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-800 ml-1">Finished</span>
                        @else
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800 ml-1">Unfinished</span>
                        @endif
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="lg:text-xl md:text-lg sm:text-sm font-semibold tracking-tight text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($event->EventDate)->format('d F Y') }}</p>
                        <p class="lg:text-xl md:text-lg sm:text-sm font-semibold tracking-tight text-gray-900 dark:text-white">{{ $event->EventTime }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="lg:text-3xl md:text-xl sm:text-lg font-bold text-gray-900 dark:text-white">{{ $event->EventPoint }} Points</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Join Event</a>
                    </div>
                </div>
            </div>
    @endforeach
@endif