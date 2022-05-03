<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <div class="flex justify-around py-2 border-b bg-gray-100">
            <button wire:click="$emit('openModal','popup-create')"
                type="button" class="text-gray-600 font-bold text-md p-2 border border-gray-300 rounded-xl hover:bg-blue-100 shadow-lg">
                New
            </button>
            <div
                class="text-center text-lg leading-6 font-semibold text-gray-700  ">
                Pop Ups List
            </div>
            <div>
                @if($showModalList)
                    {{$popUps->links()}}
                @endif
            </div>
        </div>
        <ul role="list" class="divide-y divide-gray-200">

            @if($showModalList)
                @forelse($popUps as $popUp)
                    <li class="py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-base leading-6 font-medium text-gray-900">
                                    {{ $popUp->title }}
                                </div>
                                <div class="text-sm leading-5 text-gray-500">
                                    {{ $popUp->description }}
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <li class="py-4">
                        <div class="flex justify-center">

                            <div class="ml-4">
                                <div class="text-base text-center leading-6 font-medium text-gray-900">
                                    No Pop Ups
                                </div>
                                <div class="text-sm leading-5 text-gray-500 text-center">
                                    There are no pop ups to show.
                                </div>
                            </div>
                        </div>
                    </li>
                @endforelse
                <li>
                    <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-indigo-600 truncate">Back End Developer</p>
                                <div class="ml-2 flex-shrink-0 flex">
                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Full-time</p>
                                </div>
                            </div>
                            <div class="mt-2 sm:flex sm:justify-between">
                                <div class="sm:flex">
                                    <p class="flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: solid/users -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                        </svg>
                                        Engineering
                                    </p>
                                    <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                        <!-- Heroicon name: solid/location-marker -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        Remote
                                    </p>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                    <!-- Heroicon name: solid/calendar -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <p>
                                        Closing on
                                        <time datetime="2020-01-07">January 7, 2020</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-indigo-600 truncate">Front End Developer</p>
                                <div class="ml-2 flex-shrink-0 flex">
                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Full-time</p>
                                </div>
                            </div>
                            <div class="mt-2 sm:flex sm:justify-between">
                                <div class="sm:flex">
                                    <p class="flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: solid/users -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                        </svg>
                                        Engineering
                                    </p>
                                    <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                        <!-- Heroicon name: solid/location-marker -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        Remote
                                    </p>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                    <!-- Heroicon name: solid/calendar -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <p>
                                        Closing on
                                        <time datetime="2020-01-07">January 7, 2020</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-indigo-600 truncate">User Interface Designer</p>
                                <div class="ml-2 flex-shrink-0 flex">
                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Full-time</p>
                                </div>
                            </div>
                            <div class="mt-2 sm:flex sm:justify-between">
                                <div class="sm:flex">
                                    <p class="flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: solid/users -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path
                                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                        </svg>
                                        Design
                                    </p>
                                    <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                        <!-- Heroicon name: solid/location-marker -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        Remote
                                    </p>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                    <!-- Heroicon name: solid/calendar -->
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <p>
                                        Closing on
                                        <time datetime="2020-01-14">January 14, 2020</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>

            @else
                <li>
                    <a href="#" class="block hover:bg-gray-50">
                        <div class="px-4 py-4 sm:px-6 flex justify-center py-5 ">
                            <svg class="w-8 h-8 animate-spin" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </a>
                </li>

            @endif
        </ul>
    </div>

</div>
