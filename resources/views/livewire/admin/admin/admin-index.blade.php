<div>

    {{--    <x-slot name="header">--}}
    {{--        <h2 class="text-xl font-semibold leading-tight text-gray-800 text-primary-700 dark:text-primary-400">--}}
    {{--            {{ __('Admin') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    {{--        <div class="py-12">--}}
    {{--            <div class="pr-0 mx-auto max-w-7xl sm:px-6 lg:px-8">--}}
    {{--                <div class="overflow-hidden bg-white shadow-lg dark:bg-gray-900 sm:rounded-lg">--}}
    {{--                    <h1 class="p-3 text-gray-800 dark:text-white">Admin Hi.</h1>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}


    <div
            x-data="{ open: false }"
            class="flex min-h-screen overflow-hidden bg-gray-50 dark:bg-gray-700 p-0">
        <div
                x-show="open"
                class="w-60 md:w-80 h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 flex flex-col px-2 gap-4">
            <div class="flex flex-row justify-start mt-5 px-3 gap-x-4">
                <span>Message</span>
                <div class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white bg-red-700 rounded-full">
                    99+
                </div>
            </div>
            <div class="flex flex-col gap-y-4 px-3">
                <!-- Start input Search -->
                <div class="relative">
                    <div class="absolute top-3 right-2">
                        <svg class="w-5 h-5 z-20 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" class="w-full h-10 pr-10 z-0 text-gray-900 dark:text-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-primary-600" placeholder="Search anything...">
                </div>
                <!-- End input Search -->

                <!-- Start Order By Conversation -->
                <ul class="flex flex-row items-center justify-evenly px-3">
                    <li>
                        <button type="button" class="group p-2 transition scale-100 delay-100 duration-200 ease-in-out bg-primary-600 dark:bg-primary-600 hover:bg-primary-600 hover:text-white rounded-md shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-white" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="group p-2 transition scale-90 hover:scale-100 delay-100 duration-200 ease-in-out bg-white dark:bg-gray-600 hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 dark:hover:text-white rounded-md shadow-md">
                            <svg class="w-5 h-5 fill-current text-gray-800 dark:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button type="button" class="group p-2 transition scale-90 hover:scale-100 delay-100 duration-200 ease-in-out bg-white dark:bg-gray-600 hover:bg-primary-600 hover:text-white dark:hover:bg-primary-600 dark:hover:text-white rounded-md shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current fill-yellow-400" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        </button>
                    </li>
                </ul>
                <!-- End Order By Conversation -->
            </div>
            <div class="h-full overflow-hidden relative pt-2">
                <div class="flex flex-col gap-y-0 h-full overflow-y-auto scrollbar-hidden -mx-5 px-5">
                    <!-- Start List Conversation -->

                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 rounded-md transition delay-100 duration-200 ease-in-out bg-white dark:bg-gray-700 scale-90 group-hover:bg-primary-600 hover:scale-95">
                            <!-- Star -->
                            <span class="absolute flex top-0 right-0 w-6 h-6 rounded-bl-full bg-yellow-400 p-1 drop-shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current text-white dark:text-gray-700" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </span>
                            <!-- End Star -->

                            <img class="rounded-full object-cover w-12 h-12 hidden md:block shadow-sm"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />

                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base truncate pl-1 text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100" >John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none rounded-full text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 group-hover:text-red-100 group-hover:bg-red-700/80 group-hover:dark:text-red-700 group-hover:dark:bg-red-300/80 ">
                                        <span>17</span>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>


                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 rounded-md transition delay-100 duration-200 ease-in-out bg-gray-50 bg-primary-600 scale-95">
                            <!-- Star -->
                            <span class="absolute flex top-0 right-0 w-6 h-6 rounded-bl-full bg-yellow-400 p-1 drop-shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current text-white dark:text-gray-700" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            </span>
                            <!-- End Star -->

                            <img class="rounded-full object-cover w-12 h-12 hidden md:block shadow-sm"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />

                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base truncate pl-1 text-white" >John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-[10px] text-gray-50">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none rounded-full text-red-100 bg-red-800">
                                        <span>99+</span>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </a>



                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <a href="#"
                       class="w-full group drop-shadow-xl mb-2 text-sm">
                        <span class="w-full h-20 flex flex-row items-center overflow-hidden px-3 bg-white dark:bg-gray-700 rounded-md transition scale-90 group-hover:bg-primary-500 hover:scale-95 delay-100 duration-200 ease-in-out">
                            <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                                 src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                 alt=""
                            />
                            <span class="flex flex-col w-full overflow-hidden pr-2">
                                <span class="flex justify-between w-full">
                                    <span class="font-medium text-base text-gray-800 dark:text-gray-300 group-hover:text-white group-hover:dark:text-gray-100 truncate pl-1">John Travolta Travolta</span>
                                    <span class="whitespace-nowrap text-opacity-80 text-xs text-gray-600 dark:text-gray-400 group-hover:text-gray-200 group-hover:dark:text-gray-300 sticky top-0 left-0">03:20 PM</span>
                                </span>
                                <span class="flex justify-between w-full overflow-hidden gap-x-2">
                                    <span class="text-opacity-80 truncate mt-0.5 text-gray-600 dark:text-gray-400 group-hover:text-gray-300 group-hover:dark:text-gray-300">Contrary to popular belief, Lorem Ipsum is not simply random</span>
                                    <span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-700 bg-red-400/20 dark:text-red-100 dark:bg-red-700/70 rounded-full">99+</span>
                                </span>
                            </span>
                        </span>
                    </a>
                    <!-- End List Conversation -->
                </div>
            </div>
        </div>


        <div class="flex flex-col justify-between h-screen w-full px-0 md:px-5">
            <!-- Start Header Message Box -->

            <div class="flex-none">
                <div class="flex flex-row grow-0 items-center relative py-4 px-6 bg-white dark:bg-gray-900 shadow rounded-b-2xl">
                    <button x-on:click="open = ! open" class="h-10 w-10 z-10 -mr-6 ml-4 p-1 bg-primary-600 rounded-l-full text-white shadow-md">
                        <!-- Icon Svg vertical -->
                        <svg x-show="!open" class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        <!-- Icon Svg horizontal -->
                        <svg x-show="open" class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                    </button>

                    <div class="flex items-center justify-center flex-shrink-0">
                        <img class="rounded-full object-cover w-12 h-12 hidden md:block"
                             src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                             alt=""
                        />
                    </div>
                    <div class="flex flex-col ltr:ml-3 rtl:mr-3">
                        <div class="font-semibold text-sm text-gray-800 dark:text-gray-200">
                            Name
                        </div>
                        <div class="text-xs text-gray-600 dark:text-gray-400">
                            username
                        </div>
                    </div>
                    <div class="ltr:ml-auto rtl:mr-auto">
                        <button
                                class="inline-flex items-center justify-center h-10 w-10 border border-transparent rounded-full text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Header Message Box -->

            <!-- Start Message Box -->
            <div class="flex-1 h-full w-full overflow-hidden will-change-scroll relative">
                <div id="messageBox" class="flex flex-col gap-y-4 h-full w-full overflow-y-auto scrollbar-hidden mx-5 pl-6 pt-1 pb-2">
                    <!-- Start Message -->
                    <div class="flex items-end">
                        <div class="flex flex-col overflow-hidden gap-y-1 py-2 px-4 text-xs max-w-xs mx-2 rounded-lg text-right rounded-br-none bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 shadow-md">
                            <p class="break-words">able to</p>
                            <div class="flex flex-row justify-end items-center w-full">
                                <div class="flex flex-row items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current text-gray-400" width="40" height="40" viewBox="0 0 24 24">
                                        <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                    </svg>
                                    <span class="text-[10px] text-gray-400" dir="ltr">12:45 PM</span>
                                </div>
                            </div>
                        </div>
                        <img class="w-8 h-8 rounded-full object-cover order-first"
                             src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                             alt="">
                    </div>


                    <div class="flex items-end">
                        <div class="flex flex-col overflow-hidden gap-y-1 py-2 px-4 text-xs max-w-xs mx-2 rounded-lg text-right rounded-br-none bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 shadow-md">
                            <p class="break-words">able to</p>
                            <div class="flex flex-row justify-end items-center w-full">
                                <div class="flex flex-row items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-3 h-3 fill-current text-gray-400"
                                         width="40" height="40" viewBox="0 0 24 24">
                                        <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                    </svg>
                                    <span class="text-[10px] text-gray-400" dir="ltr">12:45 PM</span>
                                </div>
                            </div>
                        </div>
                        <img
                                src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                alt=""
                                class="w-8 h-8 rounded-full object-cover order-first"
                        >
                    </div>

                    <div class="flex items-center justify-center">
                        <span class="py-1 px-2 text-[10px] bg-primary-200 text-gray-800 dark:bg-gray-900 dark:text-gray-300 rounded-full">12/2/2022</span>
                    </div>


                    <div class="flex items-end">
                        <div class="flex flex-col overflow-hidden gap-y-1 py-2 px-4 text-xs max-w-xs mx-2 rounded-lg text-right rounded-br-none bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 shadow-md">
                            <p class="break-words">able to</p>
                            <div class="flex flex-row justify-end items-center w-full">
                                <div class="flex flex-row items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-3 h-3 fill-current text-gray-400"
                                         width="40" height="40" viewBox="0 0 24 24">
                                        <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                    </svg>
                                    <span class="text-[10px] text-gray-400" dir="ltr">12:45 PM</span>
                                </div>
                            </div>
                        </div>
                        <img
                                src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                alt=""
                                class="w-8 h-8 rounded-full object-cover order-first"
                        >
                    </div>


                    <div class="flex items-end">
                        <div class="flex flex-col overflow-hidden gap-y-1 py-2 px-4 text-xs max-w-xs mx-2 rounded-lg text-right rounded-br-none bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 shadow-md">
                            <p class="break-words">able to</p>
                            <div class="flex flex-row justify-end items-center w-full">
                                <div class="flex flex-row items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-3 h-3 fill-current text-gray-400"
                                         width="40" height="40" viewBox="0 0 24 24">
                                        <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                    </svg>
                                    <span class="text-[10px] text-gray-400" dir="ltr">12:45 PM</span>
                                </div>
                            </div>
                        </div>
                        <img
                                src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                alt=""
                                class="w-8 h-8 rounded-full object-cover order-first"
                        >
                    </div>

                    <div class="flex items-end justify-end">
                        <div class="flex flex-col gap-y-1 py-2 px-4 text-xs max-w-xs mx-2 rounded-lg text-right rounded-bl-none bg-primary-600 text-white shadow-md">
                                <p class="break-words">WordPress is used all over the world, in countries where English is not the
                                    main language. The strings in the WordPress plugins need to be coded in a special
                                    way so that can be easily translated into other languages. As a developer,
                                    you may not be able to provide localizations for all your users; however,
                                    a translator can successfully localize</p>
                            <div class="flex flex-row justify-between items-center w-full">
                                    <div class="flex flex-row items-center gap-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-3 h-3 fill-current text-gray-200"
                                             width="40" height="40" viewBox="0 0 24 24">
                                            <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                        </svg>
                                        <span class="text-[10px] text-gray-300" dir="ltr">12:45 PM</span>
                                    </div>
                                    <svg  class="w-4 h-4 fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                    </svg>
                                </div>
                        </div>
                        <img
                                src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                alt=""
                                class="w-8 h-8 rounded-full object-cover order-last"
                        >
                    </div>

                    <div class="flex items-end">
                        <div class="flex flex-col overflow-hidden gap-y-1 py-2 px-4 text-xs max-w-xs mx-2 rounded-lg text-right rounded-br-none bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 shadow-md">
                                <p class="break-words">able to provide localizations for all your users; however,
                                    a translator can successfully localize</p>
                            <div class="flex flex-row justify-end items-center w-full">
                                    <div class="flex flex-row items-center gap-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-3 h-3 fill-current text-gray-400"
                                             width="40" height="40" viewBox="0 0 24 24">
                                            <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                        </svg>
                                        <span class="text-[10px] text-gray-400" dir="ltr">12:45 PM</span>
                                    </div>
                                </div>
                        </div>
                        <img
                                src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                alt=""
                                class="w-8 h-8 rounded-full object-cover order-first"
                        >
                    </div>

                    <div class="flex items-end">
                        <div class="flex flex-col overflow-hidden gap-y-1 py-2 px-4 text-xs max-w-xs mx-2 rounded-lg text-right rounded-br-none bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 shadow-md">
                            <p class="break-words">able to</p>
                            <div class="flex flex-row justify-end items-center w-full">
                                <div class="flex flex-row items-center gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-3 h-3 fill-current text-gray-400"
                                         width="40" height="40" viewBox="0 0 24 24">
                                        <path d="M12.25 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zM18 13h-6.75V6h2v5H18v2z"></path>
                                    </svg>
                                    <span class="text-[10px] text-gray-400" dir="ltr">12:45 PM</span>
                                </div>
                            </div>
                        </div>
                        <img
                                src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"
                                alt=""
                                class="w-8 h-8 rounded-full object-cover order-first"
                        >
                    </div>
                    <!-- End Message -->
                </div>
            </div>
            <!-- Start Message Box -->

            <!-- Start footer Message Box -->
            <div class="flex-none">
                <div class="flex flex-row flex-1 items-center py-4 px-6 sm:px-2 bg-white dark:bg-gray-900 shadow rounded-t-2xl">
                    <form class="flex flex-row items-center w-full px-2 mb-3 mt-3">
                        <input type="text" placeholder="Message Here ..."
                               class="w-full text-gray-900 dark:text-gray-100 dark:bg-gray-700 px-6 border border-gray-300 dark:border-gray-500 rounded-3xl focus:outline-none focus:ring-primary-600"
                        />

                        <button type="button" class="flex items-center justify-center h-10 w-8 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                            </svg>
                        </button>

                        <button type="button" class="flex items-center justify-center h-10 w-8 text-gray-400 ltr:ml-1 ltr:mr-2 rtl:mr-1 rtl:ml-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </button>

                        <button type="submit"
                                class="flex items-center justify-center h-10 w-10 px-3 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-primary-600 text-primary-600 dark:text-primary-300 dark:hover:text-white">
                            <svg class="w-6 h-6 transform rotate-90 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <!-- Start Header Message Box -->
        </div>




{{--        <div class="flex flex-col flex-grow h-screen justify-between bg-gray-50 dark:bg-gray-700 px-5">--}}
{{--            <div class="flex flex-col">--}}
{{--                <div class="flex flex-row grow-0 items-center py-4 px-6 bg-white dark:bg-gray-900 shadow rounded-b-2xl">--}}
{{--                    <div class="flex items-center justify-center flex-shrink-0">--}}
{{--                        <img class="rounded-full object-cover w-12 h-12 hidden md:block"--}}
{{--                             src="https://img.freepik.com/free-photo/pleasant-looking-serious-man-stands-profile-has-confident-expression-wears-casual-white-t-shirt_273609-16959.jpg?size=626&ext=jpg&ga=GA1.2.2018362746.1636761600"--}}
{{--                             alt=""--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                    <div class="flex flex-col ltr:ml-3 rtl:mr-3">--}}
{{--                        <div class="font-semibold text-sm text-gray-800 dark:text-gray-200">--}}
{{--                            Name--}}
{{--                        </div>--}}
{{--                        <div class="text-xs text-gray-600 dark:text-gray-400">--}}
{{--                            username--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="ltr:ml-auto rtl:mr-auto">--}}
{{--                        <button--}}
{{--                                class="inline-flex items-center justify-center h-10 w-10 border border-transparent rounded-full text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition"--}}
{{--                        >--}}
{{--                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"--}}
{{--                                 xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                      d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class=" h-full overflow-hidden relative pt-2 bg-blue-300">--}}
{{--                    <div class="flex flex-col gap-y-0 h-full w-full overflow-y-auto scrollbar-hidden">--}}
{{--                        <div>kkkkkkk</div>--}}

{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                        <div>kkkkkkk</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex flex-row flex-1 items-center py-4 px-6 bg-white dark:bg-gray-900 shadow rounded-t-2xl">--}}
{{--                <div class="flex flex-row items-center w-full px-2 mb-3 mt-3">--}}
{{--                    <input type="text" placeholder="Message Here ..."--}}
{{--                               class="w-full dark:bg-gray-700 focus:ring-primary-500 px-6 border border-gray-400 dark:border-gray-500 rounded-3xl w-full focus:outline-none text-sm h-10 flex items-center"--}}
{{--                        />--}}
{{--                    <button type="button" class="flex items-center justify-center h-10 w-8 text-gray-400">--}}
{{--                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                  d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>--}}
{{--                            </svg>--}}
{{--                    </button>--}}
{{--                    <button type="button" class="flex items-center justify-center h-10 w-8 text-gray-400 ltr:ml-1 ltr:mr-2 rtl:mr-1 rtl:ml-2">--}}
{{--                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    <button type="submit"--}}
{{--                            class="flex items-center justify-center h-10 w-10 px-3 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-primary-600 text-primary-600 dark:text-primary-300 dark:hover:text-white">--}}
{{--                        <svg class="w-6 h-6 transform rotate-90 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        --}}






    </div>


</div>
