<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="flex justify-center mt-2">
        <div class="flex flex-col gap-8 w-[50rem] px-8 text-gray-800">
            <table class="min-w-full divide-y divide-slate-300 bg-white shadow rounded-xl">
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