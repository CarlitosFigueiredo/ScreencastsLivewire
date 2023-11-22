<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div>
                        <x-input-label for="add" :value="__('Add')" />
                        <x-text-input wire:model.live.change="todo" id="add" class="block mt-1 w-full" type="text" name="add" />
                        <x-input-error :messages="$errors->get('add')" class="mt-2" />

                        <span>
                            {{ __('Current todo: ') }} {{ $todo }}
                        </span>
                    </div>
                    
                    <x-secondary-button wire:click="add" class="my-2">
                        {{ __('Add') }}
                    </x-secondary-button>

                    <ul>
                        @foreach ($todos as $todo)
                            <li>{{ $todo }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
