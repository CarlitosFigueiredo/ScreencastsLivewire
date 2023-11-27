<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="w-full table-fixed border-separate border-spacing-2 border border-slate-500 hover:border-spacing-2">
                        <thead>
                            <tr>
                                <th class="border border-slate-600 p-2 bg-white dark:bg-gray-800 w-20 text-start">
                                    {{ __('Title') }}
                                </th>
                                <th class="border border-slate-600 p-2 bg-white dark:bg-gray-800 text-start">
                                    {{ __('Content') }}
                                </th>
                                <th class="border border-slate-600 p-2 bg-white dark:bg-gray-800 w-48 text-gray-800">
                                
                                    <x-dialog wire:model="showAddPostDialog">

                                        <x-dialog.button>
                                            <button type="button" class="text-white bg-blue-500 rounded-xl px-4 py-2 text-sm">New Post</button>
                                        </x-dialog.button>
            
                                        <x-dialog.panel>
                                            <form wire:submit="add" class="flex flex-col gap-4">
                                                <h2 class="text-3xl font-bold mb-1">Write your new post!</h2>
            
                                                <hr class="w-[75%]">
            
                                                <label class="flex flex-col gap-2">
                                                    Title
                                                    <input autofocus wire:model="form.title" class="px-3 py-2 border font-normal rounded-lg border-slate-300">
                                                    @error('form.title')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                                                </label>
            
                                                <label class="flex flex-col gap-2">
                                                    Content
                                                    <textarea wire:model="form.content" rows="5" class="px-3 py-2 border font-normal rounded-lg border-slate-300"></textarea>
                                                    @error('form.content')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                                                </label>
            
                                                <x-dialog.footer>
                                                    <x-dialog.close-button>
                                                        <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                                                    </x-dialog.close-button>
            
                                                    <button type="submit" class="text-center rounded-xl bg-blue-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Save</button>
                                                </x-dialog.footer>
                                            </form>
                                        </x-dialog.panel>
                                    </x-dialog>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)

                                <livewire:post-row :key="$post->id" :post="$post" />
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>