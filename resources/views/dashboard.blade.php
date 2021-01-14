<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-r-2 border-gray-200">
                    <livewire:profile-photo-uploader/>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="border-b pb-6">
                        <livewire:post-form/>
                    </div>
                    <livewire:posts/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
