<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/backend/img/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/backend/css/all.css') }}">
</head>

<body>
    {{-- dark mode toggle  --}}
    <div class="fixed left-4 bottom-4 z-[999]">
        <label class="relative inline-flex items-center mr-5 cursor-pointer">
            <input type="checkbox" value="" class="sr-only peer dark-toggle">
            <div
                class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-purple-300 dark:peer-focus:ring-blue-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-700">

            </div>
            <span class="ml-3 text-sm font-medium text-black dark:text-yellow-300"><i
                    class="fa-duotone fa-lightbulb fa-xl"></i></span>
        </label>
    </div>

    {{-- header start --}}
    <header class="bg-white dark:bg-gray-900 sticky top-0 z-50">
        {{-- navbar start --}}
        <nav class="w-full shadow-md shadow-black/5 dark:shadow-blue-950/50">
            <div class="container flex flex-wrap items-center justify-between mx-auto py-4 px-4 md:px-0">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="{{ asset('backend/img/logo.png') }}" class="h-8 mr-3" alt="Flowbite Logo">
                </a>
                <div class="flex md:order-2">
                    <button type="button"data-modal-target="searchModal" data-modal-toggle="searchModal"
                        class="text-black dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="fa-duotone fa-magnifying-glass fa-lg"></i>
                    </button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    {{-- nav list  --}}
                    <ul
                        class="text-sm uppercase font-medium  flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Android</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Mac</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Games</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tools</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- search modal -->
    <div id="searchModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-1 border-b rounded-t dark:border-gray-600">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="searchModal">
                        <i class="fa-regular fa-xmark"></i>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form>
                        <label for="searchInput"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <input type="search" id="searchInput" class="block w-full input"
                                placeholder="Search Games, Tips, Others..." required>
                            <button type="submit"
                                class="absolute right-2.5 bottom-2.5 btn btn-blue-700">
                                <i class="fa-duotone fa-magnifying-glass"></i><span
                                    class="ms-2 hidden md:inline-block">Search</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Banner section start  --}}
    <section class="banner-section bg-blue-50 dark:bg-gray-800 py-12 px-4 md:px-0 ">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-4">
                <div class="hidden md:block col-span-12 lg:col-span-8">
                    <div id="controls-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div
                            class="relative h-56 overflow-hidden rounded-lg md:h-96 lg:h-[27rem] xl:h-[30rem] 2xl:h-[33rem] ">
                            <!-- Item 1 -->
                            <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div
                                    class="image absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                    <img src="https://images.pexels.com/photos/16671170/pexels-photo-16671170/free-photo-of-islands-in-ocean.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="relative rounded-lg" alt="...">
                                    <span
                                        class="absolute bg-gradient-to-t bottom-0 left-0 from-slate-950 to-transparent h-3/5 rounded-xl w-full"></span>
                                </div>
                                <div
                                    class="banner-blog-contents absolute md:space-y-2 left-0 bottom-4 lg:bottom-0 p-5 lg:p-8 w-full text-center md:text-start">
                                    <h2 class="text-2xl text-white capitalize font-bold">This is first title</h2>
                                    <p class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div
                                    class="image absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                    <img src="https://images.pexels.com/photos/16671170/pexels-photo-16671170/free-photo-of-islands-in-ocean.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="relative rounded-lg" alt="...">
                                    <span
                                        class="absolute bg-gradient-to-t bottom-0 left-0 from-slate-950 to-transparent h-3/5 rounded-xl w-full"></span>
                                </div>
                                <div
                                    class="banner-blog-contents absolute md:space-y-2 left-0 bottom-4 lg:bottom-0 p-5 lg:p-8 w-full text-center md:text-start">
                                    <h2 class="text-2xl text-white capitalize font-bold">This is first title</h2>
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div
                                    class="image absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                    <img src="https://images.pexels.com/photos/16671170/pexels-photo-16671170/free-photo-of-islands-in-ocean.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="relative rounded-lg" alt="...">
                                    <span
                                        class="absolute bg-gradient-to-t bottom-0 left-0 from-slate-950 to-transparent h-3/5 rounded-xl w-full"></span>
                                </div>
                                <div
                                    class="banner-blog-contents absolute md:space-y-2 left-0 bottom-4 lg:bottom-0 p-5 lg:p-8 w-full text-center md:text-start">
                                    <h2 class="text-2xl text-white capitalize font-bold">This is first title</h2>
                                    <p class="text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div
                                    class="image absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                    <img src="https://images.pexels.com/photos/16671170/pexels-photo-16671170/free-photo-of-islands-in-ocean.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="relative rounded-lg" alt="...">
                                    <span
                                        class="absolute bg-gradient-to-t bottom-0 left-0 from-slate-950 to-transparent h-3/5 rounded-xl w-full"></span>
                                </div>
                                <div
                                    class="banner-blog-contents absolute md:space-y-2 left-0 bottom-4 lg:bottom-0 p-5 lg:p-8 w-full text-center md:text-start">
                                    <h2 class="text-2xl text-white capitalize font-bold">This is first title</h2>
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-1 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-1 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-4 rounded-lg">
                    <div class="card bg-white dark:bg-gray-900 lg:h-[27rem] xl:h-[30rem] 2xl:h-[33rem] group">
                        <div class="overflow-hidden">
                            <a href="#" class="relative">
                                <img class="rounded-t-lg w-full transition-all ease-linear delay-200 scale-100 group-hover:scale-105 md:hidden lg:block"
                                    src="https://images.pexels.com/photos/17621788/pexels-photo-17621788/free-photo-of-snow-wood-landscape-vacation.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                    alt="" />
                                <span
                                    class="absolute top-5 left-1 card-badge">
                                    <i class="fa-duotone fa-thumbtack"></i>
                                </span>
                            </a>

                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquis..</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021</p>
                            <a href="#" class="btn text-black dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- All Categories start --}}
    <section class="all-categories-section bg-white dark:bg-gray-900 px-4 md:px-0 py-12">
        <div class="container mx-auto">
            <h2 class="text-5xl font-bold inline-block pb-3 dark:border-blue-950 dark:hover:text-stroke-white transition-all ease-linear text-blue-700 hover:text-stroke-blue hover:text-transparent">All
                Categories</h2>
                <div class="border-b border-blue-50 dark:border-gray-700 my-2"></div>
            <div class="grid grid-cols-12 gap-4 mt-4">
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-2">
                    <a href="#" class="w-full">
                        <button
                            class="bg-blue-50 group w-full h-auto transition-all ease-linear hover:bg-blue-950 dark:bg-gray-800 dark:hover:bg-gray-700 px-4 py-8 relative rounded-lg text-center overflow-hidden">
                            <div class="category-icon absolute left-0 top-0">
                                <i class="fa-duotone fa-video fa-2xl rotate-45 transition-all ease-linear text-gray-950 dark:text-white group-hover:text-white"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-950 dark:text-white transition-all ease-linear group-hover:text-white">Premium Courses</h3>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Posts start --}}
    <section class="featured-blogs-section  dark:bg-gray-900 px-4 md:px-0">
        <div class="container mx-auto">
            <h2 class="text-5xl text-end font-bold inline-block pb-3 dark:border-blue-950 dark:hover:text-stroke-white transition-all ease-linear text-blue-700 hover:text-stroke-blue hover:text-transparent">Featured Blogs</h2>
                <div class="border-b border-blue-50 dark:border-gray-700 my-2"></div>
            <div class="grid grid-cols-12 gap-4 mt-4 ">
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="card group">
                        <div class="overflow-hidden">
                            <a href="#" class="relative">
                                <img class="rounded-t-lg card-img"
                                    src="https://images.pexels.com/photos/17621788/pexels-photo-17621788/free-photo-of-snow-wood-landscape-vacation.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                    alt="" />
                                <span
                                    class="absolute top-5 left-1 card-badge">
                                    Featured
                                </span>
                            </a>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight transition-all ease-linear text-blue-950 dark:text-white hover:text-blue-700 dark:hover:text-blue-700">
                                    Noteworthy technology acquis..</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021</p>
                            <a href="#" class="btn text-blue-950 dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="card group">
                        <div class="overflow-hidden">
                            <a href="#" class="relative">
                                <img class="rounded-t-lg card-img"
                                    src="https://images.pexels.com/photos/17621788/pexels-photo-17621788/free-photo-of-snow-wood-landscape-vacation.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                    alt="" />
                                <span
                                    class="absolute top-5 left-1 card-badge">
                                    Featured
                                </span>
                            </a>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight transition-all ease-linear text-blue-950 dark:text-white hover:text-blue-700 dark:hover:text-blue-700">
                                    Noteworthy technology acquis..</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021</p>
                            <a href="#" class="btn text-blue-950 dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="card group">
                        <div class="overflow-hidden">
                            <a href="#" class="relative">
                                <img class="rounded-t-lg card-img"
                                    src="https://images.pexels.com/photos/17621788/pexels-photo-17621788/free-photo-of-snow-wood-landscape-vacation.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                    alt="" />
                                <span
                                    class="absolute top-5 left-1 card-badge">
                                    Featured
                                </span>
                            </a>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight transition-all ease-linear text-blue-950 dark:text-white hover:text-blue-700 dark:hover:text-blue-700">
                                    Noteworthy technology acquis..</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021</p>
                            <a href="#" class="btn text-blue-950 dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                        </div>
                    </div>
                </div><div class="col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="card group">
                        <div class="overflow-hidden">
                            <a href="#" class="relative">
                                <img class="rounded-t-lg card-img"
                                    src="https://images.pexels.com/photos/17621788/pexels-photo-17621788/free-photo-of-snow-wood-landscape-vacation.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                    alt="" />
                                <span
                                    class="absolute top-5 left-1 card-badge">
                                    Featured
                                </span>
                            </a>
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight transition-all ease-linear text-blue-950 dark:text-white hover:text-blue-700 dark:hover:text-blue-700">
                                    Noteworthy technology acquis..</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                enterprise technology acquisitions of 2021</p>
                            <a href="#" class="btn text-blue-950 dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Leatest Blogs start --}}
    <section class="latest-blogs-section bg-white dark:bg-gray-900 px-4 md:px-0 pt-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-4 mt-4 ">
                <div class="col-span-12 lg:col-span-8 xl:col-span-9 ">
                    <h2 class="text-blue-700 text-3xl font-bold pb-3 mb-4 border-b border-gray-200 dark:border-blue-950">Latest
                        Blogs</h2>
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="card group">
                                <a href="#">
                                    <img class="rounded-t-lg card-img"
                                        src="https://images.pexels.com/photos/17621788/pexels-photo-17621788/free-photo-of-snow-wood-landscape-vacation.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquis..</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                        enterprise technology acquisitions of 2021</p>
                                    <a href="#" class="btn text-black dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="card group">
                                <a href="#">
                                    <img class="rounded-t-lg card-img"
                                        src="https://images.pexels.com/photos/12825195/pexels-photo-12825195.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquis..</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                        enterprise technology acquisitions of 2021</p>
                                    <a href="#" class="btn text-black dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="card group">
                                <a href="#">
                                    <img class="rounded-t-lg card-img"
                                        src="https://images.pexels.com/photos/14770400/pexels-photo-14770400.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquis..</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                        enterprise technology acquisitions of 2021 </p>
                                    <a href="#" class="btn text-black dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="card group">
                                <a href="#">
                                    <img class="rounded-t-lg card-img"
                                        src="https://images.pexels.com/photos/16407227/pexels-photo-16407227/free-photo-of-man-in-a-leather-jacket-with-his-head-tilted-back.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquis..</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                        enterprise technology acquisitions of 2021 </p>
                                    <a href="#" class="btn text-black dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="card group">
                                <a href="#">
                                    <img class="rounded-t-lg card-img"
                                        src="https://images.pexels.com/photos/17728405/pexels-photo-17728405/free-photo-of-lizard.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquis..</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                        enterprise technology acquisitions of 2021 </p>
                                    <a href="#" class="btn text-black dark:text-white relative read-more">
                                    <span class="z-[4]">
                                    Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                </span>
                                <span class="read-more-bg"></span>
                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 xl:col-span-4">
                            <div class="card group">
                                <a href="#">
                                    <img class="rounded-t-lg card-img"
                                        src="https://images.pexels.com/photos/17539759/pexels-photo-17539759/free-photo-of-van.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="" />
                                </a>
                                <div class="p-5">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Noteworthy technology acquis..</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                        enterprise technology acquisitions of 2021 </p>
                                        <a href="#" class="btn text-black dark:text-white relative read-more">
                                            <span class="z-[4]">
                                            Read more <i class="fa-duotone fa-arrow-right ms-1"></i>
                                        </span>
                                        <span class="read-more-bg"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mt-10">
                        <button class="btn btn-blue-700 px-5 py-3">Show All<span><i class="fa-duotone fa-arrow-right ms-2"></i></span></button>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4 xl:col-span-3">
                    <div class="card h-auto p-5">
                        <h2 class="text-blue-700 text-3xl font-bold pb-3 mb-4 border-b border-gray-200 dark:border-blue-900">Popular Posts</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- newsletter section start --}}
    <section class="newsletter-section bg-white dark:bg-gray-900 px-4 md:px-0 pt-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-4 items-center px-8 bg-slate-100 dark:bg-gray-800 rounded-lg py-10">
                <div class="col-span-12 lg:col-span-8">
                    <h2 class="text-blue-700 text-3xl font-bold mb-3">Subscribe To Our Newsletter</h2>
                    <p class="text-gray-700 dark:text-gray-400 lg:max-w-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum adipisci, pariatur neque voluptas aliquid quibusdam!`</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <form>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>





    {{-- footer start  --}}
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full container p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('/backend/img/logo.png') }}" class="h-8 mr-3" alt="FlowBite Logo" />
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-purple-900 uppercase dark:text-white">Important
                            Links
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium space-y-4">
                            <li>
                                <a href="/" class="hover:underline">Home</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Blog</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-purple-900 uppercase dark:text-white">Recent Blogs
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium space-y-4">
                            <li>
                                <a href="" class="hover:underline ">Lorem ipsum</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Ipsum dolor</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Why Facebook</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-purple-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between text-center">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="{{ url('/') }}" class="hover:underline">Am2Am™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-5 justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>

                </div>
            </div>
        </div>
    </footer>



    <script src="{{ asset('/backend/js/jquery-3.7.0.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Check if the checkbox state is stored in local storage
            var isChecked = localStorage.getItem('darkMode');

            // If the stored state is true, apply dark mode
            if (isChecked === 'true') {
                $('body').addClass('dark');
                $('.dark-toggle').prop('checked', true);
            }

            // Toggle the dark mode class when the checkbox state changes
            $('.dark-toggle').on('change', function() {
                if ($(this).prop('checked')) {
                    $('body').addClass('dark');
                    localStorage.setItem('darkMode', true);
                } else {
                    $('body').removeClass('dark');
                    localStorage.setItem('darkMode', false);
                }
            });
        });
    </script>

</body>

</html>
