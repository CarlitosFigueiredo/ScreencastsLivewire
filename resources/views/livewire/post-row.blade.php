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

        <x-danger-button 
            type="button" 
            wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure you want to delete this Post?">
            
            {{ __('x') }}
        </x-danger-button>
    </td>
</tr>