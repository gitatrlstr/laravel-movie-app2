@extends('_layouts.main')

@section('content')
                <main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black">
                                Tables
                            </h2>

                            <nav>
                                <a
                                    href="/movies/create"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                >
                                    Create
                                </a>
                            </nav>
                        </div>
                        <!-- Breadcrumb End -->

                        <!-- ====== Table Section Start -->
                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Two Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">ID</p>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <p class="font-medium">Movie</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">User</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Rating</p>
                                    </div>
                                    <div class="col-span-2 flex items-center">
                                        <p class="font-medium">Date</p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">Action</p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black">
                                                01
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <div class="w-12 rounded-md m-2">
                                            <img src="src/images/movie/movie-01.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black">
                                            Jojo Bizzare Adventure
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            Hitoru
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            9,5/10
                                        </p>
                                    </div>
                                    <div class="col-span-2 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            19-08-21
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            
                                            <p class="text-sm font-medium text-black">
                                                02
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <div class="w-12 rounded-md m-2">
                                            <img src="src/images/movie/movie-02.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black">
                                            Noragami
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            Nabila
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            8/10
                                        </p>
                                    </div>
                                    <div class="col-span-2 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            25-11-22
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black">
                                                03
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <div class="w-12 rounded-md m-2">
                                            <img src="src/images/movie/movie-03.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black">
                                            Windbreaker
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            Natsuki
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            7/10
                                        </p>
                                    </div>
                                    <div class="col-span-2 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            01-05-24
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black">
                                                04
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                            <div class="w-12 rounded-md m-2">
                                                <img src="src/images/movie/movie-05.jpg" alt="Product" />
                                            </div>
                                        <p class="text-sm font-medium text-black">
                                            Konosuba
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            Eka
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            9/10
                                        </p>
                                    </div>
                                    <div class="col-span-2 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            17-08-19
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex items-center space-x-1">
                                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <p class="text-sm font-medium text-black">
                                                05
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-span-2 items-center sm:flex">
                                        <div class="w-12 rounded-md m-2">
                                            <img src="src/images/movie/movie-04.jpg" alt="Product" />
                                        </div>
                                        <p class="text-sm font-medium text-black">
                                            Spy X Family
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            Abi
                                        </p>
                                    </div>
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            8,7/10
                                        </p>
                                    </div>
                                    <div class="col-span-2 flex items-center">
                                        <p class="text-sm font-medium text-black">
                                            22-02-22
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
                        </div>
                    </div>
                </main>
                                
@endsection