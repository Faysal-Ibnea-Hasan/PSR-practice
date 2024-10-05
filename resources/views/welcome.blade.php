@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div>
        @if (Session::has('success'))


        <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg dark:bg-blue-800 dark:text-blue-200">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.147 15.085a7.159 7.159 0 0 1-6.189 3.307A6.713 6.713 0 0 1 3.1 15.444c-2.679-4.513.287-8.737.888-9.548A4.373 4.373 0 0 0 5 1.608c1.287.953 6.445 3.218 5.537 10.5 1.5-1.122 2.706-3.01 2.853-6.14 1.433 1.049 3.993 5.395 1.757 9.117Z"/>
                </svg>
                <span class="sr-only">Fire icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{Session::get('success')}}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>


        @endif
        <a href="#" class="group block overflow-hidden">
            <div class="relative h-[350px] sm:h-[450px]">
                <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="" class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0" />

                <img src="https://images.unsplash.com/photo-1523381140794-a1eef18a37c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8MjQ2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60"
                    alt="" class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100" />
            </div>

            <div class="relative bg-white pt-3">
                <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    Limited Edition Sports Trainer
                </h3>

                <p class="mt-1.5 tracking-wide text-gray-900">$189.99</p>
            </div>
        </a>
        <a href="#" class="group block overflow-hidden">
            <div class="relative h-[350px] sm:h-[450px]">
                <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="" class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0" />

                <img src="https://images.unsplash.com/photo-1523381140794-a1eef18a37c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8MjQ2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60"
                    alt="" class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100" />
            </div>

            <div class="relative bg-white pt-3">
                <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    Limited Edition Sports Trainer
                </h3>

                <p class="mt-1.5 tracking-wide text-gray-900">$189.99</p>
            </div>
        </a>
        <a href="#" class="group block overflow-hidden">
            <div class="relative h-[350px] sm:h-[450px]">
                <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    alt="" class="absolute inset-0 h-full w-full object-cover opacity-100 group-hover:opacity-0" />

                <img src="https://images.unsplash.com/photo-1523381140794-a1eef18a37c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8MjQ2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60"
                    alt="" class="absolute inset-0 h-full w-full object-cover opacity-0 group-hover:opacity-100" />
            </div>

            <div class="relative bg-white pt-3">
                <h3 class="text-sm text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    Limited Edition Sports Trainer
                </h3>

                <p class="mt-1.5 tracking-wide text-gray-900">$189.99</p>
            </div>
        </a>
    </div>
@endsection
