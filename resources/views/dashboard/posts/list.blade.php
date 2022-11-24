<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Post</a>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-status class="w-full flex flex-row border-l-4 border-l-green-400 bg-lime-50 pl-12 py-4 pr-4" :status="session('message')" />
        </div>
    </div>


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col gap-4">
                    <div class="grid grid-cols-4 gap-4 px-4 py-2 bg-gray-100 rounded-md shadow-md uppercase text-xs">
                        <h4 class="text-left">Nombre</h4>
                        <h4 class="text-center">Descripción</h4>
                        <h4 class="text-center">Fecha</h4>
                        <h4 class="text-center">Acciones</h4>
                    </div>
                    <div class="grid grid-cols-4 gap-4 px-4 text-xs">
                        @foreach ($posts as $post)
                            <div class="flex justify-start">
                                <div class="flex flex-row gap-2">
                                    <img src="{{ asset('images/' . $post->image) }}" alt="" class="w-12 h-12 rounded">
                                    <div class="flex flex-col">
                                        <h4 class="text-left">{{ $post->title }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">{!! $post->content !!}</div>
                            <div class="text-center">
                                @if($post->created_at)
                                <x-carbon :date="$post->created_at" human />
                                @else
                                    -
                                @endif
                            </div>
                            <x-dropdown class="text-center text-gray-500 relative flex justify-center">
                                <x-slot name="trigger">
                                    <x-heroicon-o-ellipsis-vertical class="h-10 w-6 rounded-full bg-gray-100 text-blue-gray-700 shadow" />
                                </x-slot>
                                <div class="absolute top-10 right-10 z-10 w-20 rounded shadow-xl bg-white px-2 py-1 flex flex-col gap-2">
                                    <a class="hover:bg-gray-100 py-1 px-2 rounded bg-white text-blue-gray-600 flex flex-row gap-2 justify-start items-center" href="{{ route('posts.edit', $post->id) }}">
                                        <span><x-heroicon-o-pencil class="h-4 w-4 text-blue-gray-600" /></span><span>Editar</span>
                                    </a>
                                    <x-form-button :action="route('posts.delete', $post->id)" method="DELETE" class="hover:bg-gray-100 py-1 px-2 rounded bg-white text-red-600 flex flex-row gap-2 justify-start items-center">
                                        <x-heroicon-o-trash class="h-4 w-4 text-red-600" /> <span>Borrar</span>
                                    </x-form-button>
                                </div>
                            </x-dropdown>
                        @endforeach
                    </div>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
