
<footer class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Footer -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- NAv links --}}
        <div class="text-center py-4">
            <ul class="flex flex-wrap justify-center space-x-4">
                <li>
                    <x-nav-link :href="route('missing')" :active="request()->routeIs('missing')" wire:navigate>
                        {{ __('Missing') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('arrested')" :active="request()->routeIs('arrested')" wire:navigate>
                        {{ __('Arrested') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('injured')" :active="request()->routeIs('injured')" wire:navigate>
                        {{ __('Injured') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('ud')" :active="request()->routeIs('ud')" wire:navigate>
                        {{ __('Roe') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
        {{-- Contact section --}}
        <div class="text-center py-4">
            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Dev Contacts</h4>
            <ul class="text-gray-600 dark:text-gray-400">
                <li>Whatsapp/Mpesa:
                    <a href="https://wa.me/254716340285" class="underline">+254716340285</a>
                </li>
                <li>X:
                    <a href="https://x.com/OS_J_01" target="_blank" class="underline">OSJ</a>
                </li>
            </ul>
        </div>

        {{-- Copyright --}}
        <div class="text-center py-4">
            <p class="text-gray-600 dark:text-gray-400">&copy; 2025 Open Source JKUAT. All rights reserved.</p>
            <a href="https://github.com/lewys-miugo" class="text-gray-600 dark:text-gray-400 underline">
                <p>~ lewys ~</p>
            </a>
        </div>
    </div>
</footer>

