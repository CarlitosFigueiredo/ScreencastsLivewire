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

                    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div x-data="{ open: false }">
                        <button @click="open = ! open">MENU SUSPENSO COM ALPINE</button>

                        <div x-show="open" @click.outside="open = false">
                            <ul>
                                <li>a</li>
                                <li>b</li>
                                <li>c</li>
                                <li>d</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div x-data="{
                            search: '',
                    
                            items: ['foo', 'bar', 'baz'],
                    
                            get filteredItems() {
                                return this.items.filter(
                                    i => i.startsWith(this.search)
                                )
                            }
                        }">
                        <input x-model="search" placeholder="Search...">

                        <ul>
                            <template x-for="item in filteredItems" :key="item">
                                <li x-text="item"></li>
                            </template>
                        </ul>
                    </div>


                    <button x-data @click="alert('I\'ve been clicked!')">Click Me</button>
                </div>
            </div>
        </div>
    </div>

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

                                <button type="button"
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- MODELAGEM - ITENS ESSENCIAIS --}}

                    <div x-data="{ title: 'Start Here' }">
                        <h1 x-text="title"></h1>
                    </div>

                    <span x-text="1 + 2"></span>

                    {{-- Tira da dom --}}
                    <div x-data="{ open: false }">
                        <button @click="open = ! open">Expand</button>

                        <template x-if="open">
                            <div>
                                Content...
                            </div>
                        </template>
                    </div>

                    {{-- Acrescenta um style="display: none" --}}
                    <div x-data="{ open: false }">
                        <button @click="open = ! open">Expands</button>

                        <div x-show="open" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-90">

                            Content...
                        </div>
                    </div>

                    <button x-data="{ red: false }" x-bind:class="red ? 'bg-red' : ''" @click="red = ! red">
                        Toggle Red
                    </button>

                    <div x-data="{ statuses: ['open', 'closed', 'archived'] }">
                        <template x-for="status in statuses">
                            <div x-text="status"></div>
                        </template>
                    </div>

                    <div x-data="{ title: '<h1>Start Here</h1>' }">
                        <div x-html="title"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- EVENTOS --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <button x-on:click="console.log('clicked')">...</button>


                    <input x-on:keyup.enter="console.log('clicked')">

                    <input x-on:keyup.shift.enter="console.log('clicked')" />

                </div>
            </div>
        </div>
    </div>

    {{-- EVENTOS --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div x-data="{ open: false }">
                        <button x-on:click="open = ! open">Toggle Dropdown</button>

                        <div x-show="open" x-transition>
                            Dropdown Contents...
                        </div>
                    </div>


                    <div x-data="{ placeholder: 'Type here...' }">
                        <input type="text" x-bind:placeholder="placeholder">
                    </div>

                    <div x-data="dropdown()">
                        <button x-bind="trigger">Open Dropdown</button>

                        <span x-bind="dialogue">Dropdown Contents</span>
                    </div>


                    <button x-on:click="alert('Hello World!')">Say Hi</button>

                    {{-- https://alpinejs.dev/directives/on#passive --}}
                </div>
            </div>
        </div>
    </div>




</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdown', () => ({
            open: false,
 
            trigger: {
                ['x-ref']: 'trigger',
                ['@click']() {
                    this.open = true
                },
            },
 
            dialogue: {
                ['x-show']() {
                    return this.open
                },
                ['@click.outside']() {
                    this.open = false
                },
            },
        }))
    })
</script>