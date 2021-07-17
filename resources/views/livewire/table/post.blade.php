<div>
    <x-data-table :data="$data" :model="$posts">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('title')" role="button" href="#">
                        Title
                        @include('components.sort-icon', ['field' => 'title'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('content')" role="button" href="#">
                        Content
                        @include('components.sort-icon', ['field' => 'content'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('url_slug')" role="button" href="#">
                        URL Slug
                        @include('components.sort-icon', ['field' => 'url_slug'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                        Created Date
                        @include('components.sort-icon', ['field' => 'created_at'])
                    </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($posts as $post)
                <tr x-data="window.__controller.dataTableController({{ $post->id }})">
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->url_slug }}</td>
                    <td>{{ $post->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/post/edit/{{ $post->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
