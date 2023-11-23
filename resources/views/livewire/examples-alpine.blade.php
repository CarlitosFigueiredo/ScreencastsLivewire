<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Examples Alpine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div x-data="{ count: 0 }">

                        <p>
                            Counte: <span x-text="count"></span>
                        </p>

                        <x-primary-button x-on:click="count++">
                            {{ __('+') }}
                        </x-primary-button>

                        <x-secondary-button x-on:click="count--">
                            {{ __('-') }}
                        </x-secondary-button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- <form wire:submit="save"> LIVEWIRE --}}
                    {{-- <form x-on:submit.prevent="$wire.save()"> ALPINE --}}

                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input wire:model="title" id="title" class="block mt-1 w-full" type="text"
                                name="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />

                            <button 
                                type="button"
                                class="my-3 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                x-on:click="$wire.title = ''">

                                {{ __('Clear Title') }}
                            </button>
                        </div>

                        <p>
                            Current Title: <span x-text="$wire.title"></span>
                        </p>

                        <p>
                            Number of Characters : <span x-text="$wire.title.length"></span>
                        </p>

                        <p>
                            Put characters in all capital letters: <span x-text="$wire.title.toUpperCase()"></span>
                        </p>

                        <p>
                            Concatenate Title + Content : <span x-text="$wire.title + $wire.content"></span>
                        </p>


                        {{-- Content --}}
                        <div>
                            <x-input-label for="content" :value="__('Content')" class="mt-2" />
                            <x-text-input wire:model="content" id="content" class="block mt-1 w-full" type="text"
                                name="content" />
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />

                            <small>
                                Characters: <span x-text="$wire.content.length"></span>
                            </small>

                            <small>
                                Words: <span x-text="$wire.content.split(' ').length -1"></span>
                            </small>
                        </div>

                        <button type="button"
                            class="mt-3 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                            x-on:click="$wire.save()">
                            {{ __('Save') }}
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>