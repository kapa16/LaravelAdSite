<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="breadcrumbs">
        <nav class="max-w-7xl mx-auto bg-grey-light p-3 rounded font-sans w-full m-4">
            <ol class="list-reset flex text-grey-dark">
                <li><a href="{{ route('dashboard') }}" class="text-blue font-bold">{{ __('Home') }}</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="{{ route('cabinet') }}" class="text-blue font-bold">{{ __('Cabinet') }}</a></li>
                <li><span class="mx-2">/</span></li>
                <li>{{ __('Dashboard') }}</li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-800 dark:shadow-sm">
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
