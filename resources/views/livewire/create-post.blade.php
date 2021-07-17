<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Post') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Write the post with title') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <x-jet-input id="title" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="post.title" />
                <x-jet-input-error for="post.title" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="content" value="{{ __('Content') }}" />
                <x-jet-input id="content" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="post.content" />
                <x-jet-input-error for="post.content" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="url_slug" value="{{ __('URL Slug') }}" />
                <x-jet-input id="url_slug" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="post.url_slug" />
                <x-jet-input-error for="post.url_slug" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="meta_description" value="{{ __('Meta Description') }}" />
                <x-jet-input id="meta_description" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="post.meta_description" />
                <x-jet-input-error for="post.meta_description" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
