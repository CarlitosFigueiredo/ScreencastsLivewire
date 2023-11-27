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
                                
                                    <livewire:add-post-dialog @added="$refresh" />
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