<div>
    {{-- Success is as dangerous as failure. --}}
    <section class="bg-white dark:bg-gray-700">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-800 dark:text-gray-200 sm:text-5xl lg:text-6xl">Empowering the JKUAT Student Community Through Open Source</h1>
            <p class="mt-6 text-xl text-gray-700 dark:text-gray-300">Collaborate, innovate, and build together. Discover resources, connect with peers, and contribute to the future of tech at JKUAT.</p>
            <div class="mt-8 space-x-4">
                <a href="https://chat.whatsapp.com/DDtFzpck4xaHKJibfTcfIJ" class="px-8 py-3 bg-indigo-600 text-white text-lg font-medium rounded-md">Join the Community</a>
                <a href="#resources" class="px-8 py-3 bg-gray-200 text-lg font-medium rounded-md">Explore Resources</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gray-200 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold  text-center" id="resources">Resources</h2>
            <div class="mt-6 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-8">
                <a href="{{route('missing')}}">
                    <div class="feature-card">
                        <h3 class="text-xl font-semibold text-indigo-600">Missing Persons</h3>
                        <p class="mt-2 text-gray-600">Explore missing persons.</p>
                    </div>
                </a>
                <a href="{{route('ud')}}">
                    <div class="feature-card">
                        <h3 class="text-xl font-semibold text-indigo-600">Unidentified Decedents</h3>
                        <p class="mt-2 text-gray-600">Explore unidentified/unclaimed bodies in morgues.</p>
                    </div>
                </a>
                <a href="{{route('arrested')}}">
                    <div class="feature-card">
                        <h3 class="text-xl font-semibold text-indigo-600">Arrested</h3>
                        <p class="mt-2 text-gray-600">Explore arrested persons.</p>
                    </div>
                </a>
                <a href="{{route('injured')}}">
                    <div class="feature-card">
                        <h3 class="text-xl font-semibold text-indigo-600">Injured</h3>
                        <p class="mt-2 text-gray-600">Explore Injured persons.</p>
                    </div>
                </a>
            </div>

        </div>
        <div class="max-w-7xl md:my-5 mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold  text-center">Upcoming Resources</h2>
            <div class="mt-6 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-8">

                <div class="feature-card">
                    <h3 class="text-xl font-semibold text-indigo-600">Blogs & News: </h3>
                    <p class="mt-2 text-gray-600">Students can publish articles to practice and showcase their writing skills.</p>
                </div>
                <div class="feature-card">
                    <h3 class="text-xl font-semibold text-indigo-600">JKUAT Processes</h3>
                    <p class="mt-2 text-gray-600">Access guides and documentation for handling university processes.</p>
                </div>

                <div class="feature-card">
                    <h3 class="text-xl font-semibold text-indigo-600">Student Projects:</h3>
                    <p class="mt-2 text-gray-600">A showcase of projects / open source projects completed by JKUAT students, with links to LinkedIn profiles for better visibility to potential employers.</p>
                </div>

                <div class="feature-card">
                    <h3 class="text-xl font-semibold text-indigo-600">Events:</h3>
                    <p class="mt-2 text-gray-600">University-wide event listings for better planning and visibility.</p>
                </div>
                <div class="feature-card">
                    <h3 class="text-xl font-semibold text-indigo-600">Scholarships & Opportunities:</h3>
                    <p class="mt-2 text-gray-600">A platform for students to discover scholarships, internships, and job opportunities.</p>
                </div>
                <div class="feature-card">
                    <h3 class="text-xl font-semibold text-indigo-600">E-commerce for Students</h3>
                    <p class="mt-2 text-gray-600">A marketplace for students to buy and sell items, from textbooks to household goods.</p>
                </div>
            </div>
        </div>
    </section>
</div>
