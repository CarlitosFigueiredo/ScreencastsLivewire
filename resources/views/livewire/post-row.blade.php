<tr @class(['bg-gray-500' => $post->is_archived])>

    <td class="border border-slate-700 p-2">
        {{ $post->title }}
    </td>
    <td class="border border-slate-700 p-2">
        {{ str($post->content)->words(15) }}
    </td>
    <td class="border border-slate-600 text-center">

        @unless($post->is_archived)
            
            <x-secondary-button
                type="button" 
                wire:click="archive"
                wire:confirm="Are you sure you want to archive this Post?">
                
                {{ __('Archive') }}
            </x-secondary-button>
        @endunless

        <x-dialog wire:model="showEditDialog">
            <x-dialog.button>
                <button type="button" class="font-medium text-blue-600">
                    Edit
                </button>
            </x-dialog.button>

            <x-dialog.panel>
                <form wire:submit="save" class="flex flex-col gap-4 text-gray-800">
                    <h2 class="text-3xl font-bold mb-1">Edit your post</h2>

                    <hr class="w-[75%]">

                    <label class="flex flex-col gap-2">
                        Title
                        <input autofocus wire:model="form.title" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.title')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Content
                        <textarea wire:model="form.content" rows="5" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed"></textarea>
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

        <x-dialog>
            <x-dialog.button>
                <button type="button" class="px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    Delete
                </button>
            </x-dialog.button>

            <x-dialog.panel>

                <div class="flex flex-col gap-6 text-gray-800" x-data="{ confirmation: '' }">
                    <h2 class="font-semibold text-3xl">Are you sure you?</h2>
                    <h2 class="text-lg text-slate-700">This operation is permanant and can't be reversed. This post will be deleted forever.</h2>

                    <label class="flex flex-col gap-2">
                        Type "CONFIRM"
                        <input x-model="confirmation" class="px-3 py-2 border border-slate-300 rounded-lg" placeholder="CONFIRM">
                    </label>

                    <x-dialog.footer>
                        <x-dialog.close-button>
                            <button class="text-lg text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                        </x-dialog.close-button>

                        <x-dialog.close-button>
                            <button :disabled="confirmation !== 'CONFIRM'" wire:click="dispatch('deleted')" wire:click="$parent.delete({{ $post->id }})" class="text-lg text-center rounded-xl bg-red-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Delete</button>
                        </x-dialog.close-button>
                    </x-dialog.footer>
                </div>
            </x-dialog.panel>
            
        </x-dialog>
    </td>
</tr>