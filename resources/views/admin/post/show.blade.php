<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mb-6 text-2xl text-gray-900 dark:text-gray-100">
                    {{ __('single Posts') }}
                </div>
                <div class="grid grid-cols-3 gap-6">

                    <div class="p-6 bg-white  rounded">
                        <h1 class="text-xl font-medium text-gray-900 mb-5"> <a href="#">{{ $post->title }}</a>
                        </h1>
                        <p class="text-base text-gray-600">{{ $post->body }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
