@extends('_layouts.main')



@section('content')
<main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                                Tables Genre
                            </h2>

                            <nav>
                                <a
                                    href="/movies/create"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                >
                                    Create
                                </a>
                            </nav>
                        </div>
                        <!-- Breadcrumb End -->

                        <!-- ====== Table Section Start -->
                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Two Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-2 flex items-center">
                                        <p class="font-medium"> Id</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="font-medium">Name</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Movie Description</p>
                                    </div>
                                
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-2 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                1
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                            <div class="w-12 rounded-md m-2">
                                                <img src="src/images/movie/movie-01.jpg" alt="Product" />
                                            </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Jojo Bizzare Adventure
                                        </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            JoJo's Bizarre Adventure is a shonen series that begins with very common action tropes as its driving force. The scope of JoJo expands in fulfilling ways, but it's consistently entertaining as the series' genre shifts in a natural way that allows the storytelling to evolve and not grow stagnant.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-2 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                2
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                            <div class="w-12 rounded-md m-2">
                                                <img src="src/images/movie/movie-02.jpg" alt="Product" />
                                            </div>
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                Noragami
                                            </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Noragami is a very funny anime where gods, people that transform in weapons come to life, and at the same time it haves a very dark humor where they fight enemies, rivals, etc.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-2 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                3
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                            <div class="w-12 rounded-md m-2">
                                                <img src="src/images/movie/movie-03.jpg" alt="Product" />
                                            </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Windbreaker
                                        </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Plot. From an early age, Haruka Sakura was made an outcast due to his unconventional appearance and lack of social skills. However, the rough treatment turned him into a proficient fighter, which is now the only thing he prides himself on.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-2 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                4
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <div class="w-12 rounded-md m-2">
                                            <img src="src/images/movie/movie-05.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Konosuba
                                        </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Premise. Following an untimely and embarrassing death, Kazuma Satou, a Japanese teenage shut-in NEET, meets a goddess named Aqua, who offers to reincarnate him in a parallel world with MMORPG elements, where he can go on adventures and battle monsters.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-2 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                5
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                            <div class="w-12 rounded-md m-2">
                                                <img src="src/images/movie/movie-04.jpg" alt="Product" />
                                            </div>
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            Spy X Family
                                        </p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                            A spy on an undercover mission gets married and adopts a child as part of his cover. His wife and daughter have secrets of their own, and all three must strive to keep together.
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                
                        </div>
                        
                            <!-- ====== Table Two End -->
                            </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
@endsection