<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profil Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            {{-- Notifikasi sukses --}}
            @if (session('status'))
                <div class="bg-green-500 text-white p-4 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Formulir Edit Profil --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @if (view()->exists('profile.partials.update-profile-information-form'))
                        @include('profile.partials.update-profile-information-form')
                    @else
                        <p class="text-red-500">Formulir update profil tidak ditemukan.</p>
                    @endif
                </div>
            </div>

            {{-- Formulir Ubah Password --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @if (view()->exists('profile.partials.update-password-form'))
                        @include('profile.partials.update-password-form')
                    @else
                        <p class="text-red-500">Formulir ubah password tidak ditemukan.</p>
                    @endif
                </div>
            </div>

            {{-- Formulir Hapus Akun --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @if (view()->exists('profile.partials.delete-user-form'))
                        @include('profile.partials.delete-user-form')
                    @else
                        <p class="text-red-500">Formulir hapus akun tidak ditemukan.</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
