<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Subscription Manager</title>
</head>

<body>
    <div class="flex flex-col min-h-screen text-base subpixel-antialiased font-semibold text-blue-100 lg:flex-row">
        <!-- mobile bar -->
        <div class="flex items-center justify-between px-4 py-2 text-blue-100 bg-blue-900 lg:hidden">
            <button id="menuToggle">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </button>
            <a href="#" class="block -mr-8">
                <span class="sr-only">Sub Managaer</span>
                <svg class="w-16 text-white" viewBox="0 0 52 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.88477 16.2207H0.0195312L5.61523 0.78125H7.48047L1.88477 16.2207Z" fill="currentColor"
                        class="opacity-50" />
                    <path
                        d="M13.7793 15.1953C12.2754 15.1953 11.0547 14.7233 10.1172 13.7793C9.1862 12.8288 8.7207 11.5658 8.7207 9.99023V9.69727C8.7207 8.64258 8.92253 7.70182 9.32617 6.875C9.73633 6.04167 10.3092 5.39388 11.0449 4.93164C11.7806 4.4694 12.6009 4.23828 13.5059 4.23828C14.9447 4.23828 16.0547 4.69727 16.8359 5.61523C17.6237 6.5332 18.0176 7.83203 18.0176 9.51172V10.4688H11.1133C11.1849 11.3411 11.4746 12.0312 11.9824 12.5391C12.4967 13.0469 13.1413 13.3008 13.916 13.3008C15.0033 13.3008 15.8887 12.8613 16.5723 11.9824L17.8516 13.2031C17.4284 13.8346 16.862 14.3262 16.1523 14.6777C15.4492 15.0228 14.6582 15.1953 13.7793 15.1953ZM13.4961 6.14258C12.8451 6.14258 12.3177 6.37044 11.9141 6.82617C11.5169 7.2819 11.263 7.91667 11.1523 8.73047H15.6738V8.55469C15.6217 7.76042 15.4102 7.16146 15.0391 6.75781C14.668 6.34766 14.1536 6.14258 13.4961 6.14258Z"
                        fill="currentColor" />
                    <path
                        d="M19.4238 9.63867C19.4238 8.01107 19.8014 6.70573 20.5566 5.72266C21.3118 4.73307 22.3242 4.23828 23.5938 4.23828C24.7135 4.23828 25.6185 4.62891 26.3086 5.41016V0H28.6816V15H26.5332L26.416 13.9062C25.7064 14.7656 24.7591 15.1953 23.5742 15.1953C22.3372 15.1953 21.3346 14.6973 20.5664 13.7012C19.8047 12.7051 19.4238 11.3509 19.4238 9.63867ZM21.7969 9.84375C21.7969 10.918 22.002 11.7578 22.4121 12.3633C22.8288 12.9622 23.418 13.2617 24.1797 13.2617C25.1497 13.2617 25.8594 12.8288 26.3086 11.9629V7.45117C25.8724 6.60482 25.1693 6.18164 24.1992 6.18164C23.431 6.18164 22.8385 6.48763 22.4219 7.09961C22.0052 7.70508 21.7969 8.61979 21.7969 9.84375Z"
                        fill="currentColor" />
                    <path
                        d="M30.7422 9.63867C30.7422 7.99805 31.1263 6.68945 31.8945 5.71289C32.6693 4.72982 33.6947 4.23828 34.9707 4.23828C36.1751 4.23828 37.1224 4.6582 37.8125 5.49805L37.9199 4.43359H40.0586V14.6777C40.0586 16.0645 39.6257 17.1582 38.7598 17.959C37.9004 18.7598 36.7383 19.1602 35.2734 19.1602C34.4987 19.1602 33.7402 18.9974 32.998 18.6719C32.2624 18.3529 31.7025 17.9329 31.3184 17.4121L32.4414 15.9863C33.1706 16.8522 34.069 17.2852 35.1367 17.2852C35.9245 17.2852 36.5462 17.0703 37.002 16.6406C37.4577 16.2174 37.6855 15.5924 37.6855 14.7656V14.0527C37.002 14.8145 36.0905 15.1953 34.9512 15.1953C33.7142 15.1953 32.7018 14.7038 31.9141 13.7207C31.1328 12.7376 30.7422 11.377 30.7422 9.63867ZM33.1055 9.84375C33.1055 10.9049 33.3203 11.7415 33.75 12.3535C34.1862 12.959 34.7884 13.2617 35.5566 13.2617C36.5137 13.2617 37.2233 12.8516 37.6855 12.0312V7.38281C37.2363 6.58203 36.5332 6.18164 35.5762 6.18164C34.7949 6.18164 34.1862 6.49089 33.75 7.10938C33.3203 7.72786 33.1055 8.63932 33.1055 9.84375Z"
                        fill="currentColor" />
                    <path
                        d="M47.1582 15.1953C45.6543 15.1953 44.4336 14.7233 43.4961 13.7793C42.5651 12.8288 42.0996 11.5658 42.0996 9.99023V9.69727C42.0996 8.64258 42.3014 7.70182 42.7051 6.875C43.1152 6.04167 43.6882 5.39388 44.4238 4.93164C45.1595 4.4694 45.9798 4.23828 46.8848 4.23828C48.3236 4.23828 49.4336 4.69727 50.2148 5.61523C51.0026 6.5332 51.3965 7.83203 51.3965 9.51172V10.4688H44.4922C44.5638 11.3411 44.8535 12.0312 45.3613 12.5391C45.8757 13.0469 46.5202 13.3008 47.2949 13.3008C48.3822 13.3008 49.2676 12.8613 49.9512 11.9824L51.2305 13.2031C50.8073 13.8346 50.2409 14.3262 49.5312 14.6777C48.8281 15.0228 48.0371 15.1953 47.1582 15.1953ZM46.875 6.14258C46.224 6.14258 45.6966 6.37044 45.293 6.82617C44.8958 7.2819 44.6419 7.91667 44.5312 8.73047H49.0527V8.55469C49.0007 7.76042 48.7891 7.16146 48.418 6.75781C48.0469 6.34766 47.5326 6.14258 46.875 6.14258Z"
                        fill="currentColor" />
                </svg>
            </a>
            <button
                class="flex flex-row items-center justify-center space-x-2 xl:justify-start focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                <span class="text-xs font-bold text-blue-100">User name</span>
                <img src="https://picsum.photos/300/300" alt="User photo" class="w-10 h-10 rounded-full">
            </button>
        </div>
        <!--/ mobile bar-->

        <!--- sidebar -->
        <div id="menu"
            class="sticky top-0 z-10 flex-col hidden h-screen px-4 py-4 bg-gray-900 shadow-inner w-54 xl:w-64 2xl:w-80 lg:px-6 xl:px-8 lg:py-6 lg:flex">

            <!-- menu and logo-->
            <div class="flex-1 py-4">
                <a href="#" class="hidden md:block">
                    <span class="sr-only">SubManager</span>
                    <svg class="w-20 text-white" viewBox="0 0 52 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.88477 16.2207H0.0195312L5.61523 0.78125H7.48047L1.88477 16.2207Z"
                            fill="currentColor" class="opacity-50" />
                        <path
                            d="M13.7793 15.1953C12.2754 15.1953 11.0547 14.7233 10.1172 13.7793C9.1862 12.8288 8.7207 11.5658 8.7207 9.99023V9.69727C8.7207 8.64258 8.92253 7.70182 9.32617 6.875C9.73633 6.04167 10.3092 5.39388 11.0449 4.93164C11.7806 4.4694 12.6009 4.23828 13.5059 4.23828C14.9447 4.23828 16.0547 4.69727 16.8359 5.61523C17.6237 6.5332 18.0176 7.83203 18.0176 9.51172V10.4688H11.1133C11.1849 11.3411 11.4746 12.0312 11.9824 12.5391C12.4967 13.0469 13.1413 13.3008 13.916 13.3008C15.0033 13.3008 15.8887 12.8613 16.5723 11.9824L17.8516 13.2031C17.4284 13.8346 16.862 14.3262 16.1523 14.6777C15.4492 15.0228 14.6582 15.1953 13.7793 15.1953ZM13.4961 6.14258C12.8451 6.14258 12.3177 6.37044 11.9141 6.82617C11.5169 7.2819 11.263 7.91667 11.1523 8.73047H15.6738V8.55469C15.6217 7.76042 15.4102 7.16146 15.0391 6.75781C14.668 6.34766 14.1536 6.14258 13.4961 6.14258Z"
                            fill="currentColor" />
                        <path
                            d="M19.4238 9.63867C19.4238 8.01107 19.8014 6.70573 20.5566 5.72266C21.3118 4.73307 22.3242 4.23828 23.5938 4.23828C24.7135 4.23828 25.6185 4.62891 26.3086 5.41016V0H28.6816V15H26.5332L26.416 13.9062C25.7064 14.7656 24.7591 15.1953 23.5742 15.1953C22.3372 15.1953 21.3346 14.6973 20.5664 13.7012C19.8047 12.7051 19.4238 11.3509 19.4238 9.63867ZM21.7969 9.84375C21.7969 10.918 22.002 11.7578 22.4121 12.3633C22.8288 12.9622 23.418 13.2617 24.1797 13.2617C25.1497 13.2617 25.8594 12.8288 26.3086 11.9629V7.45117C25.8724 6.60482 25.1693 6.18164 24.1992 6.18164C23.431 6.18164 22.8385 6.48763 22.4219 7.09961C22.0052 7.70508 21.7969 8.61979 21.7969 9.84375Z"
                            fill="currentColor" />
                        <path
                            d="M30.7422 9.63867C30.7422 7.99805 31.1263 6.68945 31.8945 5.71289C32.6693 4.72982 33.6947 4.23828 34.9707 4.23828C36.1751 4.23828 37.1224 4.6582 37.8125 5.49805L37.9199 4.43359H40.0586V14.6777C40.0586 16.0645 39.6257 17.1582 38.7598 17.959C37.9004 18.7598 36.7383 19.1602 35.2734 19.1602C34.4987 19.1602 33.7402 18.9974 32.998 18.6719C32.2624 18.3529 31.7025 17.9329 31.3184 17.4121L32.4414 15.9863C33.1706 16.8522 34.069 17.2852 35.1367 17.2852C35.9245 17.2852 36.5462 17.0703 37.002 16.6406C37.4577 16.2174 37.6855 15.5924 37.6855 14.7656V14.0527C37.002 14.8145 36.0905 15.1953 34.9512 15.1953C33.7142 15.1953 32.7018 14.7038 31.9141 13.7207C31.1328 12.7376 30.7422 11.377 30.7422 9.63867ZM33.1055 9.84375C33.1055 10.9049 33.3203 11.7415 33.75 12.3535C34.1862 12.959 34.7884 13.2617 35.5566 13.2617C36.5137 13.2617 37.2233 12.8516 37.6855 12.0312V7.38281C37.2363 6.58203 36.5332 6.18164 35.5762 6.18164C34.7949 6.18164 34.1862 6.49089 33.75 7.10938C33.3203 7.72786 33.1055 8.63932 33.1055 9.84375Z"
                            fill="currentColor" />
                        <path
                            d="M47.1582 15.1953C45.6543 15.1953 44.4336 14.7233 43.4961 13.7793C42.5651 12.8288 42.0996 11.5658 42.0996 9.99023V9.69727C42.0996 8.64258 42.3014 7.70182 42.7051 6.875C43.1152 6.04167 43.6882 5.39388 44.4238 4.93164C45.1595 4.4694 45.9798 4.23828 46.8848 4.23828C48.3236 4.23828 49.4336 4.69727 50.2148 5.61523C51.0026 6.5332 51.3965 7.83203 51.3965 9.51172V10.4688H44.4922C44.5638 11.3411 44.8535 12.0312 45.3613 12.5391C45.8757 13.0469 46.5202 13.3008 47.2949 13.3008C48.3822 13.3008 49.2676 12.8613 49.9512 11.9824L51.2305 13.2031C50.8073 13.8346 50.2409 14.3262 49.5312 14.6777C48.8281 15.0228 48.0371 15.1953 47.1582 15.1953ZM46.875 6.14258C46.224 6.14258 45.6966 6.37044 45.293 6.82617C44.8958 7.2819 44.6419 7.91667 44.5312 8.73047H49.0527V8.55469C49.0007 7.76042 48.7891 7.16146 48.418 6.75781C48.0469 6.34766 47.5326 6.14258 46.875 6.14258Z"
                            fill="currentColor" />
                    </svg>
                </a>
                <nav class="-mx-2 md:mt-8">
                    <ul class="pt-2 space-y-3 text-base">
                        <li>
                            <a href="#"
                                class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-200 transition-colors duration-100 bg-gray-800 rounded-lg hover:bg-blue-50">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                    </path>
                                </svg>
                                <span class="flex-1">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-200 transition-colors duration-100 bg-gray-900 rounded-lg hover:bg-gray-700 text-opacity-70 hover:text-opacity-100">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1">
                                    Inbox
                                </span>
                                <span
                                    class="inline-flex items-center justify-center w-5 h-5 text-xs text-white bg-red-500 rounded-full">
                                    3
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-200 transition-colors duration-100 bg-gray-900 rounded-lg hover:bg-gray-700 text-opacity-70 hover:text-opacity-100">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                                    </path>
                                </svg>
                                <span class="flex-1">
                                    Sales
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-200 transition-colors duration-100 bg-gray-900 rounded-lg hover:bg-gray-700 text-opacity-70 hover:text-opacity-100">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z">
                                    </path>
                                </svg>
                                <span class="flex-1">
                                    Downloads
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-200 transition-colors duration-100 bg-gray-900 rounded-lg hover:bg-gray-700 text-opacity-70 hover:text-opacity-100">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                    </path>
                                </svg>
                                <span class="flex-1">
                                    Team
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-end px-4 py-3 space-x-2 font-bold text-blue-200 transition-colors duration-100 bg-gray-900 rounded-lg hover:bg-gray-700 text-opacity-70 hover:text-opacity-100">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1">
                                    Settings
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--/ menu and logo -->

            <!-- profile link -->
            <button
                class="absolute left-0 flex-col items-center justify-center hidden w-full space-y-4 md:flex xl:w-auto xl:flex-row xl:justify-start xl:space-y-0 xl:space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60 xl:left-8 xl:-mr-8 bottom-6">
                <img src="/images/user.jpg" alt="Abigail Wallace" class="rounded-full w-14 h-14">
                <div class="flex flex-col items-center text-sm xl:items-start">
                    <span class="font-bold text-blue-100 ">Abigail Wallace</span>
                    <span class="text-sm font-bold text-blue-200 opacity-50">View profile</span>
                </div>
            </button>
            <!--/ profile link -->

        </div>
        <!--/ sidebar -->

        <div class="flex flex-col flex-1 px-4 py-4 overflow-hidden bg-gray-800 lg:py-8 lg:px-6 xl:px-8">

            <!-- topbar -->
            <div class="flex justify-between w-full mx-auto max-w-screen-2xl">
                <div class="hidden md:block">
                    <h1 class="mb-1 text-2xl font-bold text-blue-100">Welcome User</h1>
                    <p class="hidden text-lg text-blue-200 lg:block">Dashboard overview</p>
                </div>
                <div class="flex justify-between flex-1 space-x-4 md:justify-end">
                    <div class="relative w-full md:max-w-xs">
                        <svg class="absolute w-5 h-5 text-blue-100 top-3 left-3 opacity-70" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <input type="text"
                            class="w-full h-10 pr-4 text-sm font-semibold text-blue-100 placeholder-blue-200 bg-gray-600 rounded-lg pl-9 placeholder-opacity-70 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60"
                            placeholder="Enter your search term...">
                    </div>
                    <div class="flex space-x-4">
                        <button type="button"
                            class="h-10 px-3 bg-gray-600 rounded-lg hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                            <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </button>
                        <button type="button"
                            class="relative h-10 px-3 bg-gray-600 rounded-lg hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                            <svg class="w-6 h-6 text-blue-100 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                            <div
                                class="absolute w-2 h-2 bg-red-500 rounded-full top-3 right-4 ring-2 ring-red-400 ring-opacity-60">
                                &nbsp;
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <!--/ topbar -->

            <!-- main content -->
            <div class="flex-1 py-4 lg:py-10">
                <div class="mx-auto max-w-screen-2xl">

                    <!-- quick actions -->
                    <div
                        class="flex flex-col px-4 py-4 mt-8 space-y-4 bg-gray-700 rounded-lg lg:px-8 lg:py-6 lg:flex-row lg:space-y-0 lg:space-x-12">
                        <div>
                            <h2 class="mb-2 text-xl font-bold text-blue-200">Quick actions</h2>
                            <p class="text-blue-100 opacity-70">Your recently most used actions</p>
                        </div>
                        <nav class="space-y-2 md:flex md:space-x-4 md:space-y-0">
                            <a href="#"
                                class="inline-flex flex-col items-center justify-center w-32 px-3 py-3 border border-gray-600 rounded-lg hover:bg-gray-800">
                                <svg class="w-8 h-8 text-blue-100" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                    </path>
                                </svg>
                                <span class="text-blue-100 opacity-70">
                                    Add Member
                                </span>
                            </a>
                            <a href="#"
                                class="inline-flex flex-col items-center justify-center w-32 px-3 py-3 border border-gray-600 rounded-lg hover:bg-gray-800">
                                <svg class="w-8 h-8 text-blue-100" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-blue-100 opacity-70">
                                    New Product
                                </span>
                            </a>
                            <a href="#"
                                class="inline-flex flex-col items-center justify-center w-32 px-3 py-3 border border-gray-600 rounded-lg hover:bg-gray-800">
                                <svg class="w-8 h-8 text-blue-100" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                                <span class="text-blue-100 opacity-70">
                                    Edit Members
                                </span>
                            </a>
                            <a href="#"
                                class="inline-flex flex-col items-center justify-center w-32 px-3 py-3 border border-gray-600 rounded-lg hover:bg-gray-800">
                                <svg class="w-8 h-8 text-blue-100" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-blue-100 opacity-70">
                                    View Stats
                                </span>
                            </a>
                        </nav>
                    </div>
                    <!--/ quick actions -->

                    <!-- recent orders -->
                    <div class="px-4 py-4 my-8 bg-gray-700 rounded-lg lg:px-8 lg:py-6">
                        <h2 class="mb-4 text-xl font-bold text-blue-200 lg:mb-6">Recent orders</h2>
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full overflow-hidden align-middle">
                                <table class="min-w-full">
                                    <thead class="text-left bg-gray-600">
                                        <tr>
                                            <th class="px-3 py-2">ID</th>
                                            <th class="px-3 py-2">Product</th>
                                            <th class="px-3 py-2">Customer</th>
                                            <th class="px-3 py-2">Date</th>
                                            <th class="px-3 py-2">Status</th>
                                            <th class="px-3 py-2">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="text-blue-100 divide-y divide-gray-600 text-opacity-80 whitespace-nowrap">
                                        <tr>
                                            <td class="px-3 py-3">#12831</td>
                                            <td class="px-3 py-3">Traditional Package</td>
                                            <td class="px-3 py-3">Frances Nichols</td>
                                            <td class="px-3 py-3">12-01-2021</td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="inline-block w-16 px-3 py-1 text-xs text-center text-green-600 uppercase bg-green-200 rounded-full">Done</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3 py-3">#12830</td>
                                            <td class="px-3 py-3">Pro Package</td>
                                            <td class="px-3 py-3">Ronald George</td>
                                            <td class="px-3 py-3">12-01-2021</td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="inline-block w-16 px-3 py-1 text-xs text-center text-green-600 uppercase bg-green-200 rounded-full">Done</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3 py-3">#12829</td>
                                            <td class="px-3 py-3">Pro Package</td>
                                            <td class="px-3 py-3">Charlene Scott</td>
                                            <td class="px-3 py-3">12-01-2021</td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="inline-block w-16 px-3 py-1 text-xs text-center text-red-600 uppercase bg-red-200 rounded-full">Failed</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3 py-3">#12828</td>
                                            <td class="px-3 py-3">Starter Package</td>
                                            <td class="px-3 py-3">Beverley Owens</td>
                                            <td class="px-3 py-3">11-01-2021</td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="inline-block w-16 px-3 py-1 text-xs text-center text-green-600 uppercase bg-green-200 rounded-full">Done</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3 py-3">#12827</td>
                                            <td class="px-3 py-3">Pro Package</td>
                                            <td class="px-3 py-3">Julian Hansen</td>
                                            <td class="px-3 py-3">11-01-2021</td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="inline-block w-16 px-3 py-1 text-xs text-center text-yellow-600 uppercase bg-yellow-200 rounded-full">Hold</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-3 py-3">#12826</td>
                                            <td class="px-3 py-3">Pro Package</td>
                                            <td class="px-3 py-3">Nathan Howell</td>
                                            <td class="px-3 py-3">11-01-2021</td>
                                            <td class="px-3 py-3">
                                                <span
                                                    class="inline-block w-16 px-3 py-1 text-xs text-center text-green-600 uppercase bg-green-200 rounded-full">Done</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="#" class="inline-block mt-5 font-bold text-blue-600 hover:underline">View all
                            orders</a>
                    </div>
                    <!--/ recent orders -->

                    <!-- cards row -->
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 2xl:gap-8">

                        <!-- monthly target -->
                        <div class="col-span-1 px-4 py-4 bg-gray-700 rounded-lg lg:px-8 lg:py-6">
                            <h2 class="mb-4 text-xl font-bold text-blue-200 lg:mb-6">Monthly target</h2>
                            <div class="flex items-end mb-4 space-x-4 lg:mb-6">
                                <div class="flex items-center justify-center w-12 h-12 bg-blue-900 rounded-lg">
                                    <svg class="w-6 h-6 text-blue-100" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.736 6.979C9.208 6.193 9.696 6 10 6c.304 0 .792.193 1.264.979a1 1 0 001.715-1.029C12.279 4.784 11.232 4 10 4s-2.279.784-2.979 1.95c-.285.475-.507 1-.67 1.55H6a1 1 0 000 2h.013a9.358 9.358 0 000 1H6a1 1 0 100 2h.351c.163.55.385 1.075.67 1.55C7.721 15.216 8.768 16 10 16s2.279-.784 2.979-1.95a1 1 0 10-1.715-1.029c-.472.786-.96.979-1.264.979-.304 0-.792-.193-1.264-.979a4.265 4.265 0 01-.264-.521H10a1 1 0 100-2H8.017a7.36 7.36 0 010-1H10a1 1 0 100-2H8.472c.08-.185.167-.36.264-.521z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="mb-2 text-2xl text-blue-100">&euro;21.291,09</span>
                                <span class="hidden mb-2 text-blue-100 whitespace-pre opacity-70 xl:inline-block">/
                                    &euro;40.000</span>
                            </div>
                            <div class="overflow-hidden bg-gray-600 rounded-full h-7">
                                <div style="width:65%;"
                                    class="flex items-center justify-center text-center bg-green-400 rounded-full h-7 text-green-50">
                                    65%
                                </div>
                            </div>
                        </div>
                        <!--/ monthly target -->

                        <!-- customers -->
                        <div class="col-span-1 px-4 py-4 bg-gray-700 rounded-lg lg:px-8 lg:py-6">
                            <h2 class="mb-4 text-xl font-bold text-blue-200 lg:mb-6">Customers</h2>
                            <div class="flex items-end mb-4 space-x-4 lg:mb-6">
                                <div class="flex items-center justify-center w-12 h-12 bg-blue-900 rounded-lg">
                                    <svg class="w-6 h-6 text-blue-100" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="mb-2 text-2xl">491</span>
                                <span
                                    class="px-3 mb-2 text-base text-green-600 bg-green-200 rounded-full border-full">&#8605;
                                    32</span>
                            </div>
                            <p>Customers this month</p>
                        </div>
                        <!--/ customers -->

                        <!-- sales -->
                        <div class="col-span-1 px-4 py-4 bg-gray-700 rounded-lg lg:px-8 lg:py-6">
                            <h2 class="mb-4 text-xl font-bold text-blue-200 lg:mb-6">Sales</h2>
                            <div class="flex items-end mb-4 space-x-4 lg:mb-6">
                                <div class="flex items-center justify-center w-12 h-12 bg-blue-900 rounded-lg">
                                    <svg class="w-6 h-6 text-blue-100" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="mb-2 text-2xl">230</span>
                                <span class="px-3 mb-2 text-base text-red-600 bg-red-200 rounded-full border-full">
                                    <span class="inline-block transform rotate-180">
                                        &#8604;
                                    </span>
                                    12
                                </span>
                            </div>
                            <p>Sales this month</p>
                        </div>
                        <!--/ sales -->

                    </div>
                    <!--/ cards row -->

                    <!-- top customers -->
                    <div class="px-4 py-4 mt-8 bg-gray-700 rounded-lg lg:px-8 lg:py-6">
                        <h2 class="mb-4 text-xl font-bold text-blue-200 lg:mb-6">Top customers</h2>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-12">
                            <div class="space-y-4 md:max-w-sm">
                                <a href=""
                                    class="flex items-center w-full space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                                    <img src="/images/customer1.jpg" alt="Danielle Arnold"
                                        class="rounded-full w-14 h-14">
                                    <div class="flex flex-col items-start flex-1 text-sm">
                                        <span class="font-bold text-blue-100 ">Danielle Arnold</span>
                                        <span class="text-sm font-bold text-blue-200 opacity-50">View profile</span>
                                    </div>
                                    <span
                                        class="px-3 mb-2 text-base text-green-600 bg-green-200 rounded-full border-full">&euro;438</span>
                                </a>
                                <a href=""
                                    class="flex items-center w-full space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                                    <img src="/images/customer2.jpg" alt="Leta Washington"
                                        class="rounded-full w-14 h-14">
                                    <div class="flex flex-col items-start flex-1 text-sm">
                                        <span class="font-bold text-blue-100 ">Leta Washington</span>
                                        <span class="text-sm font-bold text-blue-200 opacity-50">View profile</span>
                                    </div>
                                    <span
                                        class="px-3 mb-2 text-base text-green-600 bg-green-200 rounded-full border-full">&euro;256</span>
                                </a>
                                <a href=""
                                    class="flex items-center w-full space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                                    <img src="/images/customer3.jpg" alt="Clinton Torres"
                                        class="rounded-full w-14 h-14">
                                    <div class="flex flex-col items-start flex-1 text-sm">
                                        <span class="font-bold text-blue-100 ">Clinton Torres</span>
                                        <span class="text-sm font-bold text-blue-200 opacity-50">View profile</span>
                                    </div>
                                    <span
                                        class="px-3 mb-2 text-base text-green-600 bg-green-200 rounded-full border-full">&euro;149</span>
                                </a>
                            </div>
                            <div class="space-y-4 md:max-w-sm">
                                <a href=""
                                    class="flex items-center w-full space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                                    <img src="/images/customer4.jpg" alt="Sonia Watkins"
                                        class="rounded-full w-14 h-14">
                                    <div class="flex flex-col items-start flex-1 text-sm">
                                        <span class="font-bold text-blue-100 ">Sonia Watkins</span>
                                        <span class="text-sm font-bold text-blue-200 opacity-50">View profile</span>
                                    </div>
                                    <span
                                        class="px-3 mb-2 text-base text-green-600 bg-green-200 rounded-full border-full">&euro;136</span>
                                </a>
                                <a href=""
                                    class="flex items-center w-full space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                                    <img src="/images/customer5.jpg" alt="Arthur Garcia"
                                        class="rounded-full w-14 h-14">
                                    <div class="flex flex-col items-start flex-1 text-sm">
                                        <span class="font-bold text-blue-100 ">Arthur Garcia</span>
                                        <span class="text-sm font-bold text-blue-200 opacity-50">View profile</span>
                                    </div>
                                    <span
                                        class="px-3 mb-2 text-base text-green-600 bg-green-200 rounded-full border-full">&euro;128</span>
                                </a>
                                <a href=""
                                    class="flex items-center w-full space-x-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                                    <img src="/images/customer6.jpg" alt="Clinton Torres"
                                        class="rounded-full w-14 h-14">
                                    <div class="flex flex-col items-start flex-1 text-sm">
                                        <span class="font-bold text-blue-100 ">Gerald Beck</span>
                                        <span class="text-sm font-bold text-blue-200 opacity-50">View profile</span>
                                    </div>
                                    <span
                                        class="px-3 mb-2 text-base text-green-600 bg-green-200 rounded-full border-full">&euro;97</span>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="inline-block mt-5 font-bold text-blue-600 hover:underline">View all
                            customers</a>
                    </div>
                    <!--/ top customers -->

                </div>
            </div>
            <!--/ main content -->
        </div>
    </div>
</body>

</html>
