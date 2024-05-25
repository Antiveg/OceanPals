<form class="max-w-sm mx-auto bg-white shadow-md py-7 px-10 rounded-lg" action="{{ route('createEvent') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event Name</label>
        <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Ex: Kuta Beach Cleaning" required />
    </div>
    <div class="mb-5">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Event Description</label>
        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe your events here..."></textarea>
    </div>
    <div class="mb-5">
        <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
        <select id="province" name="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Aceh</option>
            <option>Bali</option>
            <option>Banten</option>
            <option>Bengkulu</option>
            <option>Gorontalo</option>
            <option>Jakarta</option>
            <option>Jambi</option>
            <option>Jawa Barat (West Java)</option>
            <option>Jawa Tengah (Central Java)</option>
            <option>Jawa Timur (East Java)</option>
            <option>Kalimantan Barat (West Kalimantan)</option>
            <option>Kalimantan Selatan (South Kalimantan)</option>
            <option>Kalimantan Tengah (Central Kalimantan)</option>
            <option>Kalimantan Timur (East Kalimantan)</option>
            <option>Kalimantan Utara (North Kalimantan)</option>
            <option>Kepulauan Bangka Belitung (Bangka Belitung Islands)</option>
            <option>Kepulauan Riau (Riau Islands)</option>
            <option>Lampung</option>
            <option>Maluku</option>
            <option>Maluku Utara (North Maluku)</option>
            <option>Nusa Tenggara Barat (West Nusa Tenggara)</option>
            <option>Nusa Tenggara Timur (East Nusa Tenggara)</option>
            <option>Papua</option>
            <option>Papua Barat (West Papua)</option>
            <option>Riau</option>
            <option>Sulawesi Barat (West Sulawesi)</option>
            <option>Sulawesi Selatan (South Sulawesi)</option>
            <option>Sulawesi Tengah (Central Sulawesi)</option>
            <option>Sulawesi Tenggara (Southeast Sulawesi)</option>
            <option>Sulawesi Utara (North Sulawesi)</option>
            <option>Sumatera Barat (West Sumatra)</option>
            <option>Sumatera Selatan (South Sumatra)</option>
            <option>Sumatera Utara (North Sumatra)</option>
            <option>Yogyakarta</option>
        </select>
    </div>
    {{-- <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="beachimage">Upload beach image</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="beachimage" name="beachimage" type="file">
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">This image will be displayed as "before" condition of the beach</div>
    </div> --}}

    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="beachimage">Upload beach image</label>
        {{-- <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="beachimage" name="beachimage" type="file"> --}}
        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input name="beachimage" id="dropzone-file" type="file" class="hidden" onchange="previewFile(event)" />
            </label>
        </div>
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">This image will be displayed as "before" condition of the beach</div>
    </div>
    
    <div id="preview-container" class="hidden">
        <img id="preview-image" name="beachimage" class="max-w-full max-h-64 mx-auto mb-3" />
    </div>
    
    <script>
        function previewFile(event) {
            const preview = document.getElementById('preview-image');
            const previewContainer = document.getElementById('preview-container');
            const file = event.target.files[0];
            const reader = new FileReader();
    
            reader.onloadend = function () {
                preview.src = reader.result;
                previewContainer.classList.remove('hidden');
            }
    
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                previewContainer.classList.add('hidden');
            }
        }
    </script>

    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="date">Set date</label>
        <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
              </svg>
            </div>
            <input datepicker type="text" id="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
        </div>
    </div>

    <div class="mb-5">
        <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select time</label>
        <div class="relative">
            <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <input type="time" id="time" name="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
        </div>
    </div>

    <div class="flex items-start mb-5">
        <div class="flex items-center h-5">
            <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
        </div>
        <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create new event</button>
  </form>
  