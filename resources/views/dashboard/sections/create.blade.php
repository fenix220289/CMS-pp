<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Section') }}
        </h2>
    </x-slot>

    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-validate-errors :errors="$errors" class="mt-2 w-full flex flex-col gap-2 border-l-4 border-l-red-400 bg-red-50 pl-12 py-4 pr-4" />
      </div>
    </div>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <x-form class="flex flex-col gap-4" method="POST" action="{{ route('sections.store')  }}" has-files>
                    <div class="flex flex-col w-full gap-2">
                      <x-label for="title" />
                      <x-input class="rounded" name="title" value="{{ old('title') }}" />
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <x-label for="description" />
                        <x-input class="rounded" name="description" value="{{ old('description') }}" />
                      </div>
                      <div class="flex flex-col w-full gap-2">
                        <label for="post_id">Post</label>
                        <select class="rounded" name="post_id">
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}">{{$post->title}}</option>
                            @endforeach

                        </select>
                      </div>
                    <div class="flex flex-col w-full gap-2">
                      <x-label for="Contenido" />
                      <input name="content" id="content" value="{{ old('content') }}" type="hidden">
                      <trix-editor input="content" class="trix-content"></trix-editor>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                      <x-label for="image" />
                      <x-input class="rounded" name="image" type="file" />
                    </div>
                    <div class="flex flex-row  justify-end">
                      <x-primary-button class="ml-3">
                        {{ __('Save') }}
                    </x-primary-button>
                    </div>
                  </x-form>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>