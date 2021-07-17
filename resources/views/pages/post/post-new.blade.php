<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Create Post') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Post</a></div>
            <div class="breadcrumb-item"><a href="{{ route('post') }}">Create Post</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-post action="createPost" />
    </div>
</x-app-layout>
