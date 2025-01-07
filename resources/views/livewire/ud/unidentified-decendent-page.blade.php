<div  class="container mx-auto px-6 py-12">
    {{-- The best athlete wants his opponent at his best. --}}
    <section class="text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-gray-200 mb-6">Help Us Bring Them Home</h1>
        <p class="text-gray-600 dark:text-gray-400 text-lg">Search for unidentified persons or report a decendent that has not been identified. Together, we can make a difference.</p>
        {{-- <div class="mt-8">
            <input type="text" placeholder="Search by name or location" class="w-full md:w-1/2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-700">
            <button class="mt-4 md:mt-0 md:ml-4 px-6 py-2 bg-blue-600 dark:bg-blue-500 text-white rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600">Search</button>
        </div> --}}
    </section>

    <section id="recent" class="mt-12">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Recently Reported</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                <img src="{{asset('placeholderimages/john-doe.avif')}}" alt="Person 1" class="w-full h-58 object-cover rounded">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mt-4">John Doe</h3>
                <p class="text-gray-600 dark:text-gray-400">Last seen: Nairobi, Kenya</p>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                <img src="{{asset('placeholderimages/john-doe.avif')}}" alt="Person 1" class="w-full h-58 object-cover rounded">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mt-4">John Doe</h3>
                <p class="text-gray-600 dark:text-gray-400">Last seen: Nairobi, Kenya</p>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
                <img src="{{asset('placeholderimages/john-doe.avif')}}" alt="Person 1" class="w-full h-58 object-cover rounded">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mt-4">John Doe</h3>
                <p class="text-gray-600 dark:text-gray-400">Last seen: Nairobi, Kenya</p>
            </div>
        </div>
    </section>

    {{-- <section id="report" class="mt-12 bg-gray-200 dark:bg-gray-700 p-6 rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Report a Missing Person</h2>
        @livewire('report-missing')
    </section> --}}

</div>
