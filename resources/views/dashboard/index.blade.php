<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Selamat datang di Dashboard!
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mt-2">
                    Silakan pilih menu untuk mengelola penyewaan lapangan futsal.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
