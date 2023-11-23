<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update your profile...') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <form wire:submit="save" class="min-w-[30rem] flex flex-col gap-6 bg-white rounded-lg shadow p-6">
                        <label class="flex flex-col gap-2">
                            <h3 class="font-medium text-slate-700 text-base">Username <span class="text-red-500 opacity-75" aria-hidden="true">*</span></h3>
                
                            <input
                                wire:model="name"
                                @class([
                                    'px-3 py-2 rounded-lg text-gray-800',
                                    'border border-slate-300' => $errors->missing('form.username'),
                                    'border-2 border-red-500' => $errors->has('form.username'),
                                ])
                                @error('form.username')
                                    aria-invalid="true"
                                    aria-description="{{ $message }}"
                                @enderror
                            >
                
                            @error('form.username')
                                <p class="text-sm text-red-500" aria-live="assertive">{{ $message }}</p>
                            @enderror
                        </label>
                
                        <label class="flex flex-col gap-2">
                            <h3 class="font-medium text-slate-700 text-base">Bio</h3>
                
                            <textarea wire:model="bio" rows="4" class="px-3 py-2 border border-slate-300 rounded-lg  text-gray-800"></textarea>
                        </label>
                
                        {{-- <label class="flex flex-col gap-2">
                            <h3 class="font-medium text-slate-700 text-base">Country <span class="text-red-500 opacity-75" aria-hidden="true">*</span></h3>
                
                            <select
                                wire:model.blur="form.country"
                                @class([
                                    'px-3 py-2 rounded-lg',
                                    'border border-slate-300' => $errors->missing('form.country'),
                                    'border-2 border-red-500' => $errors->has('form.country'),
                                ])
                                @error('form.country')
                                    aria-invalid="true"
                                    aria-description="{{ $message }}"
                                @enderror
                            >
                                <option value="" selected disabled>Choose your country</option>
                
                                @foreach (App\Enums\Country::cases() as $country)
                                    <option value="{{ $country->value }}">{{ $country->label() }}</option>
                                @endforeach
                            </select>
                
                            @error('form.country')
                                <p class="text-sm text-red-500" aria-live="assertive">{{ $message }}</p>
                            @enderror
                        </label>
                
                        <fieldset class="flex flex-col gap-2">
                            <div>
                                <legend class="font-medium text-slate-700 text-base">Receive emails?</legend>
                            </div>
                
                            <div class="flex gap-6">
                                <label class="flex items-center gap-2">
                                    <input wire:model.boolean="form.receive_emails" type="radio" name="receive_emails" value="true">
                                    Yes
                                </label>
                
                                <label class="flex items-center gap-2">
                                    <input wire:model.boolean="form.receive_emails" type="radio" name="receive_emails" value="false">
                                    No
                                </label>
                            </div>
                        </fieldset>
                
                        <fieldset x-show="$wire.form.receive_emails" class="flex flex-col gap-2">
                            <div>
                                <legend class="font-medium text-slate-700 text-base">Email type</legend>
                            </div>
                
                            <div class="flex flex-col gap-2">
                                <label class="flex items-center gap-2">
                                    <input wire:model="form.receive_updates" type="checkbox" name="receive_emails" class="rounded">
                                    General updates
                                </label>
                
                                <label class="flex items-center gap-2">
                                    <input wire:model="form.receive_offers" type="checkbox" name="receive_emails" class="rounded">
                                    Marketing offers
                                </label>
                            </div>
                        </fieldset> --}}
                
                        <div class="flex">
                            <button type="submit" class="relative w-full bg-blue-500 py-3 px-8 rounded-lg text-white font-medium disabled:cursor-not-allowed disabled:opacity-75">
                                Save
                
                                <div wire:loading.flex wire:target="save" class="flex absolute top-0 right-0 bottom-0 flex items-center pr-4">
                                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </form>
        
                </div>
            </div>
        </div>
    </div>
</div>